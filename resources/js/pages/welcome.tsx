import { useState, type FormEvent } from 'react';
import { usePage, router } from '@inertiajs/react';
import { motion } from 'framer-motion';
import MainLayout from '@/layouts/Mainlayout';
import Seo from '@/components/Seo';

// ─── Types ────────────────────────────────────────────────────────────────────

interface Group {
    id: number;
    name: string;
    ar_name: string | null;
    image: string | null;
    slug: string;
    product_count: number;
}

interface PageProps {
    groups: Group[];
    locale?: string;
    [key: string]: unknown;
}

const FALLBACK_ICONS = ['⚡', '🔧', '🌿', '🔩', '🛠️', '⚙️', '🪛', '🔨'];

// ─── Animation Variants ───────────────────────────────────────────────────────

const fadeUp = {
    hidden: { opacity: 0, y: 40 },
    show: {
        opacity: 1,
        y: 0,
        transition: { duration: 0.6, ease: 'easeOut' },
    },
};

const stagger = {
    show: {
        transition: { staggerChildren: 0.12 },
    },
};

const floating = {
    animate: {
        y: [0, -10, 0],
        transition: { duration: 4, repeat: Infinity, ease: 'easeInOut' },
    },
};

// ─── Page ─────────────────────────────────────────────────────────────────────

