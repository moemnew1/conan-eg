import { useState, useEffect } from 'react';
import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import MainLayout from '@/layouts/Mainlayout';

interface Distributor {
    id: number;
    name: string;
    ar_name: string | null;
    logo: string | null;
    address: string | null;
    ar_address: string | null;
    latitude: number;
    longitude: number;
    google_maps_link: string | null;
    distance?: number;
}

interface PageProps {
    distributors: Distributor[];
    locale: string;
}

// ─── Animations ─────────────────────────────────────────────

const fadeUp = {
    hidden: { opacity: 0, y: 40 },
    show: { opacity: 1, y: 0, transition: { duration: 0.6, ease: 'easeOut' } },
};

const stagger = {
    show: { transition: { staggerChildren: 0.12 } },
};

const floating = {
    animate: { y: [0, -10, 0], transition: { duration: 4, repeat: Infinity, ease: 'easeInOut' } },
};

const highlightAnimation = {
    animate: {
        scale: [1, 1.03, 1],
        boxShadow: [
            '0px 0px 0px rgba(255, 158, 26, 0)',
            '0px 0px 20px rgba(255, 158, 26, 0.5)',
            '0px 0px 0px rgba(255, 158, 26, 0)',
        ],
        transition: { duration: 1.5, repeat: Infinity },
    },
};

// ─── Page ───────────────────────────────────────────────────

export default function DistributorsPage() {
    const { props } = usePage<PageProps>();
    const locale = props.locale ?? 'en';

    const [userLocation, setUserLocation] = useState<any>(null);
    const [list, setList] = useState<Distributor[]>(props.distributors ?? []);

    const calcDistance = (
        lat1: number,
        lon1: number,
        lat2: number,
        lon2: number
    ) => {
        const R = 6371;
        const dLat = ((lat2 - lat1) * Math.PI) / 180;
        const dLon = ((lon2 - lon1) * Math.PI) / 180;

        const a =
            Math.sin(dLat / 2) ** 2 +
            Math.cos((lat1 * Math.PI) / 180) *
                Math.cos((lat2 * Math.PI) / 180) *
                Math.sin(dLon / 2) ** 2;

        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c;
    };

    const findNearest = () => {
        navigator.geolocation.getCurrentPosition((pos) => {
            const { latitude, longitude } = pos.coords;
            setUserLocation({ latitude, longitude });

            const sorted = [...list]
                .map((d) => ({
                    ...d,
                    distance: calcDistance(latitude, longitude, d.latitude, d.longitude),
                }))
                .sort((a, b) => (a.distance ?? 0) - (b.distance ?? 0));

            setList(sorted);
        });
    };

    useEffect(() => {
        setList(props.distributors ?? []);
    }, [props.distributors]);

    return (
        <MainLayout>
            {({ lang, isRtl }) => (
                <>
                    {/* HERO */}
                    <section className="pt-16 pb-16 px-[5%] bg-gray-50 border-b border-gray-100 relative overflow-hidden">
                        <motion.div className="absolute left-10 top-10 text-4xl opacity-20" variants={floating} animate="animate">
                            🔧
                        </motion.div>
                        <motion.div className="absolute right-16 top-24 text-4xl opacity-20" variants={floating} animate="animate">
                            🪚
                        </motion.div>
                        <motion.div className="absolute bottom-10 left-1/3 text-4xl opacity-20" variants={floating} animate="animate">
                            ⚙️
                        </motion.div>

                        <div className="max-w-3xl mx-auto text-center relative z-10">
                            <motion.h1 variants={fadeUp} initial="hidden" animate="show" className="text-4xl font-extrabold mb-4">
                                {isRtl ? 'ابحث عن أقرب موزع' : 'Find Nearest Distributor'}
                            </motion.h1>

                            <motion.p variants={fadeUp} initial="hidden" animate="show" className="text-gray-500 mb-8">
                                {isRtl
                                    ? 'استخدم موقعك للعثور على أقرب موزع لمنتجات كونان'
                                    : 'Use your location to find the nearest Conan Tools distributor'}
                            </motion.p>

                            <motion.button
                                whileHover={{ scale: 1.05 }}
                                whileTap={{ scale: 0.95 }}
                                onClick={findNearest}
                                className="px-7 py-3 rounded-md font-semibold text-white"
                                style={{ background: '#FF9E1A' }}
                            >
                                {isRtl ? 'تحديد أقرب موزع' : 'Locate Nearest Distributor'}
                            </motion.button>
                        </div>
                    </section>

                    {/* DISTRIBUTORS LIST */}
                    <motion.section className="py-20 px-[5%]" initial="hidden" animate="show" variants={stagger}>
                        <div className="max-w-6xl mx-auto grid md:grid-cols-3 gap-6">
                            {list.map((d, idx) => {
                                const name = lang === 'ar' && d.ar_name ? d.ar_name : d.name;
                                const address = lang === 'ar' && d.ar_address ? d.ar_address : d.address;

                                // Highlight only the nearest distributor
                                const isNearest = idx === 0 && d.distance !== undefined;

                                return (
                                    <motion.div
                                        key={d.id}
                                        variants={fadeUp}
                                        whileHover={{ y: -5, scale: 1.02 }}
                                        {...(isNearest && highlightAnimation)}
                                        className="border border-gray-100 rounded-xl overflow-hidden hover:border-[#FF9E1A] transition relative group"
                                    >
                                        {d.logo && (
                                            <img src={d.logo} className="w-full h-40 object-contain p-4 bg-white" />
                                        )}

                                        <div className="p-5">
                                            <h3 className="font-bold text-lg mb-2">{name}</h3>

                                            {address && <p className="text-sm text-gray-500 mb-3">{address}</p>}

                                            {d.distance && (
                                                <div className="text-xs text-[#FF9E1A] font-semibold mb-3">
                                                    {d.distance.toFixed(2)} km
                                                </div>
                                            )}

                                            {d.google_maps_link && (
                                                <a
                                                    href={d.google_maps_link}
                                                    target="_blank"
                                                    className="text-sm font-semibold text-gray-600 hover:text-[#FF9E1A]"
                                                >
                                                    {isRtl ? 'فتح في خرائط جوجل' : 'Open in Google Maps'}
                                                </a>
                                            )}
                                        </div>
                                    </motion.div>
                                );
                            })}
                        </div>
                    </motion.section>
                </>
            )}
        </MainLayout>
    );
}