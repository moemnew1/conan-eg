<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group4ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            // 1. Gasoline Generator (COGE28 – 3000W)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片61-2.png',
                'variants' => [
                    ['code' => 'COGE28', 'name' => 'COGE28 – 220-240V / 50Hz / Max 3000W / Rated 2800W / 210cc / 15.0L Tank', 'ar_name' => 'COGE28 – 220-240 فولت / 50 هرتز / أقصى قدرة 3000 وات / قدرة مقننة 2800 وات / 210 سي سي / خزان 15 لتر'],
                ],
            ],

            // 2. Gasoline Generator (COGE20 – 2200W)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片61-2.png',
                'variants' => [
                    ['code' => 'COGE20', 'name' => 'COGE20 – 220-240V / 50Hz / Max 2200W / Rated 2000W / 163cc / 15L Tank', 'ar_name' => 'COGE20 – 220-240 فولت / 50 هرتز / أقصى قدرة 2200 وات / قدرة مقننة 2000 وات / 163 سي سي / خزان 15 لتر'],
                ],
            ],

            // 3. Gasoline Generator (COGE08 – 1000W)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片61-2.png',
                'variants' => [
                    ['code' => 'COGE08', 'name' => 'COGE08 – 220-240V / 50Hz / Max 1000W / Rated 800W / 80cc / 6.0L Tank', 'ar_name' => 'COGE08 – 220-240 فولت / 50 هرتز / أقصى قدرة 1000 وات / قدرة مقننة 800 وات / 80 سي سي / خزان 6 لتر'],
                ],
            ],

            // 4. Air Compressor (Large – COAC10 100L / COAC15 150L)
            [
                'name'     => 'Air Compressor',
                'ar_name'  => 'ضاغط هواء',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片51-2.png',
                'variants' => [
                    ['code' => 'COAC10', 'name' => 'COAC10 – Belt Drive / 220-240V / 2200W (3HP) / 100L Tank / Max 0.8Mpa', 'ar_name' => 'COAC10 – نظام حزام / 220-240 فولت / 2200 وات (3 حصان) / خزان 100 لتر / أقصى ضغط 0.8 ميجاباسكال'],
                    ['code' => 'COAC15', 'name' => 'COAC15 – Belt Drive / 220-240V / 3000W (4HP) / 150L Tank / Max 0.8Mpa', 'ar_name' => 'COAC15 – نظام حزام / 220-240 فولت / 3000 وات (4 حصان) / خزان 150 لتر / أقصى ضغط 0.8 ميجاباسكال'],
                ],
            ],

            // 5. Air Compressor (Small – 50L)
            [
                'name'     => 'Air Compressor',
                'ar_name'  => 'ضاغط هواء',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片41-1.png',
                'variants' => [
                    ['code' => 'COAC05', 'name' => 'COAC05 – Belt Drive / 220-240V / 750W (1HP) / 50L Tank / Max 0.8Mpa', 'ar_name' => 'COAC05 – نظام حزام / 220-240 فولت / 750 وات (1 حصان) / خزان 50 لتر / أقصى ضغط 0.8 ميجاباسكال'],
                ],
            ],

            // 6. Jig Saw
            [
                'name'     => 'Jig Saw',
                'ar_name'  => 'منشار ترددي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片31-2.png',
                'variants' => [
                    ['code' => 'COJS55', 'name' => 'COJS55 – 220-240V / 400W / 0-3000rpm / Wood 55mm / Steel 6mm', 'ar_name' => 'COJS55 – 220-240 فولت / 400 وات / 0-3000 دورة/دقيقة / خشب 55 ملم / فولاذ 6 ملم'],
                ],
            ],

            // 7. Sander
            [
                'name'     => 'Sander',
                'ar_name'  => 'مكنة صنفرة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片21-2.png',
                'variants' => [
                    ['code' => 'CORS125', 'name' => 'CORS125 – 220-240V / 300W / 7000-13000rpm / 125mm Pad / Self-vacuum', 'ar_name' => 'CORS125 – 220-240 فولت / 300 وات / 7000-13000 دورة/دقيقة / قرص 125 ملم / شفط ذاتي'],
                ],
            ],

            // 8. Circular Saw
            [
                'name'     => 'Circular Saw',
                'ar_name'  => 'منشار دائري',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片11-2.png',
                'variants' => [
                    ['code' => 'COCS185', 'name' => 'COCS185 – 220-240V / 1300W / 4800rpm / Blade 185mm', 'ar_name' => 'COCS185 – 220-240 فولت / 1300 وات / 4800 دورة/دقيقة / قرص 185 ملم'],
                ],
            ],

            // 9. High Pressure Washer (130 Bar)
            [
                'name'     => 'High Pressure Washer',
                'ar_name'  => 'غسالة ضغط عالي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片31-1.png',
                'variants' => [
                    ['code' => 'COHW12L', 'name' => 'COHW12L – 220-240V / 1400W / Max 130Bar / 6.2L/min / Auto Stop', 'ar_name' => 'COHW12L – 220-240 فولت / 1400 وات / أقصى ضغط 130 بار / 6.2 لتر/دقيقة / إيقاف تلقائي'],
                ],
            ],

            // 10. High Pressure Washer (100 Bar)
            [
                'name'     => 'High Pressure Washer',
                'ar_name'  => 'غسالة ضغط عالي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片21-1.png',
                'variants' => [
                    ['code' => 'COHW10S', 'name' => 'COHW10S – 220-240V / 1200W / Max 100Bar / 6.2L/min / Auto Stop', 'ar_name' => 'COHW10S – 220-240 فولت / 1200 وات / أقصى ضغط 100 بار / 6.2 لتر/دقيقة / إيقاف تلقائي'],
                ],
            ],

            // 11. Digital Multimeter (6000 Counts)
            [
                'name'     => 'Digital Multimeter',
                'ar_name'  => 'مولتيميتر رقمي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片11-1.png',
                'variants' => [
                    ['code' => 'CODM06', 'name' => 'CODM06 – 6000 Counts LCD Display / With 9V 6F22 Battery', 'ar_name' => 'CODM06 – شاشة LCD 6000 عدادات / مع بطارية 9 فولت 6F22'],
                ],
            ],

            // 12. Digital Multimeter (standard)
            [
                'name'     => 'Digital Multimeter',
                'ar_name'  => 'مولتيميتر رقمي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片191-1.png',
                'variants' => [
                    ['code' => 'CODM03', 'name' => 'CODM03 – Digital Multimeter / LCD Display', 'ar_name' => 'CODM03 – مولتيميتر رقمي / شاشة LCD'],
                ],
            ],

            // 13. Lithium-ion Suction Cup
            [
                'name'     => 'Lithium-ion Suction Cup',
                'ar_name'  => 'كوب شفط بالليثيوم أيون',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片181-1.png',
                'variants' => [
                    ['code' => 'COLSC21', 'name' => 'COLSC21 – 21V Lithium-ion Suction Cup', 'ar_name' => 'COLSC21 – كوب شفط 21 فولت ليثيوم أيون'],
                ],
            ],

            // 14. Gasoline Generator (large, with electric start)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片161-2.png',
                'variants' => [
                    ['code' => 'COGE50E', 'name' => 'COGE50E – 220-240V / 50Hz / Max 5500W / Electric Start', 'ar_name' => 'COGE50E – 220-240 فولت / 50 هرتز / أقصى قدرة 5500 وات / تشغيل كهربائي'],
                ],
            ],

            // 15. Gasoline Generator (large, variant 2)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片161-2.png',
                'variants' => [
                    ['code' => 'COGE50B', 'name' => 'COGE50B – 220-240V / 50Hz / Max 5000W / Electric Start', 'ar_name' => 'COGE50B – 220-240 فولت / 50 هرتز / أقصى قدرة 5000 وات / تشغيل كهربائي'],
                ],
            ],

            // 16. Gasoline Generator (large, variant 1)
            [
                'name'     => 'Gasoline Generator',
                'ar_name'  => 'مولد كهرباء بنزيني',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片161-1.png',
                'variants' => [
                    ['code' => 'COGE50A', 'name' => 'COGE50A – 220-240V / 50Hz / Max 4500W / Recoil Start', 'ar_name' => 'COGE50A – 220-240 فولت / 50 هرتز / أقصى قدرة 4500 وات / تشغيل بالسحب'],
                ],
            ],

            // 17. Gasoline Water Pump (large)
            [
                'name'     => 'Gasoline Water Pump',
                'ar_name'  => 'مضخة مياه بنزينية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Gasoline-Water-Pump-2.png',
                'variants' => [
                    ['code' => 'COGWP30', 'name' => 'COGWP30 – 3 Inch / Gasoline Water Pump', 'ar_name' => 'COGWP30 – 3 بوصة / مضخة مياه بنزينية'],
                ],
            ],

            // 18. Gasoline Water Pump (small)
            [
                'name'     => 'Gasoline Water Pump',
                'ar_name'  => 'مضخة مياه بنزينية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Gasoline-Water-Pump.png',
                'variants' => [
                    ['code' => 'COGWP20', 'name' => 'COGWP20 – 2 Inch / Gasoline Water Pump', 'ar_name' => 'COGWP20 – 2 بوصة / مضخة مياه بنزينية'],
                ],
            ],

            // 19. Inverter MMA Welding Machine (version 3)
            [
                'name'     => 'Inverter MMA Welding Machine',
                'ar_name'  => 'ماكينة لحام انفرتر MMA',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Inverter-MMA-Welding-Machine-3.png',
                'variants' => [
                    ['code' => 'COWM250', 'name' => 'COWM250 – 220V / IGBT / 250A Welding Machine', 'ar_name' => 'COWM250 – 220 فولت / IGBT / ماكينة لحام 250 أمبير'],
                ],
            ],

            // 20. Inverter MMA Welding Machine (version 2)
            [
                'name'     => 'Inverter MMA Welding Machine',
                'ar_name'  => 'ماكينة لحام انفرتر MMA',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Inverter-MMA-Welding-Machine-2.png',
                'variants' => [
                    ['code' => 'COWM200', 'name' => 'COWM200 – 220V / IGBT / 200A Welding Machine', 'ar_name' => 'COWM200 – 220 فولت / IGBT / ماكينة لحام 200 أمبير'],
                ],
            ],

            // 21. Inverter MMA Welding Machine (version 1)
            [
                'name'     => 'Inverter MMA Welding Machine',
                'ar_name'  => 'ماكينة لحام انفرتر MMA',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Inverter-MMA-Welding-Machine.png',
                'variants' => [
                    ['code' => 'COWM160', 'name' => 'COWM160 – 220V / IGBT / 160A Welding Machine', 'ar_name' => 'COWM160 – 220 فولت / IGBT / ماكينة لحام 160 أمبير'],
                ],
            ],

            // 22. 21V 12-Inch Lithium Electric Chain Saw
            [
                'name'     => '21V 12 Inch Lithium Electric Chain Saw',
                'ar_name'  => 'منشار سلسلة كهربائي ليثيوم 21 فولت 12 بوصة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片41.png',
                'variants' => [
                    ['code' => 'COLCS1221', 'name' => 'COLCS1221 – 21V / 12 Inch / Lithium Electric Chain Saw', 'ar_name' => 'COLCS1221 – 21 فولت / 12 بوصة / منشار سلسلة كهربائي ليثيوم'],
                ],
            ],

            // 23. 6-Inch Lithium Electric Chain Saw 21V
            [
                'name'     => '6 Inch Lithium Electric Chain Saw 21V',
                'ar_name'  => 'منشار سلسلة كهربائي ليثيوم 21 فولت 6 بوصة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片31.png',
                'variants' => [
                    ['code' => 'COLCS0621', 'name' => 'COLCS0621 – 21V / 6 Inch / Lithium Electric Chain Saw', 'ar_name' => 'COLCS0621 – 21 فولت / 6 بوصة / منشار سلسلة كهربائي ليثيوم'],
                ],
            ],

            // 24. Angle Grinder (version 4)
            [
                'name'     => 'Angle Grinder',
                'ar_name'  => 'جلاخة زاوية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Angle-Grinder-4.png',
                'variants' => [
                    ['code' => 'COAG230B', 'name' => 'COAG230B – 220-240V / 2600W / 230mm Angle Grinder', 'ar_name' => 'COAG230B – 220-240 فولت / 2600 وات / جلاخة زاوية 230 ملم'],
                ],
            ],

            // 25. Demolition Hammer (version 3)
            [
                'name'     => 'Demolition Hammer',
                'ar_name'  => 'مطرقة هدم',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Demolition-Hammer-3.png',
                'variants' => [
                    ['code' => 'CODH65C', 'name' => 'CODH65C – 220-240V / 1900W / 65J / HEX 28mm Demolition Hammer', 'ar_name' => 'CODH65C – 220-240 فولت / 1900 وات / 65 جول / مطرقة هدم HEX 28 ملم'],
                ],
            ],

            // 26. Demolition Hammer (version 2)
            [
                'name'     => 'Demolition Hammer',
                'ar_name'  => 'مطرقة هدم',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Demolition-Hammer-2.png',
                'variants' => [
                    ['code' => 'CODH65B', 'name' => 'CODH65B – 220-240V / 1700W / 55J / HEX 28mm Demolition Hammer', 'ar_name' => 'CODH65B – 220-240 فولت / 1700 وات / 55 جول / مطرقة هدم HEX 28 ملم'],
                ],
            ],

            // 27. Demolition Hammer (version 1)
            [
                'name'     => 'Demolition Hammer',
                'ar_name'  => 'مطرقة هدم',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Demolition-Hammer.png',
                'variants' => [
                    ['code' => 'CODH65A', 'name' => 'CODH65A – 220-240V / 1500W / 45J / SDS-HEX Demolition Hammer', 'ar_name' => 'CODH65A – 220-240 فولت / 1500 وات / 45 جول / مطرقة هدم SDS-HEX'],
                ],
            ],

            // 28. Rotary Hammer (version 3)
            [
                'name'     => 'Rotary Hammer',
                'ar_name'  => 'مطرقة حفر دوارة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Rotary-Hammer-3.png',
                'variants' => [
                    ['code' => 'CORH32C', 'name' => 'CORH32C – 220-240V / 1200W / SDS-Plus / 32mm Rotary Hammer', 'ar_name' => 'CORH32C – 220-240 فولت / 1200 وات / SDS-Plus / مطرقة حفر 32 ملم'],
                ],
            ],

            // 29. Rotary Hammer (version 2)
            [
                'name'     => 'Rotary Hammer',
                'ar_name'  => 'مطرقة حفر دوارة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Rotary-Hammer-2.png',
                'variants' => [
                    ['code' => 'CORH26B', 'name' => 'CORH26B – 220-240V / 800W / SDS-Plus / 26mm Rotary Hammer', 'ar_name' => 'CORH26B – 220-240 فولت / 800 وات / SDS-Plus / مطرقة حفر 26 ملم'],
                ],
            ],

            // 30. Impact Drill
            [
                'name'     => 'Impact Drill',
                'ar_name'  => 'مثقاب صدمي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Impact-Drill.png',
                'variants' => [
                    ['code' => 'COID13', 'name' => 'COID13 – 220-240V / 810W / 0-2800rpm / 13mm Impact Drill', 'ar_name' => 'COID13 – 220-240 فولت / 810 وات / 0-2800 دورة/دقيقة / مثقاب صدمي 13 ملم'],
                ],
            ],

            // 31. Electric Drill
            [
                'name'     => 'Electric Drill',
                'ar_name'  => 'مثقاب كهربائي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Electric-Drill.png',
                'variants' => [
                    ['code' => 'COED13', 'name' => 'COED13 – 220-240V / 650W / 0-2800rpm / 13mm Electric Drill', 'ar_name' => 'COED13 – 220-240 فولت / 650 وات / 0-2800 دورة/دقيقة / مثقاب كهربائي 13 ملم'],
                ],
            ],

            // 32. Rotary Hammer (version 1)
            [
                'name'     => 'Rotary Hammer',
                'ar_name'  => 'مطرقة حفر دوارة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Rotary-Hammer.png',
                'variants' => [
                    ['code' => 'CORH26A', 'name' => 'CORH26A – 220-240V / 750W / SDS-Plus / 26mm Rotary Hammer', 'ar_name' => 'CORH26A – 220-240 فولت / 750 وات / SDS-Plus / مطرقة حفر 26 ملم'],
                ],
            ],

            // 33. Mitre Saw
            [
                'name'     => 'Mitre Saw',
                'ar_name'  => 'منشار ميتر',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/10/Mitre-saw.jpg',
                'variants' => [
                    ['code' => 'COMS255', 'name' => 'COMS255 – 220-240V / 1800W / 255mm Mitre Saw', 'ar_name' => 'COMS255 – 220-240 فولت / 1800 وات / منشار ميتر 255 ملم'],
                ],
            ],

            // 34. Cut Off Saw
            [
                'name'     => 'Cut Off Saw',
                'ar_name'  => 'منشار قطع',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/10/COCS355.jpg',
                'variants' => [
                    ['code' => 'COCS355', 'name' => 'COCS355 – 220-240V / 2200W / 355mm Cut Off Saw', 'ar_name' => 'COCS355 – 220-240 فولت / 2200 وات / منشار قطع 355 ملم'],
                ],
            ],

            // 35. Brushless Lithium Electric Reciprocating Saw
            [
                'name'     => 'Brushless Lithium Electric Reciprocating Saw',
                'ar_name'  => 'منشار ترددي كهربائي ليثيوم بدون فرشاة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Brushless-Lithium-Electric-Reciprocating-Saw.png',
                'variants' => [
                    ['code' => 'COLRS21BL', 'name' => 'COLRS21BL – 21V / Brushless / Lithium Electric Reciprocating Saw', 'ar_name' => 'COLRS21BL – 21 فولت / بدون فرشاة / منشار ترددي كهربائي ليثيوم'],
                ],
            ],

            // 36. Lithium Electric Branch Scissors
            [
                'name'     => 'Lithium Electric Branch Scissors',
                'ar_name'  => 'مقص أفرع كهربائي ليثيوم',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lithium-Electric-Branch-Scissors.png',
                'variants' => [
                    ['code' => 'COLEBS21', 'name' => 'COLEBS21 – 21V / Lithium Electric Branch Scissors', 'ar_name' => 'COLEBS21 – 21 فولت / مقص أفرع كهربائي ليثيوم'],
                ],
            ],

            // 37. Lithium-ion Blower
            [
                'name'     => 'Lithium-ion Blower',
                'ar_name'  => 'منفاخ ليثيوم أيون',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lithium-ion-Blower.png',
                'variants' => [
                    ['code' => 'COLBL21', 'name' => 'COLBL21 – 21V / Lithium-ion Blower', 'ar_name' => 'COLBL21 – 21 فولت / منفاخ ليثيوم أيون'],
                ],
            ],

            // 38. Brushless Lithium-ion Impact Wrench
            [
                'name'     => 'Brushless Lithium-ion Impact Wrench',
                'ar_name'  => 'مفتاح صدمي ليثيوم أيون بدون فرشاة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Brushless-Lithium-ion-Impact-Wrench.png',
                'variants' => [
                    ['code' => 'COLIW21BL', 'name' => 'COLIW21BL – 21V / Brushless / Lithium-ion Impact Wrench', 'ar_name' => 'COLIW21BL – 21 فولت / بدون فرشاة / مفتاح صدمي ليثيوم أيون'],
                ],
            ],

            // 39. Brushless Lithium Electric Drill (version 2)
            [
                'name'     => 'Brushless Lithium Electric Drill',
                'ar_name'  => 'مثقاب كهربائي ليثيوم بدون فرشاة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Brushless-Lithium-Electric-Drill-2.png',
                'variants' => [
                    ['code' => 'COLBD21BLB', 'name' => 'COLBD21BLB – 21V / Brushless / Lithium Electric Drill (Heavy Duty)', 'ar_name' => 'COLBD21BLB – 21 فولت / بدون فرشاة / مثقاب كهربائي ليثيوم (ثقيل)'],
                ],
            ],

            // 40. Lithium-ion Cordless Drill (version 2)
            [
                'name'     => 'Lithium-ion Cordless Drill',
                'ar_name'  => 'مثقاب لاسلكي ليثيوم أيون',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lithium-ion-Cordless-Drill-2.png',
                'variants' => [
                    ['code' => 'COLCD21B', 'name' => 'COLCD21B – 21V / Lithium-ion Cordless Drill (10mm)', 'ar_name' => 'COLCD21B – 21 فولت / مثقاب لاسلكي ليثيوم أيون (10 ملم)'],
                ],
            ],

            // 41. Brushless Lithium-ion Angle Grinder
            [
                'name'     => 'Brushless Lithium-ion Angle Grinder',
                'ar_name'  => 'جلاخة زاوية ليثيوم أيون بدون فرشاة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Brushless-Lithium-ion-Angle-Grinder.png',
                'variants' => [
                    ['code' => 'COLAG21BL', 'name' => 'COLAG21BL – 21V / Brushless / 125mm Lithium-ion Angle Grinder', 'ar_name' => 'COLAG21BL – 21 فولت / بدون فرشاة / جلاخة زاوية ليثيوم أيون 125 ملم'],
                ],
            ],

            // 42. Electric Chain Saw
            [
                'name'     => 'Electric Chain Saw',
                'ar_name'  => 'منشار سلسلة كهربائي',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Electric-Chain-Saw.png',
                'variants' => [
                    ['code' => 'COECS405', 'name' => 'COECS405 – 220-240V / 2200W / 405mm Electric Chain Saw', 'ar_name' => 'COECS405 – 220-240 فولت / 2200 وات / منشار سلسلة كهربائي 405 ملم'],
                ],
            ],

            // 43. Lithium Electric Ratchet Wrench
            [
                'name'     => 'Lithium Electric Ratchet Wrench',
                'ar_name'  => 'مفتاح راتشيت كهربائي ليثيوم',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lithium-Electric-Ratchet-Wrench.png',
                'variants' => [
                    ['code' => 'COLERW21', 'name' => 'COLERW21 – 21V / Lithium Electric Ratchet Wrench / 3/8"', 'ar_name' => 'COLERW21 – 21 فولت / مفتاح راتشيت كهربائي ليثيوم / 3/8 بوصة'],
                ],
            ],

            // 44. Angle Grinder (version 3)
            [
                'name'     => 'Angle Grinder',
                'ar_name'  => 'جلاخة زاوية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Angle-Grinder-3.png',
                'variants' => [
                    ['code' => 'COAG180C', 'name' => 'COAG180C – 220-240V / 2000W / 180mm Angle Grinder', 'ar_name' => 'COAG180C – 220-240 فولت / 2000 وات / جلاخة زاوية 180 ملم'],
                ],
            ],

            // 45. Angle Grinder (version 2)
            [
                'name'     => 'Angle Grinder',
                'ar_name'  => 'جلاخة زاوية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Angle-Grinder-2.png',
                'variants' => [
                    ['code' => 'COAG125B', 'name' => 'COAG125B – 220-240V / 900W / 125mm Angle Grinder', 'ar_name' => 'COAG125B – 220-240 فولت / 900 وات / جلاخة زاوية 125 ملم'],
                ],
            ],

            // 46. Angle Grinder (version 1)
            [
                'name'     => 'Angle Grinder',
                'ar_name'  => 'جلاخة زاوية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Angle-Grinder.png',
                'variants' => [
                    ['code' => 'COAG115A', 'name' => 'COAG115A – 220-240V / 710W / 115mm Angle Grinder', 'ar_name' => 'COAG115A – 220-240 فولت / 710 وات / جلاخة زاوية 115 ملم'],
                ],
            ],

            // 47. Peripheral Pump / Water Pump
            [
                'name'     => 'Peripheral Pump',
                'ar_name'  => 'مضخة مياه طرفية',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Peripheral-Pump.png',
                'variants' => [
                    ['code' => 'COPP370', 'name' => 'COPP370 – 220-240V / 370W / Peripheral Pump / Max Head 40m', 'ar_name' => 'COPP370 – 220-240 فولت / 370 وات / مضخة طرفية / رأس أقصى 40 م'],
                    ['code' => 'COPP550', 'name' => 'COPP550 – 220-240V / 550W / Peripheral Pump / Max Head 50m', 'ar_name' => 'COPP550 – 220-240 فولت / 550 وات / مضخة طرفية / رأس أقصى 50 م'],
                    ['code' => 'COPP750', 'name' => 'COPP750 – 220-240V / 750W / Peripheral Pump / Max Head 60m', 'ar_name' => 'COPP750 – 220-240 فولت / 750 وات / مضخة طرفية / رأس أقصى 60 م'],
                ],
            ],

            // 48. Submersible Sewage Pump
            [
                'name'     => 'Submersible Sewage Pump',
                'ar_name'  => 'مضخة صرف صحي غاطسة',
                'group_id' => 4,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Submersible-Sewage-Pump.png',
                'variants' => [
                    ['code' => 'COSP750', 'name' => 'COSP750 – 220-240V / 750W / Submersible Sewage Pump', 'ar_name' => 'COSP750 – 220-240 فولت / 750 وات / مضخة صرف صحي غاطسة'],
                    ['code' => 'COSP1100', 'name' => 'COSP1100 – 220-240V / 1100W / Submersible Sewage Pump', 'ar_name' => 'COSP1100 – 220-240 فولت / 1100 وات / مضخة صرف صحي غاطسة'],
                ],
            ],

        ];

        foreach ($products as $productData) {

            $product = Product::create([
                'name'     => $productData['name'],
                'ar_name'  => $productData['ar_name'],
                'group_id' => $productData['group_id'],
            ]);

            $imagePath = null;

            if (!empty($productData['image'])) {
                try {
                    $response = Http::get($productData['image']);

                    if ($response->successful()) {
                        $extension = pathinfo(parse_url($productData['image'], PHP_URL_PATH), PATHINFO_EXTENSION);
                        if (!$extension) {
                            $extension = 'jpg';
                        }

                        $filename = Str::slug($product->name) . '-' . uniqid() . '.' . $extension;
                        $path = "products/{$filename}";

                        Storage::disk('public')->put($path, $response->body());
                        $imagePath = $path;
                    }

                } catch (\Exception $e) {
                    // Failed to download image, leave $imagePath as null
                }
            }

            if (!$imagePath) {
                $imagePath = 'products/default.png';
            }

            ProductImage::create([
                'product_id' => $product->id,
                'image'      => $imagePath,
            ]);

            foreach ($productData['variants'] as $variant) {
                ProductVariant::create([
                    'product_id'     => $product->id,
                    'code'           => $variant['code'],
                    'description'    => $variant['name'],
                    'ar_description' => $variant['ar_name'],
                ]);
            }
        }
    }
}