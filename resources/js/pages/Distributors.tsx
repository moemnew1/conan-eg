import { useState, useEffect } from 'react';
import { usePage } from '@inertiajs/react';
import { motion, AnimatePresence } from 'framer-motion';
import MainLayout from '@/layouts/Mainlayout';
import { FaPhoneAlt, FaWhatsapp, FaMapMarkerAlt, FaCompass } from 'react-icons/fa';
import Seo from '@/components/Seo';

interface Phone {
  id: number;
  phone: string;
  sort: number;
}

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
  phones?: Phone[];
}

interface PageProps {
  distributors: Distributor[];
  locale: string;
}

// ─── Animations ─────────────────────────────────────────────
const fadeUp = {
  hidden: { opacity: 0, y: 20 },
  show: { opacity: 1, y: 0, transition: { duration: 0.5 } },
};

const pulse = {
  animate: {
    opacity: [0.4, 0.7, 0.4],
    transition: { duration: 1.5, repeat: Infinity },
  },
};

// ─── Skeleton Loader ────────────────────────────────────────
const CardSkeleton = () => (
  <div className="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden h-[500px] flex flex-col">
    <motion.div variants={pulse} animate="animate" className="bg-gray-200 h-48 w-full" />
    <div className="p-6 space-y-4">
      <motion.div variants={pulse} animate="animate" className="h-6 bg-gray-200 rounded w-3/4" />
      <motion.div variants={pulse} animate="animate" className="h-4 bg-gray-100 rounded w-full" />
      <div className="pt-6 space-y-3">
        <motion.div variants={pulse} animate="animate" className="h-12 bg-gray-50 rounded w-full" />
        <motion.div variants={pulse} animate="animate" className="h-12 bg-gray-50 rounded w-full" />
      </div>
    </div>
  </div>
);

