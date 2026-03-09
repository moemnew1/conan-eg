import { useState, type ReactNode } from 'react';
import { Link } from '@inertiajs/react';
import type { Lang } from '@/types/I18n';
import { ui } from '@/lib/I18n';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import WhatsAppButton from '@/components/Whatsappbutton';

interface MainLayoutProps {
    children: (ctx: { lang: Lang; c: typeof ui[Lang]; isRtl: boolean }) => ReactNode;
}

/**
 * Wrap every page with <MainLayout>.
 *
 * Usage:
 *   <MainLayout>
 *     {({ lang, c, isRtl }) => ( ...page content... )}
 *   </MainLayout>
 *
 * The render-prop pattern passes lang/c/isRtl down so page content
 * can react to the active language without needing its own state.
 */
export default function MainLayout({ children }: MainLayoutProps) {
    const [lang, setLang] = useState<Lang>('en');

    const c = ui[lang];
    const isRtl = c.dir === 'rtl';
    const fontClass = isRtl ? 'font-cairo' : 'font-inter';

    return (
        <div dir={c.dir} className={`${fontClass} bg-white text-gray-900 overflow-x-hidden`}>

            {/* ── Google Fonts ── */}
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