export default function HomePage() {
    const { props } = usePage<PageProps>();
    const groups: Group[] = props.groups ?? [];
    const locale = (props.locale as string) ?? 'en';

    return (
        <MainLayout>
            {({ lang, c, isRtl }) => {
                const groupName = (g: Group) =>
                    lang === 'ar' && g.ar_name ? g.ar_name : g.name;

                return (
                    <>
                        <Seo
                            title={
                                lang === 'ar'
                                    ? 'كونان تولز | أدوات احترافية ومعدات صناعية في مصر'
                                    : 'Conan Tools | Professional Construction Tools in Egypt'
                            }
                            description={
                                lang === 'ar'
                                    ? 'كونان تولز تقدم أدوات ومعدات احترافية عالية الجودة للمقاولين والفنيين في مصر. اكتشف مجموعتنا من الأدوات الصناعية وحلول العمل المتطورة.'
                                    : 'Conan Tools provides high-quality professional construction and industrial tools for contractors and technicians in Egypt. Explore our product categories and trusted solutions.'
                            }
                            keywords={
                                isRtl
                                    ? 'كونان تولز, الضمان, أدوات, مصر, أدوات كهربائية, أدوات يدوية'
                                    : 'Conan Tools, warranty, tools, Egypt, power tools, hand tools'
                            }
                            image="/logo.png"
                        />

                        {/* ── HERO ── */}
                        <motion.section
                            initial="hidden"
                            animate="show"
                            variants={stagger}
                            className="pt-12 pb-20 px-[5%] bg-gray-50 border-b border-gray-100 relative overflow-hidden"
                        >
                            {/* Floating decorative icons */}
                            <motion.div variants={floating} animate="animate" className="absolute left-12 top-10 text-4xl opacity-20 pointer-events-none">
                                🔧
                            </motion.div>
                            <motion.div
                                variants={floating}
                                animate="animate"
                                className="absolute right-20 top-16 text-4xl opacity-20 pointer-events-none"
                                style={{ animationDelay: '1.5s' }}
                            >
                                ⚙️
                            </motion.div>
                            <motion.div
                                variants={floating}
                                animate="animate"
                                className="absolute left-[40%] bottom-8 text-3xl opacity-10 pointer-events-none"
                                style={{ animationDelay: '0.8s' }}
                            >
                                🛠️
                            </motion.div>

                            <div className="max-w-2xl mx-auto text-center relative z-10">
                                <motion.span
                                    variants={fadeUp}
                                    className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold border mb-6"
                                    style={{ background: 'rgba(255,158,26,0.1)', borderColor: 'rgba(255,158,26,0.3)', color: '#FF9E1A' }}
                                >
                                    🇪🇬 Dokki, Cairo — Egypt
                                </motion.span>

                                <motion.h1
                                    variants={fadeUp}
                                    className="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-5"
                                >
                                    {c.hero.title}
                                </motion.h1>

                                <motion.p
                                    variants={fadeUp}
                                    className="text-base md:text-lg text-gray-500 leading-relaxed mb-9"
                                >
                                    {c.hero.sub}
                                </motion.p>

                                <motion.div variants={fadeUp} className="flex gap-3 justify-center flex-wrap">
                                    <motion.button
                                        whileHover={{ scale: 1.05 }}
                                        whileTap={{ scale: 0.95 }}
                                        onClick={() => router.get(`/${locale}/products`)}
                                        className="px-7 py-3 rounded-md font-semibold text-white text-sm"
                                        style={{ background: '#FF9E1A' }}
                                    >
                                        {c.hero.cta1}
                                    </motion.button>
                                    <motion.button
                                        whileHover={{ scale: 1.05 }}
                                        whileTap={{ scale: 0.95 }}
                                        onClick={() => router.get(`/${locale}/contact`)}
                                        className="px-7 py-3 rounded-md font-semibold text-sm border border-gray-200 text-gray-700 hover:border-[#FF9E1A] hover:text-[#FF9E1A] transition-colors"
                                    >
                                        {c.hero.cta2}
                                    </motion.button>
                                </motion.div>

                                {/* Stats */}
                                <motion.div
                                    variants={fadeUp}
                                    className="flex justify-center gap-12 mt-14 pt-10 border-t border-gray-200 flex-wrap"
                                >
                                    {c.stats.map((s, i) => (
                                        <motion.div
                                            key={i}
                                            className="text-center"
                                            whileHover={{ y: -4, scale: 1.05 }}
                                            transition={{ type: 'spring', stiffness: 300 }}
                                        >
                                            <div className="text-3xl font-extrabold font-inter" style={{ color: '#FF9E1A' }}>{s.v}</div>
                                            <div className="text-xs text-gray-400 mt-1 font-medium">{s.l}</div>
                                        </motion.div>
                                    ))}
                                </motion.div>
                            </div>
                        </motion.section>

                        {/* ── GROUPS ── */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%]"
                        >
                            <div className="max-w-6xl mx-auto">
                                <motion.h2 variants={fadeUp} className="text-2xl font-extrabold mb-1">{c.groups.title}</motion.h2>
                                <motion.p variants={fadeUp} className="text-sm text-gray-400 mb-10">{c.groups.sub}</motion.p>

                                {groups.length === 0 ? (
                                    <motion.div variants={fadeUp} className="text-center py-20 text-gray-300">
                                        <div className="text-5xl mb-4">📦</div>
                                        <div className="text-base">{c.groups.empty}</div>
                                    </motion.div>
                                ) : (
                                    <div className="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                        {groups.map((group, i) => (
                                            <motion.div
                                                key={group.id}
                                                variants={fadeUp}
                                                transition={{ delay: i * 0.07 }}
                                            >
                                                <GroupCard
                                                    group={group}
                                                    name={groupName(group)}
                                                    viewLabel={c.groups.view}
                                                    productsLabel={c.groups.products}
                                                    fallbackIcon={FALLBACK_ICONS[i % FALLBACK_ICONS.length]}
                                                    locale={locale}
                                                />
                                            </motion.div>
                                        ))}
                                    </div>
                                )}
                            </div>
                        </motion.section>

                        {/* ── WHY US ── */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%] bg-gray-50 border-t border-b border-gray-100"
                        >
                            <div className="max-w-6xl mx-auto">
                                <motion.h2 variants={fadeUp} className="text-2xl font-extrabold mb-1">
                                    {isRtl ? 'لماذا كونان تولز؟' : 'Why Conan Tools?'}
                                </motion.h2>
                                <motion.p variants={fadeUp} className="text-sm text-gray-400 mb-10">
                                    {isRtl ? 'مبنية على الجودة، مسلّمة بسرعة' : 'Built on quality, delivered with speed'}
                                </motion.p>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    {c.why.map((w, i) => (
                                        <motion.div
                                            key={i}
                                            variants={fadeUp}
                                            whileHover={{ y: -4, scale: 1.02 }}
                                            className="flex gap-4 items-start p-6 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition-colors relative group"
                                        >
                                            {/* Glow */}
                                            <div className="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition bg-[#FF9E1A]/10 blur-xl pointer-events-none" />

                                            <div
                                                className="relative w-11 h-11 rounded-xl flex items-center justify-center text-xl shrink-0 border"
                                                style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                            >
                                                {w.icon}
                                            </div>
                                            <div className="relative">
                                                <div className="font-bold text-sm mb-1.5">{w.t}</div>
                                                <div className="text-sm text-gray-500 leading-relaxed">{w.d}</div>
                                            </div>
                                        </motion.div>
                                    ))}
                                </div>
                            </div>
                        </motion.section>

                        {/* ── CONTACT ── */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%]"
                        >
                            <div className="max-w-6xl mx-auto">
                                <motion.h2 variants={fadeUp} className="text-2xl font-extrabold mb-1">{c.contact.title}</motion.h2>
                                <motion.p variants={fadeUp} className="text-sm text-gray-400 mb-12">{c.contact.sub}</motion.p>

                                <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                                    {/* Info */}
                                    <motion.div variants={fadeUp} className="flex flex-col gap-4">
                                        {[
                                            { icon: '📞', label: c.contact.phone, val: c.contact.phoneVal, href: 'tel:+201067718255' },
                                            { icon: '✉️', label: c.contact.email, val: c.contact.emailVal, href: `mailto:${c.contact.emailVal}` },
                                            { icon: '📍', label: c.contact.address, val: c.contact.addressVal, href: null },
                                        ].map((item, i) => (
                                            <motion.div
                                                key={i}
                                                whileHover={{ y: -4, scale: 1.02 }}
                                                className="flex gap-4 items-start p-4 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition relative group"
                                            >
                                                {/* Glow */}
                                                <div className="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition bg-[#FF9E1A]/10 blur-xl pointer-events-none" />

                                                <div
                                                    className="relative w-10 h-10 rounded-xl flex items-center justify-center text-base shrink-0 border"
                                                    style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                                >
                                                    {item.icon}
                                                </div>
                                                <div className="relative">
                                                    <div className="text-[10px] font-bold uppercase tracking-wider mb-1" style={{ color: '#FF9E1A' }}>
                                                        {item.label}
                                                    </div>
                                                    {item.href ? (
                                                        <a href={item.href} className="text-sm text-gray-600 hover:text-[#FF9E1A] transition-colors">
                                                            {item.val}
                                                        </a>
                                                    ) : (
                                                        <div className="text-sm text-gray-600 leading-relaxed">{item.val}</div>
                                                    )}
                                                </div>
                                            </motion.div>
                                        ))}
                                    </motion.div>

                                    {/* Form */}
                                    <motion.div
                                        variants={fadeUp}
                                        className="bg-gray-50 border border-gray-100 rounded-xl p-7"
                                    >
                                        <ContactForm isRtl={isRtl} c={c.contact} />
                                    </motion.div>
                                </div>
                            </div>
                        </motion.section>
                    </>
                );
            }}
        </MainLayout>
    );
}

