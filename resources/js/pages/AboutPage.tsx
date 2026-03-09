import { Link } from '@inertiajs/react';
import MainLayout from '@/layouts/Mainlayout';
import { motion } from 'framer-motion';

// ─── Animations ─────────────────────────────────────────────

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
        transition: {
            duration: 4,
            repeat: Infinity,
            ease: 'easeInOut',
        },
    },
};

// ─── i18n (unchanged) ──────────────────────────────────────

const aboutI18n = {
    en: {
        badge: '🛠️ Our Story',
        heading: 'About Conan Tools',
        sub: 'A young, passionate brand committed to putting professional-grade tools in the hands of every Egyptian craftsman.',
        story: {
            title: 'Who We Are',
            body: [
                'Conan Tools Egypt is a fresh, energetic brand built on a simple belief: every professional deserves reliable, high-quality tools at a fair price.',
                'We carry hundreds of product lines spanning power tools, hand tools, garden tools, and accessories.',
            ],
        },
        mission: {
            title: 'Our Mission',
            body: "To be Egypt's most trusted tools partner.",
        },
        values: [
            { icon: '🏆', t: 'Quality First', d: 'Every product passes rigorous quality checks.' },
            { icon: '🤝', t: 'Customer Focus', d: 'We listen and support every customer.' },
            { icon: '⚡', t: 'Wide Range', d: 'Hundreds of professional tool lines.' },
            { icon: '📦', t: 'Reliable Stock', d: 'Smart inventory ensures accuracy.' },
            { icon: '📍', t: 'Locally Rooted', d: 'Based in Cairo with nationwide delivery.' },
            { icon: '💡', t: 'Continuous Growth', d: 'Constantly improving and expanding.' },
        ],
        stats: [
            { v: '500+', l: 'Product Lines' },
            { v: '5+', l: 'Years in Egypt' },
            { v: '24h', l: 'Response Time' },
            { v: '100%', l: 'Quality Checked' },
        ],
        warehouse: {
            title: 'Smart Warehousing',
            body: 'Real-time stock tracking, accurate order picking, and efficient dispatch.',
        },
        cta: {
            title: 'Ready to Work Together?',
            sub: 'Browse our full product range or contact us.',
            btn1: 'Browse Products',
            btn2: 'Contact Us',
        },
    },
    ar: {
        badge: '🛠️ قصتنا',
        heading: 'من نحن',
        sub: 'علامة تجارية شابة وطموحة تقدم أدوات احترافية.',
        story: {
            title: 'من نحن',
            body: [
                'كونان تولز مصر علامة تجارية حيوية تأسست لتقديم أدوات موثوقة.',
                'نقدم مئات المنتجات من الأدوات الكهربائية واليدوية.',
            ],
        },
        mission: {
            title: 'مهمتنا',
            body: 'أن نكون الشريك الأكثر موثوقية للأدوات في مصر.',
        },
        values: [
            { icon: '🏆', t: 'الجودة أولاً', d: 'كل منتج يمر بفحص جودة.' },
            { icon: '🤝', t: 'العميل أولاً', d: 'نقدم الدعم الكامل.' },
            { icon: '⚡', t: 'تشكيلة واسعة', d: 'مئات خطوط الأدوات.' },
            { icon: '📦', t: 'مخزون موثوق', d: 'إدارة ذكية للمخزون.' },
            { icon: '📍', t: 'جذور محلية', d: 'مقرنا في القاهرة.' },
            { icon: '💡', t: 'نمو مستمر', d: 'نطور خدماتنا باستمرار.' },
        ],
        stats: [
            { v: '+500', l: 'خط منتجات' },
            { v: '+5', l: 'سنوات' },
            { v: '24س', l: 'الرد' },
            { v: '100%', l: 'فحص جودة' },
        ],
        warehouse: {
            title: 'مستودعات ذكية',
            body: 'نظام إدارة مستودعات حديث لتتبع المخزون.',
        },
        cta: {
            title: 'هل أنت مستعد؟',
            sub: 'تصفح منتجاتنا أو تواصل معنا.',
            btn1: 'المنتجات',
            btn2: 'اتصل بنا',
        },
    },
} as const;

// ─── Page ───────────────────────────────────────────────────

