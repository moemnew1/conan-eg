import MainLayout from '@/layouts/Mainlayout';
import { motion } from 'framer-motion';
import { useState, type FormEvent } from 'react';
import { router } from '@inertiajs/react';
import type { Lang } from '@/types/I18n';
import Seo from '@/components/Seo';

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
        transition: { duration: 4, repeat: Infinity, ease: 'easeInOut' },
    },
};

// ─── i18n (same as yours) ───────────────────────────────────

const contactI18n = {
    en: {
        badge: '📍 Dokki, Cairo — Egypt',
        heading: 'Get in Touch',
        sub: "We'd love to hear from you. Send us a message and we'll respond within 24 hours.",
        form: {
            name: 'Your Name',
            email: 'Email Address',
            phone: 'Phone / WhatsApp',
            subject: 'Subject',
            message: 'Your message…',
            btn: 'Send Inquiry',
            sending: 'Sending…',
            success: "✅ Message sent! We'll get back to you shortly.",
        },
        info: {
            title: 'Contact Information',
            items: [
                { icon: '📞', label: 'Phone / WhatsApp', val: '+20 106 771 8255', href: 'tel:+201067718255' },
                { icon: '✉️', label: 'Email', val: 'info@conan-eg.com', href: 'mailto:info@conan-eg.com' },
                { icon: '📍', label: 'Address', val: '21 Mohi El Din Abo El Ezz, Dokki, Giza, Egypt', href: null },
                { icon: '🕐', label: 'Working Hours', val: 'Sun – Thu: 9:00 AM – 6:00 PM', href: null },
            ],
        },
        map: 'Our Location',
    },
    ar: {
        badge: '📍 الدقي، القاهرة — مصر',
        heading: 'تواصل معنا',
        sub: 'يسعدنا سماع رأيك. أرسل لنا رسالة وسنرد خلال 24 ساعة.',
        form: {
            name: 'اسمك',
            email: 'البريد الإلكتروني',
            phone: 'رقم الهاتف / واتساب',
            subject: 'الموضوع',
            message: 'رسالتك…',
            btn: 'إرسال الاستفسار',
            sending: 'جارٍ الإرسال…',
            success: '✅ تم إرسال رسالتك! سنتواصل معك قريباً.',
        },
        info: {
            title: 'معلومات التواصل',
            items: [
                { icon: '📞', label: 'هاتف / واتساب', val: '+201067718255', href: 'tel:+201067718255' },
                { icon: '✉️', label: 'البريد الإلكتروني', val: 'info@conan-eg.com', href: 'mailto:info@conan-eg.com' },
                { icon: '📍', label: 'العنوان', val: '21 محي الدين أبو العز، الدقي، الجيزة، مصر', href: null },
                { icon: '🕐', label: 'ساعات العمل', val: 'الأحد – الخميس: 9 صباحاً – 6 مساءً', href: null },
            ],
        },
        map: 'موقعنا',
    },
} as const;

// ─── Page ───────────────────────────────────────────────────

