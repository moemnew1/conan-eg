import type { Lang } from '@/types/I18n';
import { ui } from '@/lib/I18n';
import { FaFacebookF, FaInstagram, FaStore, FaWhatsapp } from 'react-icons/fa';
import { SiTiktok } from 'react-icons/si';

interface FooterProps {
    lang: Lang;
    setLang: (lang: Lang) => void;
}

export default function Footer({ lang, setLang }: FooterProps) {
    const c = ui[lang];

    return (
        <footer className="bg-black text-gray-200 py-12">
            <div className="max-w-6xl mx-auto px-4 flex flex-col items-center gap-8">

                {/* Logo */}
                <img
                    src="/storage/logo.png"
                    alt="Conan Tools"
                    className="h-12 w-auto object-contain mb-4"
                />

                {/* Social Icons */}
                <div className="flex gap-6">
                    <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer" className="text-white hover:text-pink-500 transition transform hover:scale-110">
                        <SiTiktok size={26} />
                    </a>
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" className="text-white hover:text-blue-600 transition transform hover:scale-110">
                        <FaFacebookF size={26} />
                    </a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" className="text-white hover:text-pink-400 transition transform hover:scale-110">
                        <FaInstagram size={26} />
                    </a>
                    <a href="https://wa.me/201020333441" target="_blank" rel="noopener noreferrer" className="text-white hover:text-green-500 transition transform hover:scale-110">
                        <FaWhatsapp size={26} />
                    </a>
                    <a href="/store" className="text-white hover:text-orange-500 transition transform hover:scale-110">
                        <FaStore size={26} />
                    </a>
                </div>

                {/* Footer Text */}
                <p className="text-gray-400 text-center max-w-2xl">{c.footer}</p>

                {/* Language Switch */}
                <div className="flex gap-3">
                    {(['en', 'ar'] as Lang[]).map((l) => (
                        <button
                            key={l}
                            onClick={() => setLang(l)}
                            className={`px-4 py-2 rounded-full text-xs font-semibold border transition-all ${
                                lang === l
                                    ? 'border-[#FF9E1A] text-[#FF9E1A] bg-orange-50'
                                    : 'border-gray-700 text-gray-400 hover:border-gray-500 hover:text-white'
                            }`}
                        >
                            {l === 'en' ? 'EN' : 'عربي'}
                        </button>
                    ))}
                </div>

                {/* Bottom small text */}
                <div className="mt-6 text-gray-500 text-xs text-center">
                    &copy; {new Date().getFullYear()} Conan Tools. All rights reserved.
                </div>
            </div>
        </footer>
    );
}