import { useState } from 'react';
import { usePage, router } from '@inertiajs/react';
import { motion, AnimatePresence } from 'framer-motion';
import MainLayout from '@/layouts/Mainlayout';
import { FaShieldAlt, FaTools, FaCheckCircle, FaUserCheck, FaFileAlt, FaChevronDown } from 'react-icons/fa';
import Seo from '@/components/Seo';

const fadeUp = {
    hidden: { opacity: 0, y: 30 },
    show: { opacity: 1, y: 0, transition: { duration: 0.6, ease: 'easeOut' } },
};

const stagger = {
    show: { transition: { staggerChildren: 0.1 } },
};

export default function WarrantyPage() {
    const { props } = usePage<{ locale?: string }>();
    const locale = props.locale ?? 'en';
    const isRtl = locale === 'ar';
    const [activeAccordion, setActiveAccordion] = useState<number | null>(null);

    const content = {
        title: isRtl ? 'حماية مشترياتك' : 'Protecting Your Investment',
        subtitle: isRtl ? 'مركز الضمان والصيانة' : 'Warranty & Service Center',
        desc: isRtl 
            ? 'نحن نقف خلف جودة كل أداة نصنعها. التزامنا هو ضمان استمرار عملك دون انقطاع.' 
            : 'We stand behind the quality of every tool we manufacture. Our commitment is to ensure your work continues without interruption.',
        claimTitle: isRtl ? 'كيفية تقديم طلب ضمان' : 'How to Make a Claim',
        termsTitle: isRtl ? 'الأسئلة الشائعة والشروط' : 'FAQ & Terms'
    };

    const steps = [
        { icon: <FaFileAlt />, title: isRtl ? 'جهز الفاتورة' : 'Prepare Invoice', desc: isRtl ? 'احتفظ بفاتورة الشراء الأصلية.' : 'Keep your original purchase receipt ready.' },
        { icon: <FaTools />, title: isRtl ? 'فحص الأداة' : 'Tool Inspection', desc: isRtl ? 'قم بزيارة أقرب مركز خدمة معتمد.' : 'Visit your nearest authorized service center.' },
        { icon: <FaUserCheck />, title: isRtl ? 'التحقق' : 'Verification', desc: isRtl ? 'سيقوم خبراؤنا بتقييم حالة العيب.' : 'Our experts will evaluate the defect status.' },
        { icon: <FaCheckCircle />, title: isRtl ? 'الإصلاح' : 'Quick Repair', desc: isRtl ? 'يتم الإصلاح باستخدام قطع غيار أصلية.' : 'Repairs are done using genuine spare parts.' },
    ];

    const faqs = [
        { 
            q: isRtl ? 'ماذا يغطي الضمان؟' : 'What does the warranty cover?', 
            a: isRtl ? 'يغطي جميع عيوب التصنيع في الأجزاء الكهربائية والميكانيكية لمدة 6 أشهر.' : 'Covers all manufacturing defects in electrical and mechanical parts for 6 months.' 
        },
        { 
            q: isRtl ? 'ما الذي لا يغطيه الضمان؟' : 'What is not covered?', 
            a: isRtl ? 'لا يغطي سوء الاستخدام، التحميل الزائد، أو تآكل الفرش الكربونية والملحقات.' : 'Does not cover misuse, overloading, or wear and tear of carbon brushes and accessories.' 
        }
    ];

    return (
        <MainLayout>
            
            {({ lang }) => (
                
                <motion.div initial="hidden" animate="show" variants={stagger} className="bg-white">
                    <Seo
    title={
        isRtl
            ? 'ضمان كونان تولز | مركز الصيانة والدعم الفني'
            : 'Conan Tools Warranty | Service & Repair Center'
    }
    description={
        isRtl
            ? 'تعرف على سياسة الضمان في كونان تولز وكيفية تقديم طلب صيانة أو إصلاح للأدوات. مركز خدمة معتمد لضمان جودة منتجاتنا.'
            : 'Learn about Conan Tools warranty policy and how to submit a repair or service claim. Authorized service center ensuring product quality and support.'
    }
                                        keywords={isRtl
        ? 'كونان تولز, الضمان, أدوات, مصر, أدوات كهربائية, أدوات يدوية'
        : 'Conan Tools, warranty, tools, Egypt, power tools, hand tools'}
    image="/logo.png"
/>
                    {/* ── NEW PREMIUM HERO ── */}
                    <section className="relative pt-32 pb-24 px-[5%] bg-slate-900 text-white overflow-hidden">
                        <div className="absolute top-0 right-0 w-1/2 h-full bg-[#FF9E1A]/5 skew-x-12 transform translate-x-20" />
                        
                        <div className="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center relative z-10">
                            <motion.div variants={fadeUp}>
                                <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FF9E1A]/20 text-[#FF9E1A] text-sm font-bold mb-6">
                                    <FaShieldAlt /> {isRtl ? 'ضمان معتمد' : 'Authorized Warranty'}
                                </div>
                                <h1 className="text-4xl md:text-6xl font-black mb-6 leading-tight">
                                    {content.title}
                                </h1>
                                <p className="text-xl text-slate-300 mb-8 max-w-lg">
                                    {content.desc}
                                </p>
                                <div className="flex flex-wrap gap-4">
<button
    type="button" // important to prevent form submission
    onClick={() => router.get(`/${locale}/contact`)}
    className="px-8 py-4 bg-[#FF9E1A] text-slate-900 rounded-xl font-bold hover:shadow-[0_0_20px_rgba(255,158,26,0.4)] transition-all"
>
    {isRtl ? 'ابدأ طلبك الآن' : 'Start Your Claim'}
</button>
                                </div>
                            </motion.div>
                            
                            <motion.div variants={fadeUp} className="hidden md:block relative">
                                <div className="relative z-10 bg-slate-800 p-8 rounded-3xl border border-slate-700 shadow-2xl">
                                    <div className="flex items-center justify-between mb-8">
                                        <div className="h-12 w-12 rounded-full bg-[#FF9E1A] flex items-center justify-center text-2xl text-slate-900 font-bold">6</div>
                                        <div className="text-right">
                                            <div className="text-sm text-slate-400">{isRtl ? 'مدة الضمان' : 'Warranty Period'}</div>
                                            <div className="font-bold text-xl">{isRtl ? 'أشهر' : 'Months'}</div>
                                        </div>
                                    </div>
                                    <div className="space-y-4">
                                        {[1, 2, 3].map(i => (
                                            <div key={i} className="h-2 bg-slate-700 rounded-full overflow-hidden">
                                                <motion.div 
                                                    initial={{ width: 0 }} 
                                                    animate={{ width: `${100 - (i * 20)}%` }} 
                                                    transition={{ duration: 1, delay: 0.5 }}
                                                    className="h-full bg-[#FF9E1A]" 
                                                />
                                            </div>
                                        ))}
                                    </div>
                                    <p className="mt-6 text-xs text-slate-400 italic">
                                        {isRtl ? '* ينطبق على جميع الأدوات الكهربائية' : '* Applicable on all power tools'}
                                    </p>
                                </div>
                                <div className="absolute -bottom-6 -left-6 w-24 h-24 bg-[#FF9E1A] rounded-2xl -z-10 blur-2xl opacity-20" />
                            </motion.div>
                        </div>
                    </section>

                    {/* ── CLAIM PROCESS ── */}
                    <section className="py-24 px-[5%] max-w-7xl mx-auto">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-4xl font-black text-slate-900 mb-4">{content.claimTitle}</h2>
                            <div className="w-20 h-1.5 bg-[#FF9E1A] mx-auto rounded-full" />
                        </div>
                        
                        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
                            {steps.map((step, i) => (
                                <motion.div key={i} variants={fadeUp} className="relative group">
                                    <div className="bg-slate-50 border border-slate-100 p-8 rounded-2xl group-hover:bg-white group-hover:shadow-xl group-hover:border-[#FF9E1A]/30 transition-all duration-300 h-full">
                                        <div className="text-3xl text-[#FF9E1A] mb-6">{step.icon}</div>
                                        <h3 className="font-bold text-xl mb-3">{step.title}</h3>
                                        <p className="text-slate-500 text-sm leading-relaxed">{step.desc}</p>
                                    </div>
                                    {i < steps.length - 1 && (
                                        <div className={`hidden lg:block absolute top-1/2 -translate-y-1/2 ${isRtl ? '-left-4 rotate-180' : '-right-4'} text-slate-200 text-2xl`}>➜</div>
                                    )}
                                </motion.div>
                            ))}
                        </div>
                    </section>

                    {/* ── FAQ / ACCORDION ── */}
                    <section className="py-24 px-[5%] bg-slate-50">
                        <div className="max-w-3xl mx-auto">
                            <h2 className="text-3xl font-black text-center mb-12">{content.termsTitle}</h2>
                            <div className="space-y-4">
                                {faqs.map((faq, i) => (
                                    <div key={i} className="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                                        <button 
                                            onClick={() => setActiveAccordion(activeAccordion === i ? null : i)}
                                            className="w-full p-6 flex items-center justify-between text-left font-bold text-slate-800 hover:bg-slate-50 transition-colors"
                                            style={{ textAlign: isRtl ? 'right' : 'left' }}
                                        >
                                            <span className="pr-4">{faq.q}</span>
                                            <FaChevronDown className={`transition-transform duration-300 ${activeAccordion === i ? 'rotate-180' : ''}`} />
                                        </button>
                                        <AnimatePresence>
                                            {activeAccordion === i && (
                                                <motion.div 
                                                    initial={{ height: 0 }} 
                                                    animate={{ height: 'auto' }} 
                                                    exit={{ height: 0 }}
                                                    className="overflow-hidden"
                                                >
                                                    <div className="p-6 pt-0 text-slate-500 border-t border-slate-50 leading-relaxed">
                                                        {faq.a}
                                                    </div>
                                                </motion.div>
                                            )}
                                        </AnimatePresence>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </section>

                    {/* ── FINAL CTA ── */}
                    <section className="py-20 px-[5%] text-center">
                        <div className="max-w-2xl mx-auto bg-slate-900 rounded-3xl p-12 relative overflow-hidden">
                            <div className="absolute top-0 left-0 w-full h-full bg-[#FF9E1A] opacity-5 pointer-events-none" />
                            <h3 className="text-white text-3xl font-bold mb-6 relative z-10">
                                {isRtl ? 'هل تحتاج إلى مساعدة فنية؟' : 'Need Technical Assistance?'}
                            </h3>
                            <p className="text-slate-400 mb-8 relative z-10">
                                {isRtl ? 'فريق الدعم الفني لدينا متاح للإجابة على جميع استفساراتكم.' : 'Our technical support team is available to answer all your inquiries.'}
                            </p>
                            <button 
                                onClick={() => router.get(`/${locale}/contact`)}
                                className="relative z-10 px-10 py-4 bg-white text-slate-900 rounded-xl font-black hover:scale-105 transition-transform"
                            >
                                {isRtl ? 'اتصل بنا' : 'Contact Us'}
                            </button>
                        </div>
                    </section>

                </motion.div>
            )}
        </MainLayout>
    );
}