// ─── ContactForm ──────────────────────────────────────────────────────────────

interface ContactSectionStrings {
    namePh: string;
    emailPh: string;
    msgPh: string;
    btn: string;
    [key: string]: unknown;
}

interface ContactFormProps {
    isRtl: boolean;
    c: ContactSectionStrings;
}

function ContactForm({ isRtl, c }: ContactFormProps) {
    const [fields, setFields] = useState({
        name: '',
        email: '',
        phone: '',
        subject: '',
        message: '',
    });
    const [status, setStatus] = useState<'idle' | 'sending' | 'done'>('idle');

    const set = (k: keyof typeof fields) =>
        (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) =>
            setFields(p => ({ ...p, [k]: e.target.value }));

    const handleSubmit = (e: FormEvent) => {
        e.preventDefault();
        setStatus('sending');
        router.post('/inquiries', fields, {
            onSuccess: () => {
                setStatus('done');
                setFields({ name: '', email: '', phone: '', subject: '', message: '' });
            },
            onError: () => setStatus('idle'),
        });
    };

    const inputClass =
        'w-full border border-gray-200 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#FF9E1A] transition-colors bg-white mb-3';

    if (status === 'done') {
        return (
            <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                className="flex flex-col items-center justify-center py-16 text-center gap-4"
            >
                <div className="text-5xl">✅</div>
                <p className="text-sm text-gray-600">
                    {isRtl
                        ? 'تم إرسال رسالتك! سنتواصل معك قريباً.'
                        : "Message sent! We'll get back to you shortly."}
                </p>
            </motion.div>
        );
    }

    return (
        <form onSubmit={handleSubmit} noValidate>
            <input required type="text" placeholder={c.namePh} value={fields.name} onChange={set('name')} className={inputClass} />
            <input type="email" placeholder={c.emailPh} value={fields.email} onChange={set('email')} className={inputClass} />
            <input required type="tel" placeholder={isRtl ? 'رقم الهاتف / واتساب' : 'Phone / WhatsApp'} value={fields.phone} onChange={set('phone')} className={inputClass} />
            <input required type="text" placeholder={isRtl ? 'الموضوع' : 'Subject'} value={fields.subject} onChange={set('subject')} className={inputClass} />
            <textarea required rows={4} placeholder={c.msgPh} value={fields.message} onChange={set('message')} className={`${inputClass} resize-none mb-5`} />
            <motion.button
                whileHover={{ scale: 1.05 }}
                whileTap={{ scale: 0.95 }}
                type="submit"
                disabled={status === 'sending'}
                className="w-full py-3 rounded-lg font-semibold text-sm text-white disabled:opacity-60"
                style={{ background: '#FF9E1A' }}
            >
                {status === 'sending' ? (isRtl ? 'جارٍ الإرسال…' : 'Sending…') : c.btn}
            </motion.button>
        </form>
    );
}

