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

    const prefixed = (path: string) => `/${lang}${path}`;

    const navItems = [
        { label: c.nav.products, path: "/products" },
        { label: c.nav.about, path: "/about" },
        { label: c.nav.contact, path: "/contact" },
    ];

    useEffect(() => {
        const onScroll = () => setScrolled(window.scrollY > 40);
        window.addEventListener("scroll", onScroll);
        return () => window.removeEventListener("scroll", onScroll);
    }, []);

    return (
        <>
            <header
                className={`fixed top-0 inset-x-0 z-50 transition-all duration-300 backdrop-blur-md ${
                    scrolled
                        ? "bg-white/95 shadow-sm border-b"
                        : "bg-white/80"
                }`}
            >
                <div className="max-w-6xl mx-auto px-5 h-18 flex items-center justify-between">

                    {/* Logo */}
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
                            const href = prefixed(item.path);
                            const active = url.includes(item.path);

                            return (
                                <Link
                                    key={item.path}
                                    href={href}
                                    className="relative text-sm font-medium text-gray-600 hover:text-gray-900 transition"
                                >
                                    {item.label}

                                    {/* animated underline */}
                                    <span
                                        className={`absolute left-0 -bottom-1 h-[2px] bg-[#FF9E1A] transition-all duration-300 ${
                                            active
                                                ? "w-full"
                                                : "w-0 group-hover:w-full"
                                        }`}
                                    />
                                </Link>
                            );
                        })}
                    </nav>

                    {/* Desktop Right */}
                    <div className="hidden md:flex items-center gap-3">
                        {(["en", "ar"] as Lang[]).map((l) => (
                            <button
                                key={l}
                                onClick={() => setLang(l)}
                                className={`px-3 py-1 rounded-full text-xs font-semibold border transition ${
                                    lang === l
                                        ? "border-[#FF9E1A] text-[#FF9E1A] bg-orange-50"
                                        : "border-gray-200 text-gray-500 hover:border-gray-400"
                                }`}
                            >
                                {l === "en" ? "EN" : "عربي"}
                            </button>
                        ))}

                        <Link
                            href={prefixed("/contact")}
                            className="px-4 py-2 rounded-md text-sm font-semibold text-white hover:opacity-90 transition"
                            style={{ background: "#FF9E1A" }}
                        >
                            {c.nav.cta}
                        </Link>
                    </div>

                    {/* Hamburger */}
                    <button
                        onClick={() => setMobileOpen(!mobileOpen)}
                        className="md:hidden relative w-10 h-10 flex items-center justify-center"
                    >
                        <span
                            className={`absolute h-0.5 w-6 bg-black transition-transform duration-300 ${
                                mobileOpen
                                    ? "rotate-45"
                                    : "-translate-y-2"
                            }`}
                        />
                        <span
                            className={`absolute h-0.5 w-6 bg-black transition-opacity duration-300 ${
                                mobileOpen ? "opacity-0" : "opacity-100"
                            }`}
                        />
                        <span
                            className={`absolute h-0.5 w-6 bg-black transition-transform duration-300 ${
                                mobileOpen
                                    ? "-rotate-45"
                                    : "translate-y-2"
                            }`}
                        />
                    </button>
                </div>
            </header>

            {/* Backdrop */}
            <div
                onClick={() => setMobileOpen(false)}
                className={`fixed inset-0 bg-black/30 backdrop-blur-sm transition-opacity duration-300 md:hidden ${
                    mobileOpen
                        ? "opacity-100 pointer-events-auto"
                        : "opacity-0 pointer-events-none"
                }`}
            />

            {/* Mobile Menu */}
            <div
                className={`fixed top-0 right-0 w-72 h-full bg-white shadow-xl transform transition-transform duration-300 md:hidden ${
                    mobileOpen ? "translate-x-0" : "translate-x-full"
                }`}
            >
                <div className="p-6 flex flex-col gap-6 mt-12">

                    {navItems.map((item) => {
                        const href = prefixed(item.path);
                        const active = url.includes(item.path);

                        return (
                            <Link
                                key={item.path}
                                href={href}
                                onClick={() => setMobileOpen(false)}
                                className={`text-lg font-medium ${
                                    active
                                        ? "text-[#FF9E1A]"
                                        : "text-gray-700"
                                }`}
                            >
                                {item.label}
                            </Link>
                        );
                    })}

                    {/* language */}
                    <div className="flex gap-2 pt-4">
                        {(["en", "ar"] as Lang[]).map((l) => (
                            <button
                                key={l}
                                onClick={() => setLang(l)}
                                className={`px-3 py-1 rounded-full text-xs font-semibold border ${
                                    lang === l
                                        ? "border-[#FF9E1A] text-[#FF9E1A] bg-orange-50"
                                        : "border-gray-200 text-gray-500"
                                }`}
                            >
                                {l === "en" ? "EN" : "عربي"}
                            </button>
                        ))}
                    </div>

                    {/* CTA */}
                    <Link
                        href={prefixed("/contact")}
                        onClick={() => setMobileOpen(false)}
                        className="mt-4 px-4 py-3 rounded-md text-sm font-semibold text-white text-center"
                        style={{ background: "#FF9E1A" }}
                    >
                        {c.nav.cta}
                    </Link>
                </div>
            </div>
        </>
    );
}