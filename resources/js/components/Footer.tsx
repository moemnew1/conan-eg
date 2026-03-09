import type { Lang } from '@/types/I18n';
import { ui } from '@/lib/I18n';

interface FooterProps {
    lang: Lang;
    setLang: (lang: Lang) => void;
}

export default function Footer({ lang, setLang }: FooterProps) {
    const c = ui[lang];

    return (
        <footer className="border-t border-gray-100 bg-gray-50 px-[5%] py-6">
            <div className="max-w-6xl mx-auto flex flex-wrap items-center justify-between gap-4">
                <div className="flex items-center">
                    <img
                        src="/storage/logo.png"
                        alt="Conan Tools"
                        className="h-8 w-auto object-contain"
                    />
                </div>
                <span className="text-xs text-gray-300">{c.footer}</span>
                <div className="flex gap-2">
                    {(['en', 'ar'] as Lang[]).map((l) => (
                        <button
                            key={l}
                            onClick={() => setLang(l)}
                            className={`px-3 py-1 rounded-full text-xs font-semibold border transition-all ${
                                lang === l
                                    ? 'border-[#FF9E1A] text-[#FF9E1A] bg-orange-50'
                                    : 'border-gray-200 text-gray-400 hover:border-gray-300'
                            }`}
                        >
                            {l === 'en' ? 'EN' : 'عربي'}
                        </button>
                    ))}
                </div>
            </div>
        </footer>
    );
}