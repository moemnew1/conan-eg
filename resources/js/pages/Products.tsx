import { useState, useMemo, useEffect, useCallback } from 'react';
import { usePage, router } from '@inertiajs/react';
import MainLayout from '@/layouts/Mainlayout';

// ─── Types ────────────────────────────────────────────────────────────────────

interface Group {
    id: number;
    name: string;
    ar_name: string | null;
    image: string | null;
    product_count: number;
}

interface Variant {
    id: number;
    code: string | null;
    description: string | null;
    ar_description: string | null;
    link: string | null;
}

interface Product {
    id: number;
    name: string;
    ar_name: string | null;
    image: string | null;
    images: string[];
    description: string | null;
    ar_description: string | null;
    link: string | null;
    variants: Variant[];
}

interface PageProps {
    groups: Group[];
    products: Product[] | null;
    activeGroup: Group | null;
    locale?: string;
    [key: string]: unknown;
}

const FALLBACK_ICONS = ['⚡', '🔧', '🌿', '🔩', '🛠️', '⚙️', '🪛', '🔨'];

// ─── Page ─────────────────────────────────────────────────────────────────────

export default function ProductsPage() {
    const { props } = usePage<PageProps>();
    const groups: Group[] = props.groups ?? [];
    const products: Product[] = props.products ?? [];
    const activeGroup: Group | null = props.activeGroup ?? null;
    const locale = (props.locale as string) ?? 'en';

    const [search, setSearch] = useState('');
    const [animKey, setAnimKey] = useState<number | null>(activeGroup?.id ?? null);
    const [isExiting, setIsExiting] = useState(false);
    const [modalProduct, setModalProduct] = useState<Product | null>(null);
    const [modalImageIdx, setModalImageIdx] = useState(0);
    const [isSliding, setIsSliding] = useState(false);
    const [slideDir, setSlideDir] = useState<'left' | 'right'>('right');

    useEffect(() => {
        setAnimKey(activeGroup?.id ?? null);
        setIsExiting(false);
    }, [activeGroup?.id]);

    // Close modal on Escape / arrow keys
    useEffect(() => {
        const handler = (e: KeyboardEvent) => {
            if (e.key === 'Escape') setModalProduct(null);
            if (e.key === 'ArrowRight' && modalProduct) navigateImage('right');
            if (e.key === 'ArrowLeft'  && modalProduct) navigateImage('left');
        };
        window.addEventListener('keydown', handler);
        return () => window.removeEventListener('keydown', handler);
    }, [modalProduct, modalImageIdx]);

    // Lock body scroll when modal open
    useEffect(() => {
        document.body.style.overflow = modalProduct ? 'hidden' : '';
        return () => { document.body.style.overflow = ''; };
    }, [modalProduct]);

    const navigateImage = useCallback((dir: 'left' | 'right') => {
        if (!modalProduct || isSliding) return;
        const max = modalProduct.images.length - 1;
        const next = dir === 'right'
            ? Math.min(modalImageIdx + 1, max)
            : Math.max(modalImageIdx - 1, 0);
        if (next === modalImageIdx) return;
        setSlideDir(dir);
        setIsSliding(true);
        setTimeout(() => {
            setModalImageIdx(next);
            setIsSliding(false);
        }, 260);
    }, [modalProduct, modalImageIdx, isSliding]);

    const handleGroupClick = (group: Group) => {
        if (group.id === activeGroup?.id) return;
        setIsExiting(true);
        setTimeout(() => {
            router.get(`/${locale}/products`, { group: group.id }, { preserveState: false, preserveScroll: false });
            setSearch('');
        }, 200);
    };

    const handleBack = () => {
        setIsExiting(true);
        setTimeout(() => {
            router.get(`/${locale}/products`, {}, { preserveState: false, preserveScroll: false });
            setSearch('');
        }, 200);
    };

    const openModal = (product: Product) => {
        setModalProduct(product);
        setModalImageIdx(0);
        setIsSliding(false);
    };

    const filteredProducts = useMemo(() => {
        if (!search.trim()) return products;
        const q = search.toLowerCase();
        return products.filter(p =>
            p.name.toLowerCase().includes(q) ||
            (p.ar_name ?? '').toLowerCase().includes(q) ||
            (p.description ?? '').toLowerCase().includes(q)
        );
    }, [products, search]);

    return (
        <>
            <style>{`
                @keyframes fadeSlideUp {
                    from { opacity: 0; transform: translateY(18px); }
                    to   { opacity: 1; transform: translateY(0); }
                }
                @keyframes fadeSlideDown {
                    from { opacity: 0; transform: translateY(-10px); }
                    to   { opacity: 1; transform: translateY(0); }
                }
                @keyframes exitDown {
                    from { opacity: 1; transform: translateY(0); }
                    to   { opacity: 0; transform: translateY(14px); }
                }
                @keyframes overlayIn {
                    from { opacity: 0; }
                    to   { opacity: 1; }
                }
                @keyframes modalIn {
                    from { opacity: 0; transform: scale(0.96) translateY(16px); }
                    to   { opacity: 1; transform: scale(1) translateY(0); }
                }
                @keyframes slideInFromRight {
                    from { opacity: 0; transform: translateX(60px); }
                    to   { opacity: 1; transform: translateX(0); }
                }
                @keyframes slideInFromLeft {
                    from { opacity: 0; transform: translateX(-60px); }
                    to   { opacity: 1; transform: translateX(0); }
                }
                @keyframes slideOutToLeft {
                    from { opacity: 1; transform: translateX(0); }
                    to   { opacity: 0; transform: translateX(-60px); }
                }
                @keyframes slideOutToRight {
                    from { opacity: 1; transform: translateX(0); }
                    to   { opacity: 0; transform: translateX(60px); }
                }
                @keyframes shimmer {
                    0%   { background-position: -200% 0; }
                    100% { background-position: 200% 0; }
                }

                .anim-header       { animation: fadeSlideDown 0.35s cubic-bezier(.22,.68,0,1.2) both; }
                .anim-exit         { animation: exitDown 0.2s ease-in both; }
                .card-stagger      { opacity: 0; animation: fadeSlideUp 0.4s cubic-bezier(.22,.68,0,1.2) both; }
                .group-card-enter  { opacity: 0; animation: fadeSlideUp 0.38s cubic-bezier(.22,.68,0,1.2) both; }
                .sidebar-item      { transition: background 0.18s, color 0.18s, transform 0.15s; }
                .sidebar-item:hover { transform: translateX(3px); }
                .modal-overlay     { animation: overlayIn 0.22s ease both; }
                .modal-box         { animation: modalIn 0.32s cubic-bezier(.22,.68,0,1.2) both; }

                .img-slide-in-right  { animation: slideInFromRight 0.26s cubic-bezier(.22,.68,0,1.2) both; }
                .img-slide-in-left   { animation: slideInFromLeft  0.26s cubic-bezier(.22,.68,0,1.2) both; }
                .img-slide-out-left  { animation: slideOutToLeft   0.26s cubic-bezier(.4,0,1,1) both; }
                .img-slide-out-right { animation: slideOutToRight  0.26s cubic-bezier(.4,0,1,1) both; }

                .thumb-scroll::-webkit-scrollbar { height: 4px; }
                .thumb-scroll::-webkit-scrollbar-track { background: transparent; }
                .thumb-scroll::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 99px; }

                .buy-btn {
                    position: relative;
                    overflow: hidden;
                    transition: transform 0.15s, box-shadow 0.15s, opacity 0.15s;
                }
                .buy-btn::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: linear-gradient(105deg, transparent 40%, rgba(255,255,255,0.25) 50%, transparent 60%);
                    background-size: 200% 100%;
                    opacity: 0;
                    transition: opacity 0.2s;
                }
                .buy-btn:hover::after {
                    opacity: 1;
                    animation: shimmer 0.6s ease forwards;
                }
                .buy-btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 20px rgba(255,158,26,0.4);
                }
                .buy-btn:active { transform: translateY(0); }

                .variant-row {
                    transition: background 0.16s, border-color 0.16s, transform 0.14s;
                }
                .variant-row:hover {
                    transform: translateX(2px);
                    background: rgba(255,158,26,0.03);
                }

                .nav-arrow {
                    transition: background 0.15s, color 0.15s, transform 0.15s, opacity 0.15s;
                }
                .nav-arrow:hover:not(:disabled) {
                    transform: scale(1.1);
                    background: rgba(255,255,255,1) !important;
                    color: #FF9E1A !important;
                }
                .nav-arrow:disabled { opacity: 0.25; cursor: default; }
            `}</style>

            <MainLayout>
                {({ lang, c, isRtl }) => {
                    const groupName   = (g: Group)   => lang === 'ar' && g.ar_name        ? g.ar_name        : g.name;
                    const productName = (p: Product) => lang === 'ar' && p.ar_name        ? p.ar_name        : p.name;
                    const productDesc = (p: Product) => lang === 'ar' && p.ar_description ? p.ar_description : p.description;
                    const variantDesc = (v: Variant) => lang === 'ar' && v.ar_description ? v.ar_description : v.description;

                    return (
                        <>
                            {/* ── PAGE HEADER ── */}
                           
                            <section className="pt-12 pb-10 px-[5%] bg-gray-50 border-b border-gray-100">
                                <div className="max-w-6xl mx-auto">
                                    {activeGroup ? (
                                        <div key={`header-${activeGroup.id}`} className="anim-header">
                                            <div className="flex items-center gap-2 text-sm text-gray-400 mb-5">
                                                <button onClick={handleBack}
                                                    className="hover:text-[#FF9E1A] transition-colors font-medium flex items-center gap-1 group">
                                                    <span className="inline-block transition-transform duration-150 group-hover:-translate-x-1">←</span>
                                                    {isRtl ? 'المنتجات' : 'Products'}
                                                </button>
                                                <span className="text-gray-200">/</span>
                                                <span className="text-gray-700 font-semibold">{groupName(activeGroup)}</span>
                                            </div>
                                            <div className="flex items-center gap-4 flex-wrap">
                                                {activeGroup.image ? (
                                                    <img src={activeGroup.image} alt={groupName(activeGroup)}
                                                        className="w-14 h-14 rounded-xl object-cover border border-gray-200"
                                                        style={{ animation: 'fadeSlideUp 0.4s cubic-bezier(.22,.68,0,1.2) both' }}
                                                        onError={e => (e.currentTarget.style.display = 'none')} />
                                                ) : (
                                                    <div className="w-14 h-14 rounded-xl flex items-center justify-center text-2xl border"
                                                        style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)', animation: 'fadeSlideUp 0.4s cubic-bezier(.22,.68,0,1.2) both' }}>
                                                        {FALLBACK_ICONS[groups.findIndex(g => g.id === activeGroup.id) % FALLBACK_ICONS.length]}
                                                    </div>
                                                )}
                                                <div>
                                                    <h1 className="text-3xl font-extrabold text-gray-900 leading-tight">{groupName(activeGroup)}</h1>
                                                    <p className="text-sm text-gray-400 mt-0.5">{activeGroup.product_count} {isRtl ? 'منتج' : 'products'}</p>
                                                </div>
                                            </div>
                                            <div className="mt-6 relative max-w-md" style={{ animation: 'fadeSlideUp 0.45s 0.1s cubic-bezier(.22,.68,0,1.2) both' }}>
                                                <span className="absolute left-3 top-1/2 -translate-y-1/2 text-gray-300 pointer-events-none">🔍</span>
                                                <input type="text" value={search} onChange={e => setSearch(e.target.value)}
                                                    placeholder={isRtl ? 'ابحث في المنتجات...' : 'Search products...'}
                                                    className="w-full border border-gray-200 rounded-lg pl-9 pr-4 py-2.5 text-sm outline-none focus:border-[#FF9E1A] transition-colors bg-white" />
                                                {search && (
                                                    <button onClick={() => setSearch('')}
                                                        className="absolute right-3 top-1/2 -translate-y-1/2 text-gray-300 hover:text-gray-500 text-sm">✕</button>
                                                )}
                                            </div>
                                        </div>
                                    ) : (
                                        <div className="anim-header">
                                            <span className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold border mb-5"
                                                style={{ background: 'rgba(255,158,26,0.1)', borderColor: 'rgba(255,158,26,0.3)', color: '#FF9E1A' }}>
                                                {isRtl ? '📦 تصفح حسب الفئة' : '📦 Browse by Category'}
                                            </span>
                                            <h1 className="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">{isRtl ? 'منتجاتنا' : 'Our Products'}</h1>
                                            <p className="text-sm text-gray-400">{isRtl ? 'اختر فئة لعرض المنتجات المتاحة' : 'Select a category to browse available products'}</p>
                                        </div>
                                    )}
                                </div>
                            </section>

                            {/* ── SIDEBAR + CONTENT ── */}
                            <section className="py-12 px-[5%]">
                                <div className="max-w-6xl mx-auto flex gap-8 items-start">

                                    {/* Sidebar */}
                                    <aside className="hidden md:flex flex-col gap-1 w-56 shrink-0 sticky top-24">
                                        <div className="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-2 px-3">
                                            {isRtl ? 'الفئات' : 'Categories'}
                                        </div>
                                        {groups.map((group, i) => {
                                            const isActive = activeGroup?.id === group.id;
                                            return (
                                                <button key={group.id} onClick={() => handleGroupClick(group)}
                                                    className={`sidebar-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-left w-full
                                                        ${isActive ? 'text-white shadow-sm' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'}`}
                                                    style={{
                                                        ...(isActive ? { background: '#FF9E1A' } : {}),
                                                        animation: `fadeSlideUp 0.35s ${i * 0.04}s cubic-bezier(.22,.68,0,1.2) both`,
                                                    }}>
                                                    <span className="text-base shrink-0">{FALLBACK_ICONS[i % FALLBACK_ICONS.length]}</span>
                                                    <span className="truncate">{groupName(group)}</span>
                                                    <span className={`ml-auto text-xs shrink-0 ${isActive ? 'text-orange-100' : 'text-gray-300'}`}>{group.product_count}</span>
                                                </button>
                                            );
                                        })}
                                    </aside>

                                    {/* Main */}
                                    <div className="flex-1 min-w-0">
                                        {/* Mobile pills */}
                                        <div className="flex md:hidden gap-2 overflow-x-auto pb-3 mb-6 -mx-1 px-1">
                                            {groups.map((group, i) => {
                                                const isActive = activeGroup?.id === group.id;
                                                return (
                                                    <button key={group.id} onClick={() => handleGroupClick(group)}
                                                        className={`flex items-center gap-1.5 px-3 py-2 rounded-full text-xs font-semibold whitespace-nowrap border transition-all shrink-0
                                                            ${isActive ? 'text-white border-transparent' : 'text-gray-600 border-gray-200 bg-white hover:border-[#FF9E1A]'}`}
                                                        style={isActive ? { background: '#FF9E1A', borderColor: '#FF9E1A' } : {}}>
                                                        <span>{FALLBACK_ICONS[i % FALLBACK_ICONS.length]}</span>
                                                        {groupName(group)}
                                                    </button>
                                                );
                                            })}
                                        </div>

                                        {/* Content */}
                                        <div className={isExiting ? 'anim-exit' : ''}>
                                            {activeGroup ? (
                                                filteredProducts.length === 0 ? (
                                                    <div className="text-center py-20" style={{ animation: 'fadeSlideUp 0.4s cubic-bezier(.22,.68,0,1.2) both' }}>
                                                        <div className="text-5xl mb-4">🔍</div>
                                                        <div className="text-base text-gray-400">
                                                            {search
                                                                ? (isRtl ? 'لا توجد نتائج مطابقة' : 'No matching products found')
                                                                : (isRtl ? 'لا توجد منتجات في هذه الفئة' : 'No products in this category')}
                                                        </div>
                                                        {search && (
                                                            <button onClick={() => setSearch('')} className="mt-4 text-sm font-semibold" style={{ color: '#FF9E1A' }}>
                                                                {isRtl ? 'مسح البحث' : 'Clear search'}
                                                            </button>
                                                        )}
                                                    </div>
                                                ) : (
                                                    <>
                                                        {search && <p className="text-sm text-gray-400 mb-4">{filteredProducts.length} {isRtl ? 'نتيجة' : 'results'}</p>}
                                                        <div key={`grid-${animKey}`} className="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                                                            {filteredProducts.map((product, i) => (
                                                                <div key={product.id} className="card-stagger"
                                                                    style={{ animationDelay: `${Math.min(i * 0.055, 0.55)}s` }}>
                                                                    <ProductCard
                                                                        product={product}
                                                                        name={productName(product)}
                                                                        description={productDesc(product)}
                                                                        isRtl={isRtl}
                                                                        onClick={() => openModal(product)}
                                                                    />
                                                                </div>
                                                            ))}
                                                        </div>
                                                    </>
                                                )
                                            ) : (
                                                <div className="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                                    {groups.map((group, i) => (
                                                        <div key={group.id} className="group-card-enter" style={{ animationDelay: `${i * 0.07}s` }}>
                                                            <button onClick={() => handleGroupClick(group)}
                                                                className="border border-gray-100 rounded-xl overflow-hidden cursor-pointer group hover:border-[#FF9E1A] hover:shadow-md transition-all duration-200 text-left w-full"
                                                                style={{ transition: 'transform 0.18s, box-shadow 0.18s, border-color 0.18s' }}
                                                                onMouseEnter={e => (e.currentTarget.style.transform = 'translateY(-3px)')}
                                                                onMouseLeave={e => (e.currentTarget.style.transform = '')}>
                                                                {group.image ? (
                                                                    <img src={group.image} alt={groupName(group)}
                                                                        className="w-full aspect-[4/3] object-cover block bg-gray-100"
                                                                        onError={e => (e.currentTarget.style.display = 'none')} />
                                                                ) : (
                                                                    <div className="w-full aspect-[4/3] flex items-center justify-center text-4xl"
                                                                        style={{ background: 'rgba(255,158,26,0.08)' }}>
                                                                        {FALLBACK_ICONS[i % FALLBACK_ICONS.length]}
                                                                    </div>
                                                                )}
                                                                <div className="p-4">
                                                                    <div className="font-bold text-sm mb-1 leading-snug">{groupName(group)}</div>
                                                                    {group.product_count > 0 && (
                                                                        <div className="text-xs text-gray-400 mb-2">{group.product_count} {isRtl ? 'منتج' : 'products'}</div>
                                                                    )}
                                                                    <div className="text-xs font-semibold text-gray-400 group-hover:text-[#FF9E1A] transition-colors">
                                                                        {isRtl ? 'عرض المنتجات ←' : 'View products →'}
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    ))}
                                                </div>
                                            )}
                                        </div>
                                    </div>
                                </div>
                            </section>

                            {/* ── PRODUCT MODAL ── */}
                            {modalProduct && (
                                <div
                                    className="modal-overlay fixed inset-0 z-50 flex items-center justify-center p-4"
                                    style={{ background: 'rgba(0,0,0,0.6)', backdropFilter: 'blur(6px)' }}
                                    onClick={e => { if (e.target === e.currentTarget) setModalProduct(null); }}
                                >
                                    <div className="modal-box bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[92vh] overflow-y-auto flex flex-col">

                                        {/* ── IMAGE CAROUSEL ── */}
                                        {modalProduct.images.length > 0 ? (
                                            <div className="relative bg-gray-50 rounded-t-2xl overflow-hidden">

                                                {/* Main image with directional slide */}
                                                <div className="relative overflow-hidden aspect-video w-full bg-gray-100">
                                                    <img
                                                        key={`img-${modalImageIdx}-${slideDir}`}
                                                        src={modalProduct.images[modalImageIdx]}
                                                        alt={productName(modalProduct)}
                                                        className={`w-full h-full object-cover block absolute inset-0 ${
                                                            isSliding
                                                                ? (slideDir === 'right' ? 'img-slide-out-left' : 'img-slide-out-right')
                                                                : (slideDir === 'right' ? 'img-slide-in-right' : 'img-slide-in-left')
                                                        }`}
                                                    />

                                                    {/* Edge gradients */}
                                                    {modalProduct.images.length > 1 && (
                                                        <>
                                                            <div className="absolute left-0 top-0 bottom-0 w-20 pointer-events-none z-10"
                                                                style={{ background: 'linear-gradient(to right, rgba(0,0,0,0.22), transparent)' }} />
                                                            <div className="absolute right-0 top-0 bottom-0 w-20 pointer-events-none z-10"
                                                                style={{ background: 'linear-gradient(to left, rgba(0,0,0,0.22), transparent)' }} />
                                                        </>
                                                    )}

                                                    {/* Nav arrows */}
                                                    {modalProduct.images.length > 1 && (
                                                        <>
                                                            <button
                                                                onClick={() => navigateImage('left')}
                                                                disabled={modalImageIdx === 0 || isSliding}
                                                                className="nav-arrow absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full shadow-lg flex items-center justify-center text-xl font-bold text-gray-700 z-20"
                                                                style={{ background: 'rgba(255,255,255,0.92)' }}
                                                            >‹</button>
                                                            <button
                                                                onClick={() => navigateImage('right')}
                                                                disabled={modalImageIdx === modalProduct.images.length - 1 || isSliding}
                                                                className="nav-arrow absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full shadow-lg flex items-center justify-center text-xl font-bold text-gray-700 z-20"
                                                                style={{ background: 'rgba(255,255,255,0.92)' }}
                                                            >›</button>
                                                        </>
                                                    )}

                                                    {/* Image counter pill */}
                                                    {modalProduct.images.length > 1 && (
                                                        <div className="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold text-white z-20"
                                                            style={{ background: 'rgba(0,0,0,0.45)', backdropFilter: 'blur(4px)' }}>
                                                            {modalImageIdx + 1} / {modalProduct.images.length}
                                                        </div>
                                                    )}

                                                    {/* Dot indicators — pill style active dot */}
                                                    {modalProduct.images.length > 1 && (
                                                        <div className="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5 items-center z-20">
                                                            {modalProduct.images.map((_, idx) => (
                                                                <button
                                                                    key={idx}
                                                                    onClick={() => {
                                                                        if (idx === modalImageIdx || isSliding) return;
                                                                        setSlideDir(idx > modalImageIdx ? 'right' : 'left');
                                                                        setIsSliding(true);
                                                                        setTimeout(() => { setModalImageIdx(idx); setIsSliding(false); }, 260);
                                                                    }}
                                                                    className="rounded-full transition-all duration-250"
                                                                    style={{
                                                                        width:  idx === modalImageIdx ? '22px' : '7px',
                                                                        height: '7px',
                                                                        background: idx === modalImageIdx ? '#FF9E1A' : 'rgba(255,255,255,0.65)',
                                                                        boxShadow: '0 1px 3px rgba(0,0,0,0.35)',
                                                                    }}
                                                                />
                                                            ))}
                                                        </div>
                                                    )}
                                                </div>

                                                {/* Thumbnail strip */}
                                                {modalProduct.images.length > 1 && (
                                                    <div className="flex gap-2 px-4 py-3 overflow-x-auto thumb-scroll bg-white border-b border-gray-100">
                                                        {modalProduct.images.map((img, idx) => (
                                                            <button
                                                                key={idx}
                                                                onClick={() => {
                                                                    if (idx === modalImageIdx || isSliding) return;
                                                                    setSlideDir(idx > modalImageIdx ? 'right' : 'left');
                                                                    setIsSliding(true);
                                                                    setTimeout(() => { setModalImageIdx(idx); setIsSliding(false); }, 260);
                                                                }}
                                                                className="shrink-0 w-16 h-16 rounded-xl overflow-hidden border-2 transition-all duration-200"
                                                                style={{
                                                                    borderColor: idx === modalImageIdx ? '#FF9E1A' : 'transparent',
                                                                    opacity:     idx === modalImageIdx ? 1 : 0.55,
                                                                    transform:   idx === modalImageIdx ? 'scale(1.06)' : 'scale(1)',
                                                                    boxShadow:   idx === modalImageIdx ? '0 2px 10px rgba(255,158,26,0.35)' : 'none',
                                                                }}>
                                                                <img src={img} alt="" className="w-full h-full object-cover" />
                                                            </button>
                                                        ))}
                                                    </div>
                                                )}
                                            </div>
                                        ) : (
                                            <div className="w-full aspect-video flex items-center justify-center text-6xl rounded-t-2xl"
                                                style={{ background: 'rgba(255,158,26,0.06)' }}>📦</div>
                                        )}

                                        {/* ── INFO ── */}
                                        <div className="p-6 flex flex-col gap-5">

                                            {/* Title + close */}
                                            <div className="flex items-start justify-between gap-4">
                                                <h2 className="text-xl font-extrabold text-gray-900 leading-tight">{productName(modalProduct)}</h2>
                                                <button onClick={() => setModalProduct(null)}
                                                    className="shrink-0 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-gray-200 hover:text-gray-700 transition-colors text-sm">✕</button>
                                            </div>

                                            {/* Product description */}
                                            {productDesc(modalProduct) && (
                                                <p className="text-sm text-gray-500 leading-relaxed -mt-2">{productDesc(modalProduct)}</p>
                                            )}

                                            {/* ── VARIANTS ── */}
                                            {modalProduct.variants.length > 0 && (
                                                <div>
                                                    <div className="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3">
                                                        {isRtl ? 'الخيارات / الأكواد' : 'Variants / Codes'}
                                                    </div>
                                                    <div className="flex flex-col gap-2">
                                                        {modalProduct.variants.map(v => (
                                                            <div key={v.id}
                                                                className="variant-row rounded-xl border border-gray-100 hover:border-orange-200 overflow-hidden"
                                                                style={{ background: 'rgba(255,158,26,0.018)' }}>
                                                                <div className="flex items-center gap-3 px-4 py-3">
                                                                    {/* Code badge */}
                                                                    {v.code && (
                                                                        <span className="shrink-0 px-2.5 py-1 rounded-lg text-xs font-bold font-mono whitespace-nowrap"
                                                                            style={{ background: 'rgba(255,158,26,0.12)', color: '#FF9E1A' }}>
                                                                            {v.code}
                                                                        </span>
                                                                    )}

                                                                    {/* Description */}
                                                                    {variantDesc(v) && (
                                                                        <span className="text-sm text-gray-700 leading-snug flex-1 font-medium">
                                                                            {variantDesc(v)}
                                                                        </span>
                                                                    )}

                                                                    {/* Buy Now — per variant */}
                                                                    {v.link && (
                                                                        <a
                                                                            href={v.link}
                                                                            target="_blank"
                                                                            rel="noopener noreferrer"
                                                                            className="buy-btn shrink-0 flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-bold text-white"
                                                                            style={{ background: '#FF9E1A' }}
                                                                            onClick={e => e.stopPropagation()}
                                                                        >
                                                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
                                                                                <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
                                                                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                                                                            </svg>
                                                                            {isRtl ? 'اشتري الآن' : 'Buy Now'}
                                                                        </a>
                                                                    )}
                                                                </div>
                                                            </div>
                                                        ))}
                                                    </div>
                                                </div>
                                            )}

                                            {/* ── PRODUCT-LEVEL BUY NOW ── */}
                                            {modalProduct.link && (
                                                <a
                                                    href={modalProduct.link}
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    className="buy-btn flex items-center justify-center gap-2 w-full py-3.5 rounded-xl font-bold text-sm text-white mt-1"
                                                    style={{ background: 'linear-gradient(135deg, #FFB347 0%, #FF9E1A 60%, #e8890d 100%)' }}
                                                >
                                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
                                                        <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
                                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                                                    </svg>
                                                    {isRtl ? 'اشتري الآن' : 'Buy Now'}
                                                </a>
                                            )}
                                        </div>
                                    </div>
                                </div>
                            )}
                        </>
                    );
                }}
            </MainLayout>
        </>
    );
}

