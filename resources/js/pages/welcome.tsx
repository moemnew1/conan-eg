import { useState } from 'react';
import { usePage } from '@inertiajs/react';
import MainLayout from '@/layouts/Mainlayout';

// ─── Types ────────────────────────────────────────────────────────────────────

interface Group {
    id: number;
    name: string;
    ar_name: string | null;
    image: string | null;
    product_count: number;
}

interface PageProps {
    groups: Group[];
    [key: string]: unknown;
}

const FALLBACK_ICONS = ['⚡', '🔧', '🌿', '🔩', '🛠️', '⚙️', '🪛', '🔨'];

// ─── Page ─────────────────────────────────────────────────────────────────────

export default function HomePage() {
    const { props } = usePage<PageProps>();
    const groups: Group[] = props.groups ?? [];

    return (
        <MainLayout>
            {({ lang, c, isRtl }) => {
                const groupName = (g: Group) =>
                    lang === 'ar' && g.ar_name ? g.ar_name : g.name;

                return (
                    <>
                        {/* ── HERO ── */}
                        <section className="pt-12 pb-20 px-[5%] bg-gray-50 border-b border-gray-100">
                            <div className="max-w-2xl mx-auto text-center">
                                <span
                                    className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold border mb-6"
                                    style={{ background: 'rgba(255,158,26,0.1)', borderColor: 'rgba(255,158,26,0.3)', color: '#FF9E1A' }}
                                >
                                    🇪🇬 Dokki, Cairo — Egypt
                                </span>

                                <h1 className="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-5">
                                    {c.hero.title}
                                </h1>
                                <p className="text-base md:text-lg text-gray-500 leading-relaxed mb-9">
                                    {c.hero.sub}
                                </p>

                                <div className="flex gap-3 justify-center flex-wrap">
                                    <button
                                        className="px-7 py-3 rounded-md font-semibold text-white text-sm hover:opacity-85 transition-opacity"
                                        style={{ background: '#FF9E1A' }}
                                    >
                                        {c.hero.cta1}
                                    </button>
                                    <button className="px-7 py-3 rounded-md font-semibold text-sm border border-gray-200 text-gray-700 hover:border-[#FF9E1A] hover:text-[#FF9E1A] transition-colors">
                                        {c.hero.cta2}
                                    </button>
                                </div>

                                {/* Stats */}
                                <div className="flex justify-center gap-12 mt-14 pt-10 border-t border-gray-200 flex-wrap">
                                    {c.stats.map((s, i) => (
                                        <div key={i} className="text-center">
                                            <div className="text-3xl font-extrabold font-inter" style={{ color: '#FF9E1A' }}>{s.v}</div>
                                            <div className="text-xs text-gray-400 mt-1 font-medium">{s.l}</div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </section>

                        {/* ── GROUPS ── */}
                        <section className="py-20 px-[5%]">
                            <div className="max-w-6xl mx-auto">
                                <h2 className="text-2xl font-extrabold mb-1">{c.groups.title}</h2>
                                <p className="text-sm text-gray-400 mb-10">{c.groups.sub}</p>

                                {groups.length === 0 ? (
                                    <div className="text-center py-20 text-gray-300">
                                        <div className="text-5xl mb-4">📦</div>
                                        <div className="text-base">{c.groups.empty}</div>
                                    </div>
                                ) : (
                                    <div className="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                        {groups.map((group, i) => (
                                            <GroupCard
                                                key={group.id}
                                                group={group}
                                                name={groupName(group)}
                                                viewLabel={c.groups.view}
                                                productsLabel={c.groups.products}
                                                fallbackIcon={FALLBACK_ICONS[i % FALLBACK_ICONS.length]}
                                            />
                                        ))}
                                    </div>
                                )}
                            </div>
                        </section>

                        {/* ── WHY US ── */}
                        <section className="py-20 px-[5%] bg-gray-50 border-t border-b border-gray-100">
                            <div className="max-w-6xl mx-auto">
                                <h2 className="text-2xl font-extrabold mb-1">
                                    {isRtl ? 'لماذا كونان تولز؟' : 'Why Conan Tools?'}
                                </h2>
                                <p className="text-sm text-gray-400 mb-10">
                                    {isRtl ? 'مبنية على الجودة، مسلّمة بسرعة' : 'Built on quality, delivered with speed'}
                                </p>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    {c.why.map((w, i) => (
                                        <div key={i} className="flex gap-4 items-start p-6 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition-colors">
                                            <div
                                                className="w-11 h-11 rounded-xl flex items-center justify-center text-xl shrink-0 border"
                                                style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                            >
                                                {w.icon}
                                            </div>
                                            <div>
                                                <div className="font-bold text-sm mb-1.5">{w.t}</div>
                                                <div className="text-sm text-gray-500 leading-relaxed">{w.d}</div>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </section>

                        {/* ── CONTACT ── */}
                        <section className="py-20 px-[5%]">
                            <div className="max-w-6xl mx-auto">
                                <h2 className="text-2xl font-extrabold mb-1">{c.contact.title}</h2>
                                <p className="text-sm text-gray-400 mb-12">{c.contact.sub}</p>

                                <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                                    {/* Info */}
                                    <div className="flex flex-col gap-6">
                                        {[
                                            { icon: '📞', label: c.contact.phone, val: c.contact.phoneVal },
                                            { icon: '✉️', label: c.contact.email, val: c.contact.emailVal },
                                            { icon: '📍', label: c.contact.address, val: c.contact.addressVal },
                                        ].map((item, i) => (
                                            <div key={i} className="flex gap-4 items-start">
                                                <div
                                                    className="w-10 h-10 rounded-xl flex items-center justify-center text-base shrink-0 border"
                                                    style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                                >
                                                    {item.icon}
                                                </div>
                                                <div>
                                                    <div className="text-[10px] font-bold uppercase tracking-wider mb-1" style={{ color: '#FF9E1A' }}>
                                                        {item.label}
                                                    </div>
                                                    <div className="text-sm text-gray-600 leading-relaxed">{item.val}</div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>

                                    {/* Form */}
                                    <div className="bg-gray-50 border border-gray-100 rounded-xl p-7">
                                        <input
                                            type="text"
                                            placeholder={c.contact.namePh}
                                            className="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm mb-3 outline-none focus:border-[#FF9E1A] transition-colors bg-white"
                                        />
                                        <input
                                            type="email"
                                            placeholder={c.contact.emailPh}
                                            className="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm mb-3 outline-none focus:border-[#FF9E1A] transition-colors bg-white"
                                        />
                                        <textarea
                                            rows={4}
                                            placeholder={c.contact.msgPh}
                                            className="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm mb-4 outline-none focus:border-[#FF9E1A] transition-colors resize-none bg-white"
                                        />
                                        <button
                                            className="w-full py-3 rounded-lg font-semibold text-sm text-white hover:opacity-85 transition-opacity"
                                            style={{ background: '#FF9E1A' }}
                                        >
                                            {c.contact.btn}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </>
                );
            }}
        </MainLayout>
    );
}

// ─── GroupCard ────────────────────────────────────────────────────────────────

interface GroupCardProps {
    group: Group;
    name: string;
    viewLabel: string;
    productsLabel: string;
    fallbackIcon: string;
}

function GroupCard({ group, name, viewLabel, productsLabel, fallbackIcon }: GroupCardProps) {
    const [imgFailed, setImgFailed] = useState(false);
    const showImage = group.image && !imgFailed;

    return (
        <div className="border border-gray-100 rounded-xl overflow-hidden cursor-pointer group hover:border-[#FF9E1A] hover:shadow-md transition-all duration-200">
            {showImage ? (
                <img
                    src={group.image!}
                    alt={name}
                    className="w-full aspect-[4/3] object-cover block bg-gray-100"
                    onError={() => setImgFailed(true)}
                />
            ) : (
                <div
                    className="w-full aspect-[4/3] flex items-center justify-center text-4xl"
                    style={{ background: 'rgba(255,158,26,0.08)' }}
                >
                    {fallbackIcon}
                </div>
            )}
            <div className="p-4">
                <div className="font-bold text-sm mb-1 leading-snug">{name}</div>
                {group.product_count > 0 && (
                    <div className="text-xs text-gray-400 mb-3">
                        {group.product_count} {productsLabel}
                    </div>
                )}
                <div className="text-xs font-semibold text-gray-400 group-hover:text-[#FF9E1A] transition-colors">
                    {viewLabel}
                </div>
            </div>
        </div>
    );
}