// ─── GroupCard ────────────────────────────────────────────────────────────────

interface GroupCardProps {
    group: Group;
    name: string;
    viewLabel: string;
    productsLabel: string;
    fallbackIcon: string;
    locale: string;
}

function GroupCard({ group, name, viewLabel, productsLabel, fallbackIcon, locale }: GroupCardProps) {
    const [imgFailed, setImgFailed] = useState(false);
    const showImage = group.image && !imgFailed;

    return (
        <motion.div
            whileHover={{ y: -4, boxShadow: '0 8px 24px rgba(255,158,26,0.15)' }}
            onClick={() => router.get(`/${locale}/products/${group.slug}`)}
            className="border border-gray-100 rounded-xl overflow-hidden cursor-pointer group hover:border-[#FF9E1A] transition-all duration-200 bg-white flex flex-col"
        >
            {/* Image area — white bg, contain so product images show fully */}
            <div className="w-full aspect-[4/3] bg-white flex items-center justify-center overflow-hidden relative">
                {showImage ? (
                    <motion.img
                        whileHover={{ scale: 1.06 }}
                        transition={{ duration: 0.35, ease: 'easeOut' }}
                        src={group.image!}
                        alt={name}
                        className="w-full h-full object-contain p-3"
                        onError={() => setImgFailed(true)}
                    />
                ) : (
                    <span className="text-4xl select-none">{fallbackIcon}</span>
                )}
            </div>

            {/* Card body */}
            <div className="p-4 bg-white flex flex-col flex-1 border-t border-gray-100">
                <div className="font-bold text-sm mb-1 leading-snug text-gray-900">{name}</div>
                {group.product_count > 0 && (
                    <div className="text-xs text-gray-400 mb-3">
                        {group.product_count} {productsLabel}
                    </div>
                )}
                <div className="mt-auto text-xs font-semibold text-gray-400 group-hover:text-[#FF9E1A] transition-colors">
                    {viewLabel}
                </div>
            </div>
        </motion.div>
    );
}