export default function AboutPage() {
    return (
        <MainLayout>
            {({ lang, isRtl }) => {
                const c = aboutI18n[lang];

                return (
                    <>
                        {/* HERO */}
                        <motion.section
                            initial="hidden"
                            animate="show"
                            variants={stagger}
                            className="pt-16 pb-20 px-[5%] bg-gray-50 border-b relative overflow-hidden"
                        >
                            {/* Floating Icons */}
                            <motion.div
                                variants={floating}
                                animate="animate"
                                className="absolute left-10 top-10 text-4xl opacity-20"
                            >
                                🔧
                            </motion.div>

                            <motion.div
                                variants={floating}
                                animate="animate"
                                className="absolute right-16 top-24 text-4xl opacity-20"
                            >
                                🪚
                            </motion.div>

                            <motion.div
                                variants={floating}
                                animate="animate"
                                className="absolute bottom-10 left-1/3 text-4xl opacity-20"
                            >
                                ⚙️
                            </motion.div>

                            <div className="max-w-2xl mx-auto text-center relative z-10">
                                <motion.span
                                    variants={fadeUp}
                                    className="inline-flex px-3 py-1 rounded-full text-xs font-semibold border mb-6"
                                    style={{
                                        background: 'rgba(255,158,26,0.1)',
                                        borderColor: 'rgba(255,158,26,0.3)',
                                        color: '#FF9E1A',
                                    }}
                                >
                                    {c.badge}
                                </motion.span>

                                <motion.h1
                                    variants={fadeUp}
                                    className="text-4xl md:text-5xl font-extrabold mb-4"
                                >
                                    {c.heading}
                                </motion.h1>

                                <motion.p
                                    variants={fadeUp}
                                    className="text-lg text-gray-500"
                                >
                                    {c.sub}
                                </motion.p>
                            </div>
                        </motion.section>

                        {/* STATS */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-12 px-[5%]"
                        >
                            <div className="max-w-4xl mx-auto flex justify-center gap-12 flex-wrap">
                                {c.stats.map((s, i) => (
                                    <motion.div
                                        key={i}
                                        variants={fadeUp}
                                        whileHover={{ scale: 1.1 }}
                                        className="text-center"
                                    >
                                        <div
                                            className="text-3xl font-extrabold"
                                            style={{ color: '#FF9E1A' }}
                                        >
                                            {s.v}
                                        </div>
                                        <div className="text-xs text-gray-400 mt-1">
                                            {s.l}
                                        </div>
                                    </motion.div>
                                ))}
                            </div>
                        </motion.section>

                        {/* VALUES */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%]"
                        >
                            <div className="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                {c.values.map((v, i) => (
                                    <motion.div
                                        key={i}
                                        variants={fadeUp}
                                        whileHover={{ y: -6, scale: 1.02 }}
                                        className="p-6 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition relative group"
                                    >
                                        <div className="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition bg-[#FF9E1A]/10 blur-xl"></div>

                                        <div className="relative flex gap-4">
                                            <div className="text-2xl">{v.icon}</div>
                                            <div>
                                                <div className="font-bold mb-1">{v.t}</div>
                                                <div className="text-sm text-gray-500">
                                                    {v.d}
                                                </div>
                                            </div>
                                        </div>
                                    </motion.div>
                                ))}
                            </div>
                        </motion.section>

                        {/* WAREHOUSE */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%] bg-gray-50"
                        >
                            <div className="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
                                <motion.div
                                    variants={fadeUp}
                                    className="text-center"
                                >
                                    <motion.div
                                        animate={{ rotate: 360 }}
                                        transition={{
                                            repeat: Infinity,
                                            duration: 20,
                                            ease: 'linear',
                                        }}
                                        className="text-7xl mb-6"
                                    >
                                        📦
                                    </motion.div>

                                    <div className="flex gap-6 justify-center">
                                        {['📊', '⚙️', '🚚'].map((icon, i) => (
                                            <motion.div
                                                key={i}
                                                animate={{
                                                    y: [0, -8, 0],
                                                }}
                                                transition={{
                                                    duration: 3,
                                                    repeat: Infinity,
                                                }}
                                                className="text-3xl"
                                            >
                                                {icon}
                                            </motion.div>
                                        ))}
                                    </div>
                                </motion.div>

                                <motion.div variants={fadeUp}>
                                    <h2 className="text-2xl font-extrabold mb-4">
                                        {c.warehouse.title}
                                    </h2>
                                    <p className="text-gray-500">
                                        {c.warehouse.body}
                                    </p>
                                </motion.div>
                            </div>
                        </motion.section>

                        {/* CTA */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={fadeUp}
                            className="py-20 px-[5%] text-center"
                        >
                            <h2 className="text-2xl font-extrabold mb-3">
                                {c.cta.title}
                            </h2>
                            <p className="text-gray-400 mb-8">{c.cta.sub}</p>

                            <div className="flex gap-3 justify-center">
                                <motion.div
                                    whileHover={{ scale: 1.05 }}
                                    whileTap={{ scale: 0.95 }}
                                >
                                    <Link
                                        href="/products"
                                        className="px-7 py-3 rounded-md font-semibold text-white"
                                        style={{ background: '#FF9E1A' }}
                                    >
                                        {c.cta.btn1}
                                    </Link>
                                </motion.div>

                                <motion.div
                                    whileHover={{ scale: 1.05 }}
                                    whileTap={{ scale: 0.95 }}
                                >
                                    <Link
                                        href="/contact"
                                        className="px-7 py-3 rounded-md border border-gray-200 hover:border-[#FF9E1A]"
                                    >
                                        {c.cta.btn2}
                                    </Link>
                                </motion.div>
                            </div>
                        </motion.section>
                    </>
                );
            }}
        </MainLayout>
    );
}