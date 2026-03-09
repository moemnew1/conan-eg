import { useState, useEffect } from 'react';
import { Link, usePage } from '@inertiajs/react';
import type { Lang } from '@/types/I18n';
import { ui } from '@/lib/I18n';

interface NavbarProps {
    lang: Lang;
    setLang: (lang: Lang) => void;
}

const NAV_ROUTES = {
    products: '/products',
    about: '/about',
    contact: '/contact',
} as const;

export default function Navbar({ lang, setLang }: NavbarProps) {
    const [scrolled, setScrolled] = useState(false);
    const { url } = usePage();
    const c = ui[lang];

    useEffect(() => {
        const onScroll = () => setScrolled(window.scrollY > 50);
        window.addEventListener('scroll', onScroll);
        return () => window.removeEventListener('scroll', onScroll);
    }, []);

    const navItems = [
        { label: c.nav.products, href: NAV_ROUTES.products },
        { label: c.nav.about,    href: NAV_ROUTES.about },
        { label: c.nav.contact,  href: NAV_ROUTES.contact },
    ];

    return (
        <header
            className={`fixed top-0 inset-x-0 z-50 px-[5%] transition-shadow duration-300 bg-white/95 backdrop-blur-md border-b border-gray-100 ${
                scrolled ? 'shadow-sm' : ''
            }`}
        >
            <div className="max-w-6xl mx-auto h-16 flex items-center justify-between gap-6">

                {/* Logo */}
                <Link href="/" className="flex items-center shrink-0">
                    <img
                        src="/storage/logo.png"
                        alt="Conan Tools"
                        className="h-10 w-auto object-contain"
                    />
                </Link>

                {/* Links — hidden on mobile */}
                <nav className="hidden md:flex gap-8">
                    {navItems.map((item) => {
                        const active = url.startsWith(item.href);
                        return (
                            <Link
                                key={item.href}
                                href={item.href}
                                className={`text-sm font-medium transition-colors ${
                                    active
                                        ? 'text-[#FF9E1A]'
                                        : 'text-gray-500 hover:text-gray-900'
                                }`}
                            >
                                {item.label}
                            </Link>
                        );
                    })}
                </nav>

                {/* Right controls */}
                <div className="flex items-center gap-2">
                    {(['en', 'ar'] as Lang[]).map((l) => (
                        <button
                            key={l}
                            onClick={() => setLang(l)}
                            className={`px-3 py-1 rounded-full text-xs font-semibold border transition-all ${
                                lang === l
                                    ? 'border-[#FF9E1A] text-[#FF9E1A] bg-orange-50'
                                    : 'border-gray-200 text-gray-500 hover:border-gray-400'
                            }`}
                        >
                            {l === 'en' ? 'EN' : 'عربي'}
                        </button>
                    ))}
                    <Link
                        href="/contact"
                        className="ms-1 px-4 py-2 rounded-md text-sm font-semibold text-white transition-opacity hover:opacity-85 inline-block"
                        style={{ background: '#FF9E1A' }}
                    >
                        {c.nav.cta}
                    </Link>
                </div>
            </div>
        </header>
    );
}