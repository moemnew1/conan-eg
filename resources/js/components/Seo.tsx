import { Head, usePage } from '@inertiajs/react';
import type { Lang } from '@/types/I18n';

interface SeoProps {
    title?: string;
    description?: string;
    image?: string;
    keywords?: string; // <-- added
}

interface SharedProps {
    locale: Lang;
}

export default function Seo({
    title = 'Conan Tools',
    description = 'Professional construction and industrial tools.',
    image = '/images/seo-default.jpg',
    keywords = '', // <-- default empty
}: SeoProps) {
    const { props, url } = usePage<SharedProps>();

    const lang = props.locale === 'ar' ? 'ar' : 'en';

    const siteName = 'Conan Tools';

    const fullTitle =
        title === siteName ? siteName : `${title} | ${siteName}`;

    const baseUrl = 'https://conantools.net';

    const canonical = `${baseUrl}${url}`;

    const alternateEn = `${baseUrl}/en${url.replace(/^\/(en|ar)/, '')}`;
    const alternateAr = `${baseUrl}/ar${url.replace(/^\/(en|ar)/, '')}`;

    return (
        <Head>
            {/* Title */}
            <title>{fullTitle}</title>

            {/* Basic SEO */}
            <meta name="description" content={description} />
            {keywords && <meta name="keywords" content={keywords} />}
            <meta name="robots" content="index, follow" />

            {/* OpenGraph */}
            <meta property="og:title" content={fullTitle} />
            <meta property="og:description" content={description} />
            <meta property="og:image" content={image} />
            <meta property="og:url" content={canonical} />
            <meta property="og:type" content="website" />
            <meta property="og:locale" content={lang === 'ar' ? 'ar_EG' : 'en_US'} />

            {/* Twitter */}
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:title" content={fullTitle} />
            <meta name="twitter:description" content={description} />
            <meta name="twitter:image" content={image} />

            {/* Canonical */}
            <link rel="canonical" href={canonical} />

            {/* hreflang for multilingual SEO */}
            <link rel="alternate" hrefLang="en" href={alternateEn} />
            <link rel="alternate" hrefLang="ar" href={alternateAr} />
        </Head>
    );
}