// ─── ProductCard ──────────────────────────────────────────────────────────────

interface ProductCardProps {
    product: Product;
    name: string;
    description: string | null | undefined;
    isRtl: boolean;
    onClick: () => void;
}

function ProductCard({ product, name, description, isRtl, onClick }: ProductCardProps) {
    const [imgFailed, setImgFailed] = useState(false);
    const showImage = product.image && !imgFailed;

    return (
        <button
            onClick={onClick}
            className="border border-gray-100 rounded-xl overflow-hidden group hover:border-[#FF9E1A] hover:shadow-md transition-all duration-200 flex flex-col h-full text-left w-full"
            style={{ transition: 'transform 0.18s, box-shadow 0.2s, border-color 0.18s' }}
            onMouseEnter={e => (e.currentTarget.style.transform = 'translateY(-4px)')}
            onMouseLeave={e => (e.currentTarget.style.transform = '')}
        >
            <div className="overflow-hidden w-full aspect-[4/3] bg-gray-50 relative">
                {showImage ? (
                    <img
                        src={product.image!}
                        alt={name}
                        className="w-full h-full object-cover block bg-gray-100"
                        style={{ transition: 'transform 0.35s ease' }}
                        onMouseEnter={e => (e.currentTarget.style.transform = 'scale(1.05)')}
                        onMouseLeave={e => (e.currentTarget.style.transform = '')}
                        onError={() => setImgFailed(true)}
                    />
                ) : (
                    <div className="w-full h-full flex items-center justify-center text-4xl"
                        style={{ background: 'rgba(255,158,26,0.06)' }}>📦</div>
                )}
                {product.images.length > 1 && (
                    <span className="absolute bottom-2 right-2 px-2 py-0.5 rounded-full text-[10px] font-semibold bg-black/40 text-white backdrop-blur-sm">
                        {product.images.length} 🖼
                    </span>
                )}
                {product.variants.length > 0 && (
                    <span className="absolute top-2 left-2 px-2 py-0.5 rounded-full text-[10px] font-bold"
                        style={{ background: 'rgba(255,158,26,0.9)', color: 'white' }}>
                        {product.variants.length} {isRtl ? 'خيار' : 'variants'}
                    </span>
                )}
            </div>
            <div className="p-4 flex flex-col flex-1">
                <div className="font-bold text-sm leading-snug mb-1">{name}</div>
                {description && (
                    <div className="text-xs text-gray-400 leading-relaxed line-clamp-2 mb-2 flex-1">{description}</div>
                )}
                <div className="mt-auto text-xs font-semibold text-gray-300 group-hover:text-[#FF9E1A] transition-colors">
                    {isRtl ? 'عرض التفاصيل →' : 'View details →'}
                </div>
            </div>
        </button>
    );
}