import { Link } from '@inertiajs/react';
import MainLayout from '@/layouts/Mainlayout';

// ─── i18n ─────────────────────────────────────────────────────────────────────

const aboutI18n = {
    en: {
        badge: '🛠️ Our Story',
        heading: 'About Conan Tools',
        sub: 'A young, passionate brand committed to putting professional-grade tools in the hands of every Egyptian craftsman.',

        story: {
            title: 'Who We Are',
            body: [
                'Conan Tools Egypt is a fresh, energetic brand built on a simple belief: every professional deserves reliable, high-quality tools at a fair price. Since we opened our doors in Dokki, Cairo, we have been on a mission to raise the bar for the local tools market — combining a wide product range with the kind of hands-on service that only a local team can deliver.',
                'We carry hundreds of product lines spanning power tools, hand tools, garden tools, and accessories — carefully selected to meet the demands of contractors, tradespeople, and serious DIY enthusiasts across Egypt.',
            ],
        },

        mission: {
            title: 'Our Mission',
            body: 'To be Egypt\'s most trusted tools partner — offering premium products, expert advice, and fast, reliable service to professionals and businesses of all sizes.',
        },

        values: [
            { icon: '🏆', t: 'Quality First', d: 'Every product in our catalogue passes rigorous quality checks before reaching your hands.' },
            { icon: '🤝', t: 'Customer Focus', d: 'We listen, advise, and support — before, during, and after every purchase.' },
            { icon: '⚡', t: 'Wide Range', d: 'From drills to garden shears, we stock hundreds of lines for every professional need.' },
            { icon: '📦', t: 'Reliable Stock', d: 'Smart inventory management means your orders are fulfilled accurately and on time.' },
            { icon: '📍', t: 'Locally Rooted', d: 'Based in Dokki, Cairo — we know the Egyptian market and deliver fast nationwide.' },
            { icon: '💡', t: 'Continuous Growth', d: 'We constantly expand our catalogue and refine our operations to serve you better.' },
        ],

        stats: [
            { v: '500+', l: 'Product Lines' },
            { v: '5+',   l: 'Years in Egypt' },
            { v: '24h',  l: 'Response Time' },
            { v: '100%', l: 'Quality Checked' },
        ],

        warehouse: {
            title: 'Smart Warehousing',
            body: 'At the heart of our operations is a modern warehouse management system. Real-time stock tracking, accurate order picking, and efficient dispatch mean that every order leaves our store correctly and on time — no guesswork, no delays.',
        },

        cta: {
            title: 'Ready to Work Together?',
            sub: 'Browse our full product range or get in touch with our team.',
            btn1: 'Browse Products',
            btn2: 'Contact Us',
        },
    },
    ar: {
        badge: '🛠️ قصتنا',
        heading: 'من نحن',
        sub: 'علامة تجارية شابة وطموحة، ملتزمة بتوفير أدوات احترافية في متناول كل حِرَفي مصري.',

        story: {
            title: 'من نحن',
            body: [
                'كونان تولز مصر علامة تجارية حيوية تأسست على قناعة بسيطة: كل محترف يستحق أدوات موثوقة وعالية الجودة بسعر عادل. منذ افتتاحنا في الدقي بالقاهرة، ونحن في مهمة لرفع مستوى سوق الأدوات المحلي — بجمع تشكيلة منتجات واسعة مع خدمة شخصية لا يستطيع تقديمها إلا فريق محلي متخصص.',
                'نحمل مئات خطوط المنتجات من أدوات كهربائية ويدوية وحدائق وملحقات — مختارة بعناية لتلبية متطلبات المقاولين والحِرَفيين وهواة الأعمال اليدوية في جميع أنحاء مصر.',
            ],
        },

        mission: {
            title: 'مهمتنا',
            body: 'أن نكون الشريك الأكثر موثوقية في مصر لتوفير الأدوات — بمنتجات متميزة ونصائح متخصصة وخدمة سريعة وموثوقة للمهنيين والشركات بجميع أحجامها.',
        },

        values: [
            { icon: '🏆', t: 'الجودة أولاً', d: 'كل منتج في كتالوجنا يمر بفحوصات جودة صارمة قبل وصوله إلى يديك.' },
            { icon: '🤝', t: 'التركيز على العميل', d: 'نستمع ونقدم المشورة والدعم — قبل وأثناء وبعد كل عملية شراء.' },
            { icon: '⚡', t: 'تشكيلة واسعة', d: 'من الحفارات إلى مقصات الحدائق، نخزّن مئات الخطوط لكل احتياج مهني.' },
            { icon: '📦', t: 'مخزون موثوق', d: 'إدارة ذكية للمخزون تعني تنفيذ طلباتك بدقة وفي الوقت المحدد.' },
            { icon: '📍', t: 'جذور محلية', d: 'مقرنا في الدقي، القاهرة — نعرف السوق المصري ونوصّل بسرعة في جميع أنحاء الجمهورية.' },
            { icon: '💡', t: 'نمو مستمر', d: 'نوسّع كتالوجنا ونطوّر عملياتنا باستمرار لخدمتك بشكل أفضل.' },
        ],

        stats: [
            { v: '+500', l: 'خط منتجات' },
            { v: '+5',   l: 'سنوات في مصر' },
            { v: '24س',  l: 'وقت الاستجابة' },
            { v: '100%', l: 'فحص جودة' },
        ],

        warehouse: {
            title: 'مستودعات ذكية',
            body: 'في قلب عملياتنا نظام حديث لإدارة المستودعات. تتبع المخزون في الوقت الفعلي، وانتقاء دقيق للطلبات، وإرسال فعّال — يعني أن كل طلب يغادر مستودعنا بشكل صحيح وفي وقته، بلا تخمين ولا تأخير.',
        },

        cta: {
            title: 'هل أنت مستعد للتعاون معنا؟',
            sub: 'تصفح مجموعة منتجاتنا الكاملة أو تواصل مع فريقنا.',
            btn1: 'استعرض المنتجات',
            btn2: 'تواصل معنا',
        },
    },
} as const;

