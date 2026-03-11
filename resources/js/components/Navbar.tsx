import { useState, useEffect } from "react";
import { Link, usePage } from "@inertiajs/react";
import type { Lang } from "@/types/I18n";
import { ui } from "@/lib/I18n";

interface NavbarProps {
    lang: Lang;
    setLang: (lang: Lang) => void;
}

export default function Navbar({ lang, setLang }: NavbarProps) {
    const [scrolled, setScrolled] = useState(false);
    const [mobileOpen, setMobileOpen] = useState(false);

    const { url } = usePage();
    const c = ui[lang];
    const isRtl = lang === 'ar';

    const prefixed = (path: string) => `/${lang}${path}`;

    const navItems = [
        { label: c.nav.products, path: "/products" },
        { label: c.nav.distributors, path: "/distributors" },
        { label: c.nav.about, path: "/about" },
        { label: c.nav.warranty, path: "/warranty" },
        { label: c.nav.contact, path: "/contact" },
    ];

    useEffect(() => {
        const onScroll = () => setScrolled(window.scrollY > 40);
        window.addEventListener("scroll", onScroll);
        return () => window.removeEventListener("scroll", onScroll);
    }, []);

    const sideMenuClasses = isRtl
        ? `left-0 ${mobileOpen ? "translate-x-0" : "-translate-x-full"}`
        : `right-0 ${mobileOpen ? "translate-x-0" : "translate-x-full"}`;

    return (
        <>
            {/* Header */}
            <header
                className={`fixed top-0 inset-x-0 z-[100] transition-all duration-300 backdrop-blur-md ${
                    scrolled
                        ? "bg-white/95 shadow-md border-b border-gray-100"
                        : "bg-white/80"
                }`}
            >
                <div className="max-w-7xl mx-auto px-5 h-20 flex items-center justify-between">

                    {/* Logo (Desktop) */}
                    <Link href={prefixed("")} className="flex items-center">
                        <img
                            src="/storage/logo.png"
                            alt="Conan Tools"
                            className="h-10 w-auto"
                        />
                    </Link>

                    {/* Desktop Nav */}
                    <nav className="hidden md:flex items-center gap-10">
                        {navItems.map((item) => {
                            const active = url.startsWith(item.path);
                            return (
                                <Link
                                    key={item.path}
                                    href={prefixed(item.path)}
                                    className="relative group text-sm font-bold text-gray-600 hover:text-gray-900 transition"
                                >
                                    {item.label}
                                    <span
                                        className={`absolute left-0 -bottom-1 h-[2px] bg-[#FF9E1A] transition-all duration-300 ${
                                            active ? "w-full" : "w-0 group-hover:w-full"
                                        }`}
                                    />
                                </Link>
                            );
                        })}
                    </nav>

                    {/* Desktop Right */}
                    <div className="hidden md:flex items-center gap-4">
                        <div className="flex bg-gray-100 p-1 rounded-full border border-gray-200">
                            {(["en", "ar"] as Lang[]).map((l) => (
                                <button
                                    key={l}
                                    onClick={() => setLang(l)}
                                    className={`px-4 py-1 rounded-full text-[10px] font-black tracking-widest transition-all ${
                                        lang === l
                                            ? "bg-white text-[#FF9E1A] shadow-sm"
                                            : "text-gray-400 hover:text-gray-600"
                                    }`}
                                >
                                    {l === "en" ? "EN" : "عربي"}
                                </button>
                            ))}
                        </div>
                        <Link
                            href={prefixed("/contact")}
                            className="px-6 py-2.5 rounded-xl text-sm font-bold text-white hover:shadow-lg transition-all"
                            style={{ background: "#FF9E1A" }}
                        >
                            {c.nav.cta}
                        </Link>
                    </div>

                    {/* Hamburger (Stays in Header) */}
                    <button
                        onClick={() => setMobileOpen(!mobileOpen)}
                        className="md:hidden relative w-10 h-10 flex items-center justify-center z-[110]"
                        aria-label="Toggle Menu"
                    >
                        <span className={`absolute h-0.5 w-6 bg-slate-900 transition-all duration-300 ${mobileOpen ? "rotate-45" : "-translate-y-2"}`} />
                        <span className={`absolute h-0.5 w-6 bg-slate-900 transition-all duration-300 ${mobileOpen ? "opacity-0" : "opacity-100"}`} />
                        <span className={`absolute h-0.5 w-6 bg-slate-900 transition-all duration-300 ${mobileOpen ? "-rotate-45" : "translate-y-2"}`} />
                    </button>
                </div>
            </header>

            {/* Backdrop */}
            <div
                onClick={() => setMobileOpen(false)}
                className={`fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[105] transition-opacity duration-300 md:hidden ${
                    mobileOpen ? "opacity-100 pointer-events-auto" : "opacity-0 pointer-events-none"
                }`}
            />

            {/* Side Menu Sidebar */}
            <div
                dir={isRtl ? "rtl" : "ltr"}
                className={`fixed top-0 h-full w-80 bg-white z-[110] shadow-2xl transform transition-transform duration-500 ease-in-out md:hidden ${sideMenuClasses}`}
            >
                {/* Close Button Inside Side Menu */}
                <button
                    onClick={() => setMobileOpen(false)}
                    className={`absolute top-5 ${isRtl ? "right-5" : "left-5"} w-10 h-10 flex items-center justify-center`}
                    aria-label="Close Menu"
                >
                    <div className="relative w-6 h-6">
                        <span className="absolute top-1/2 left-0 w-6 h-0.5 bg-slate-900 rotate-45" />
                        <span className="absolute top-1/2 left-0 w-6 h-0.5 bg-slate-900 -rotate-45" />
                    </div>
                </button>

                <div className="p-8 flex flex-col h-full">
                    {/* Logo in Side Menu */}
                    <div className="mb-10 pt-10 flex justify-center">
                         <img
                            src="/storage/logo.png"
                            alt="Conan Tools"
                            className="h-12 w-auto"
                        />
                    </div>

                    {/* Nav Links */}
                    <div className="flex flex-col gap-6">
                        {navItems.map((item) => {
                            const active = url.startsWith(item.path);
                            return (
                                <Link
                                    key={item.path}
                                    href={prefixed(item.path)}
                                    onClick={() => setMobileOpen(false)}
                                    className={`text-2xl font-black transition-colors ${
                                        active ? "text-[#FF9E1A]" : "text-slate-800 hover:text-[#FF9E1A]"
                                    }`}
                                >
                                    {item.label}
                                </Link>
                            );
                        })}
                    </div>

                    {/* Language & CTA at Bottom */}
                    <div className="mt-auto pb-10 flex flex-col gap-6">
                        <div className="flex gap-2">
                            {(["en", "ar"] as Lang[]).map((l) => (
                                <button
                                    key={l}
                                    onClick={() => { setLang(l); setMobileOpen(false); }}
                                    className={`flex-1 py-3 rounded-xl border-2 font-bold transition-all ${
                                        lang === l ? "border-[#FF9E1A] text-[#FF9E1A] bg-orange-50" : "border-gray-100 text-gray-400"
                                    }`}
                                >
                                    {l === "en" ? "English" : "عربي"}
                                </button>
                            ))}
                        </div>
                        <Link
                            href={prefixed("/contact")}
                            onClick={() => setMobileOpen(false)}
                            className="w-full py-4 rounded-xl text-white font-bold text-center shadow-lg hover:brightness-110"
                            style={{ background: "#FF9E1A" }}
                        >
                            {c.nav.cta}
                        </Link>
                    </div>
                </div>
            </div>
        </>
    );
}