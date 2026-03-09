import { type ReactNode } from 'react';
import { usePage } from '@inertiajs/react';
import type { Lang } from '@/types/I18n';
import { ui } from '@/lib/I18n';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import WhatsAppButton from '@/components/Whatsappbutton';

interface MainLayoutProps {
    children: (ctx: { lang: Lang; c: typeof ui[Lang]; isRtl: boolean }) => ReactNode;
}

interface SharedProps {
    locale: Lang;
    [key: string]: unknown;
}

export default function MainLayout({ children }: MainLayoutProps) {
    const { props, url } = usePage<SharedProps>();

    const lang: Lang = props.locale === 'ar' ? 'ar' : 'en';
    const c = ui[lang];
    const isRtl = c.dir === 'rtl';
    const fontClass = isRtl ? 'font-cairo' : 'font-inter';

    const setLang = (newLang: Lang) => {
        if (newLang === lang) return;

        // Strip query string and strip existing /en or /ar prefix
        const path = url.split('?')[0];
        const bare = path.replace(/^\/(en|ar)/, '') || '/';

        // Always use the prefix — /en/about or /ar/about
        const newUrl = `/${newLang}${bare === '/' ? '' : bare}`;

        window.location.href = newUrl;
    };

    return (
        <div dir={c.dir} className={`${fontClass} bg-white text-gray-900 overflow-x-hidden`}>
            <style>{`
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cairo:wght@400;600;700;800&display=swap');
                .font-inter { font-family: 'Inter', sans-serif; }
                .font-cairo { font-family: 'Cairo', sans-serif; }
            `}</style>

            <Navbar lang={lang} setLang={setLang} />

            <main className="pt-16">
                {children({ lang, c, isRtl })}
            </main>

            <WhatsAppButton isRtl={isRtl} />

            <Footer lang={lang} setLang={setLang} />
        </div>
    );
}