// ─── Page ─────────────────────────────────────────────────────────────────────

export default function AboutPage() {
    return (
        <MainLayout>
            {({ lang, isRtl }) => {
                const c = aboutI18n[lang];

                return (
                    <>
                        {/* ── HERO ── */}
                        <section className="pt-12 pb-16 px-[5%] bg-gray-50 border-b border-gray-100">
                            <div className="max-w-2xl mx-auto text-center">
                                <span
                                    className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold border mb-6"
                                    style={{ background: 'rgba(255,158,26,0.1)', borderColor: 'rgba(255,158,26,0.3)', color: '#FF9E1A' }}
                                >
                                    {c.badge}
                                </span>
                                <h1 className="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-4">
                                    {c.heading}
                                </h1>
                                <p className="text-base md:text-lg text-gray-500 leading-relaxed">
                                    {c.sub}
                                </p>
                            </div>
                        </section>

                        {/* ── STATS BAR ── */}
                        <section className="py-12 px-[5%] border-b border-gray-100">
                            <div className="max-w-4xl mx-auto flex justify-center gap-8 md:gap-16 flex-wrap">
                                {c.stats.map((s, i) => (
                                    <div key={i} className="text-center">
                                        <div className="text-3xl font-extrabold" style={{ color: '#FF9E1A' }}>{s.v}</div>
                                        <div className="text-xs text-gray-400 mt-1 font-medium">{s.l}</div>
                                    </div>
                                ))}
                            </div>
                        </section>

                        {/* ── WHO WE ARE ── */}
                        <section className="py-20 px-[5%]">
                            <div className="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                                {/* Text */}
                                <div>
                                    <h2 className="text-2xl font-extrabold mb-6">{c.story.title}</h2>
                                    <div className="flex flex-col gap-4">
                                        {c.story.body.map((para, i) => (
                                            <p key={i} className="text-sm text-gray-500 leading-relaxed">{para}</p>
                                        ))}
                                    </div>
                                </div>

                                {/* Visual — logo centered in an orange-tinted card */}
                                <div
                                    className="rounded-2xl flex items-center justify-center p-12 border border-gray-100"
                                    style={{ background: 'rgba(255,158,26,0.06)' }}
                                >
                                    <img
                                        src="/storage/logo.png"
                                        alt="Conan Tools"
                                        className="w-48 h-auto object-contain opacity-90"
                                    />
                                </div>
                            </div>
                        </section>

                        {/* ── MISSION ── */}
                        <section className="py-14 px-[5%] border-t border-b border-gray-100"
                            style={{ background: 'rgba(255,158,26,0.04)' }}>
                            <div className="max-w-3xl mx-auto text-center">
                                <div
                                    className="w-12 h-12 rounded-xl flex items-center justify-center text-2xl mx-auto mb-5 border"
                                    style={{ background: 'rgba(255,158,26,0.12)', borderColor: 'rgba(255,158,26,0.3)' }}
                                >
                                    🎯
                                </div>
                                <h2 className="text-2xl font-extrabold mb-4">{c.mission.title}</h2>
                                <p className="text-base text-gray-500 leading-relaxed">{c.mission.body}</p>
                            </div>
                        </section>

                        {/* ── VALUES ── */}
                        <section className="py-20 px-[5%]">
                            <div className="max-w-6xl mx-auto">
                                <h2 className="text-2xl font-extrabold mb-1">
                                    {isRtl ? 'قيمنا' : 'Our Values'}
                                </h2>
                                <p className="text-sm text-gray-400 mb-10">
                                    {isRtl ? 'المبادئ التي تقود كل ما نفعله' : 'The principles that drive everything we do'}
                                </p>
                                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                    {c.values.map((v, i) => (
                                        <div
                                            key={i}
                                            className="flex gap-4 items-start p-6 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition-colors"
                                        >
                                            <div
                                                className="w-11 h-11 rounded-xl flex items-center justify-center text-xl shrink-0 border"
                                                style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                            >
                                                {v.icon}
                                            </div>
                                            <div>
                                                <div className="font-bold text-sm mb-1.5">{v.t}</div>
                                                <div className="text-sm text-gray-500 leading-relaxed">{v.d}</div>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </section>

                        {/* ── WAREHOUSE ── */}
                        <section className="py-20 px-[5%] bg-gray-50 border-t border-b border-gray-100">
                            <div className="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                                {/* Visual */}
                                <div
                                    className="rounded-2xl flex items-center justify-center p-12 border border-gray-100 bg-white order-last md:order-first"
                                >
                                    <div className="text-center">
                                        <div className="text-7xl mb-4">📦</div>
                                        <div className="flex gap-6 justify-center mt-4 flex-wrap">
                                            {['📊', '⚙️', '🚚'].map((icon, i) => (
                                                <div
                                                    key={i}
                                                    className="w-12 h-12 rounded-xl flex items-center justify-center text-2xl border"
                                                    style={{ background: 'rgba(255,158,26,0.10)', borderColor: 'rgba(255,158,26,0.25)' }}
                                                >
                                                    {icon}
                                                </div>
                                            ))}
                                        </div>
                                    </div>
                                </div>
                                {/* Text */}
                                <div>
                                    <h2 className="text-2xl font-extrabold mb-6">{c.warehouse.title}</h2>
                                    <p className="text-sm text-gray-500 leading-relaxed">{c.warehouse.body}</p>
                                </div>
                            </div>
                        </section>

                        {/* ── CTA ── */}
                        <section className="py-20 px-[5%]">
                            <div className="max-w-2xl mx-auto text-center">
                                <h2 className="text-2xl font-extrabold mb-3">{c.cta.title}</h2>
                                <p className="text-sm text-gray-400 mb-8">{c.cta.sub}</p>
                                <div className="flex gap-3 justify-center flex-wrap">
                                    <Link
                                        href="/products"
                                        className="px-7 py-3 rounded-md font-semibold text-white text-sm hover:opacity-85 transition-opacity inline-block"
                                        style={{ background: '#FF9E1A' }}
                                    >
                                        {c.cta.btn1}
                                    </Link>
                                    <Link
                                        href="/contact"
                                        className="px-7 py-3 rounded-md font-semibold text-sm border border-gray-200 text-gray-700 hover:border-[#FF9E1A] hover:text-[#FF9E1A] transition-colors inline-block"
                                    >
                                        {c.cta.btn2}
                                    </Link>
                                </div>
                            </div>
                        </section>
                    </>
                );
            }}
        </MainLayout>
    );
}