export default function DistributorsPage() {
  const { props } = usePage<PageProps>();
  const [list, setList] = useState<Distributor[]>(props.distributors ?? []);
  const [isLocating, setIsLocating] = useState(false);

  const calcDistance = (lat1: number, lon1: number, lat2: number, lon2: number) => {
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
    if (!navigator.geolocation) return alert("Geolocation not supported");
    setIsLocating(true);
    
    navigator.geolocation.getCurrentPosition(
      (pos) => {
        const { latitude, longitude } = pos.coords;
        const sorted = [...list]
          .map((d) => ({
            ...d,
            distance: calcDistance(latitude, longitude, d.latitude, d.longitude),
          }))
          .sort((a, b) => (a.distance ?? 0) - (b.distance ?? 0));

        setTimeout(() => {
          setList(sorted);
          setIsLocating(false);
        }, 800);
      },
      () => {
        setIsLocating(false);
        alert("Unable to access location.");
      }
    );
  };

  useEffect(() => {
    setList(props.distributors ?? []);
  }, [props.distributors]);

  return (
    <MainLayout>
      {({ lang, isRtl }) => (
        
        <div className="min-h-screen bg-slate-50">
          <Seo
    title={
        isRtl
            ? 'موزعو كونان تولز | اعثر على أقرب موزع في مصر'
            : 'Conan Tools Distributors | Find a Distributor Near You'
    }
    description={
        isRtl
            ? 'اعثر على أقرب موزع لمنتجات كونان تولز في مصر. تواصل مع الموزعين المعتمدين للحصول على الأدوات الاحترافية والمعدات الصناعية عالية الجودة.'
            : 'Find the nearest Conan Tools distributor in Egypt. Contact authorized distributors for professional tools and high-quality industrial equipment.'
    }
        keywords={isRtl
        ? 'كونان تولز, الموزعين, أدوات, مصر, أدوات كهربائية, أدوات يدوية'
        : 'Conan Tools, distributors, tools, Egypt, power tools, hand tools'}
    image="/logo.png"
/>
          {/* HERO SECTION */}
          <section className="relative pt-24 pb-20 px-[5%] bg-slate-900 text-white overflow-hidden">
            <div className="absolute inset-0 opacity-10 pointer-events-none">
              <div className="absolute top-10 left-10 text-6xl rotate-12">🔧</div>
              <div className="absolute bottom-10 right-10 text-6xl -rotate-12">⚙️</div>
            </div>

            <div className="max-w-4xl mx-auto text-center relative z-10">
              <motion.h1
                variants={fadeUp}
                initial="hidden"
                animate="show"
                className="text-4xl md:text-6xl font-black mb-6"
              >
                {isRtl ? 'ابحث عن أقرب موزع' : 'Find Nearest Distributor'}
              </motion.h1>
              
              <motion.button
                whileHover={{ scale: 1.05 }}
                whileTap={{ scale: 0.95 }}
                onClick={findNearest}
                disabled={isLocating}
                className="flex items-center gap-3 mx-auto px-8 py-4 rounded-xl font-bold text-slate-900 transition-all shadow-xl disabled:opacity-50"
                style={{ background: '#FF9E1A' }}
              >
                {isLocating ? (
                  <div className="w-5 h-5 border-2 border-slate-900 border-t-transparent rounded-full animate-spin" />
                ) : <FaCompass />}
                {isLocating ? (isRtl ? 'جاري البحث...' : 'Locating...') : (isRtl ? 'تحديد أقرب موزع' : 'Locate Nearest Distributor')}
              </motion.button>
            </div>
          </section>

          {/* LIST SECTION */}
          <section className="py-20 px-5 md:px-10 max-w-7xl mx-auto">
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[600px]">
              <AnimatePresence mode="popLayout">
                {isLocating ? (
                  [1, 2, 3].map((n) => <CardSkeleton key={`skel-${n}`} />)
                ) : (
                  list.map((d, idx) => {
                    const name = lang === 'ar' && d.ar_name ? d.ar_name : d.name;
                    const address = lang === 'ar' && d.ar_address ? d.ar_address : d.address;
                    const isNearest = idx === 0 && d.distance !== undefined;

                    return (
                      <motion.div
                        key={d.id}
                        layout
                        variants={fadeUp}
                        initial="hidden"
                        animate="show"
                        className={`bg-white border-2 ${isNearest ? 'border-[#FF9E1A]' : 'border-transparent'} rounded-2xl shadow-sm hover:shadow-xl transition-all flex flex-col overflow-hidden`}
                      >
                        {/* Logo Area */}
                        <div className="bg-gray-100 flex items-center justify-center h-48 p-6 relative">
                          {isNearest && (
                            <span className="absolute top-4 right-4 bg-[#FF9E1A] text-slate-900 text-[10px] font-black px-2 py-1 rounded">
                              {isRtl ? 'الأقرب' : 'NEAREST'}
                            </span>
                          )}
                          {d.logo ? (
                            <img src={d.logo} alt={name} className="object-contain max-h-full" />
                          ) : (
                            <FaMapMarkerAlt className="text-gray-300 text-5xl" />
                          )}
                        </div>

                        {/* Info Area */}
                        <div className="p-6 flex-1 flex flex-col">
                          <h3 className="font-bold text-xl mb-1">{name}</h3>
                          <p className="text-slate-500 text-sm mb-4 min-h-[40px] leading-relaxed">
                            {address || (isRtl ? 'العنوان غير متوفر' : 'No address provided')}
                          </p>

                          {d.distance !== undefined && (
                            <div className="text-[#FF9E1A] font-bold text-sm mb-6 flex items-center gap-2">
                              <div className="w-2 h-2 rounded-full bg-[#FF9E1A] animate-pulse" />
                              {d.distance.toFixed(1)} km {isRtl ? 'بعيد عنك' : 'away'}
                            </div>
                          )}

                          {/* Interactive Contact List */}
                          <div className="mt-auto space-y-3">
                            {d.phones && d.phones.length > 0 ? (
                              d.phones.map((p) => (
                                <div key={p.id} className="bg-slate-50 border border-slate-100 rounded-xl p-3 items-center">
                                  <div className="text-slate-900 font-mono font-bold text-center mb-3 text-lg tracking-wider">
                                    {p.phone}
                                  </div>
                                  <div className="grid grid-cols-2 gap-2">
                                    <a
                                      href={`tel:${p.phone.replace(/\D/g, '')}`}
                                      className="flex items-center justify-center gap-2 bg-white border border-slate-200 hover:bg-slate-900 hover:text-white py-2 rounded-lg text-xs font-bold transition-all shadow-sm"
                                    >
                                      <FaPhoneAlt size={10} /> {isRtl ? 'اتصال' : 'Call'}
                                    </a>
                                    <a
                                      href={`https://wa.me/${p.phone.replace(/\D/g, '')}`}
                                      target="_blank"
                                      className="flex items-center justify-center gap-2 bg-white border border-slate-200 hover:border-[#25D366] hover:text-[#25D366] py-2 rounded-lg text-xs font-bold transition-all shadow-sm"
                                    >
                                      <FaWhatsapp size={12} /> WhatsApp
                                    </a>
                                  </div>
                                </div>
                              ))
                            ) : (
                              <div className="text-center py-4 text-slate-300 text-xs italic border-2 border-dashed border-slate-100 rounded-xl">
                                {isRtl ? 'لا يوجد أرقام' : 'No contact numbers'}
                              </div>
                            )}

                            {d.google_maps_link && (
                              <a
                                href={d.google_maps_link}
                                target="_blank"
                                className="mt-4 flex items-center justify-center gap-2 w-full text-slate-400 hover:text-slate-900 text-[10px] uppercase font-black tracking-widest pt-4 transition-colors"
                              >
                                <FaMapMarkerAlt /> {isRtl ? 'خرائط جوجل' : 'Google Maps'}
                              </a>
                            )}
                          </div>
                        </div>
                      </motion.div>
                    );
                  })
                )}
              </AnimatePresence>
            </div>
          </section>
        </div>
      )}
    </MainLayout>
  );
}