export default function ContactPage() {
    return (
        <MainLayout>
            {({ lang, isRtl }) => {
                const c = contactI18n[lang];

                return (
                    <>
                            <Seo
          title={
            isRtl
              ? 'تواصل معنا | كونان تولز – مصر'
              : 'Contact Us | Conan Tools – Egypt'
          }
          description={
            isRtl
              ? 'تواصل مع فريق كونان تولز في مصر للاستفسارات وطلبات الدعم. أرسل رسالة وسنرد خلال 24 ساعة.'
              : "Get in touch with Conan Tools in Egypt for inquiries and support. Send us a message and we'll respond within 24 hours."
          }
          keywords={
            isRtl
              ? 'كونان تولز, اتصل بنا, استفسار, الدعم, الدقي, القاهرة'
              : 'Conan Tools, contact us, inquiry, support, Dokki, Cairo, Egypt'
          }
    image="/logo.png"
        />
                        {/* HERO */}
                        <motion.section
                            initial="hidden"
                            animate="show"
                            variants={stagger}
                            className="pt-14 pb-16 px-[5%] bg-gray-50 border-b border-gray-100 relative overflow-hidden"
                        >
                            {/* Floating Icons */}
                            <motion.div variants={floating} animate="animate" className="absolute left-12 top-10 text-4xl opacity-20">
                                📞
                            </motion.div>

                            <motion.div variants={floating} animate="animate" className="absolute right-20 top-16 text-4xl opacity-20">
                                ✉️
                            </motion.div>

                            <div className="max-w-2xl mx-auto text-center relative z-10">

                                <motion.span
                                    variants={fadeUp}
                                    className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold border mb-6"
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
                                    className="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4"
                                >
                                    {c.heading}
                                </motion.h1>

                                <motion.p
                                    variants={fadeUp}
                                    className="text-base md:text-lg text-gray-500"
                                >
                                    {c.sub}
                                </motion.p>
                            </div>
                        </motion.section>

                        {/* CONTACT GRID */}
                        <motion.section
                            initial="hidden"
                            whileInView="show"
                            viewport={{ once: true }}
                            variants={stagger}
                            className="py-20 px-[5%]"
                        >
                            <div className="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">

                                {/* LEFT */}
                                <motion.div variants={fadeUp} className="flex flex-col gap-8">

                                    <div>
                                        <h2 className="text-lg font-extrabold mb-6">{c.info.title}</h2>

                                        <div className="flex flex-col gap-4">
                                            {c.info.items.map((item, i) => (

                                                <motion.div
                                                    key={i}
                                                    whileHover={{ y: -4, scale: 1.02 }}
                                                    className="flex gap-4 items-start p-4 rounded-xl border border-gray-100 hover:border-[#FF9E1A] transition relative group"
                                                >

                                                    {/* Glow */}
                                                    <div className="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition bg-[#FF9E1A]/10 blur-xl"></div>

                                                    <div
                                                        className="relative w-10 h-10 rounded-xl flex items-center justify-center border"
                                                        style={{
                                                            background: 'rgba(255,158,26,0.10)',
                                                            borderColor: 'rgba(255,158,26,0.25)',
                                                        }}
                                                    >
                                                        {item.icon}
                                                    </div>

                                                    <div className="relative">
                                                        <div className="text-[10px] font-bold uppercase tracking-wider mb-1 text-[#FF9E1A]">
                                                            {item.label}
                                                        </div>

                                                        {item.href ? (
                                                            <a
                                                                href={item.href}
                                                                className="text-sm text-gray-600 hover:text-[#FF9E1A]"
                                                            >
                                                                {item.val}
                                                            </a>
                                                        ) : (
                                                            <div className="text-sm text-gray-600">{item.val}</div>
                                                        )}
                                                    </div>
                                                </motion.div>

                                            ))}
                                        </div>
                                    </div>

                                    {/* MAP */}
                                    <motion.div variants={fadeUp}>
                                        <h2 className="text-lg font-extrabold mb-4">{c.map}</h2>

<div className="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.9699805729806!2d31.19888457583325!3d30.037719074926873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584782c7e47b79%3A0xc558a79715d60b6e!2sJotun%20In%20Colour!5e0!3m2!1sen!2seg!4v1773084068610!5m2!1sen!2seg"
        width="100%"
        height="450"
        style={{ border: 0 }}
        allowFullScreen
        loading="lazy"
        referrerPolicy="no-referrer-when-downgrade"
        title="Conan Tools Location"
    />
</div>
                                    </motion.div>

                                </motion.div>

                                {/* RIGHT FORM */}
                                <motion.div
                                    variants={fadeUp}
                                    className="bg-gray-50 border border-gray-100 rounded-xl p-8"
                                >
                                    <ContactForm lang={lang} isRtl={isRtl} c={c.form} />
                                </motion.div>

                            </div>
                        </motion.section>
                    </>
                );
            }}
        </MainLayout>
    );
}

// ─── Contact Form ───────────────────────────────────────────

interface FormStrings {
    name: string;
    email: string;
    phone: string;
    subject: string;
    message: string;
    btn: string;
    sending: string;
    success: string;
}

interface ContactFormProps {
    lang: Lang;
    isRtl: boolean;
    c: FormStrings;
}

function ContactForm({ c }: ContactFormProps) {

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
            setFields((p) => ({ ...p, [k]: e.target.value }));

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
        'w-full border border-gray-200 rounded-lg px-4 py-3 text-sm outline-none focus:border-[#FF9E1A] transition bg-white mb-3';

    if (status === 'done') {
        return (
            <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                className="flex flex-col items-center justify-center py-16 text-center gap-4"
            >
                <div className="text-5xl">✅</div>
                <p className="text-sm text-gray-600">{c.success}</p>
            </motion.div>
        );
    }

    return (
        <form onSubmit={handleSubmit} noValidate>

            <input required type="text" placeholder={c.name} value={fields.name} onChange={set('name')} className={inputClass} />
            <input required type="email" placeholder={c.email} value={fields.email} onChange={set('email')} className={inputClass} />
            <input type="tel" placeholder={c.phone} value={fields.phone} onChange={set('phone')} className={inputClass} />
            <input type="text" placeholder={c.subject} value={fields.subject} onChange={set('subject')} className={inputClass} />

            <textarea
                required
                rows={5}
                placeholder={c.message}
                value={fields.message}
                onChange={set('message')}
                className={`${inputClass} resize-none mb-5`}
            />

            <motion.button
                whileHover={{ scale: 1.05 }}
                whileTap={{ scale: 0.95 }}
                type="submit"
                disabled={status === 'sending'}
                className="w-full py-3 rounded-lg font-semibold text-sm text-white disabled:opacity-60"
                style={{ background: '#FF9E1A' }}
            >
                {status === 'sending' ? c.sending : c.btn}
            </motion.button>

        </form>
    );
}