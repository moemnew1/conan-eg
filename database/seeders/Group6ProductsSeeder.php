<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group6ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Chisel
            [
                'name'     => 'Chisel',
                'ar_name'  => 'إزميل',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Chisel.png',
                'variants' => [
                    ['code' => 'COCH1616', 'name' => 'Concrete Chisel – 16×250mm', 'ar_name' => 'إزميل خرسانة – 16×250 ملم'],
                    ['code' => 'COCH1618', 'name' => 'Concrete Chisel – 18×300mm', 'ar_name' => 'إزميل خرسانة – 18×300 ملم'],
                    ['code' => 'COCCH16',  'name' => 'Cold Chisel – 16×250mm',     'ar_name' => 'إزميل بارد – 16×250 ملم'],
                    ['code' => 'COCCH18',  'name' => 'Cold Chisel – 18×300mm',     'ar_name' => 'إزميل بارد – 18×300 ملم'],
                ],
            ],

            // 2. Wood Chisel 4 PCS
            [
                'name'     => 'Wood Chisel 4 PCS',
                'ar_name'  => 'إزميل خشب 4 قطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Wood-Chisel-4-PCS.png',
                'variants' => [
                    ['code' => 'COC0401', 'name' => 'COC0401 – 6mm / 12mm / 18mm / 25mm', 'ar_name' => 'COC0401 – 6 / 12 / 18 / 25 ملم'],
                ],
            ],

            // 3. Wood Chisel
            [
                'name'     => 'Wood Chisel',
                'ar_name'  => 'إزميل خشب',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Wood-Chisel.png',
                'variants' => [
                    ['code' => 'COWC06',  'name' => '6mm',  'ar_name' => '6 ملم'],
                    ['code' => 'COWC08',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'COWC10',  'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'COWC12',  'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'COWC14',  'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'COWC16',  'name' => '16mm', 'ar_name' => '16 ملم'],
                    ['code' => 'COWC20',  'name' => '20mm', 'ar_name' => '20 ملم'],
                    ['code' => 'COWC22',  'name' => '22mm', 'ar_name' => '22 ملم'],
                    ['code' => 'COWC25',  'name' => '25mm', 'ar_name' => '25 ملم'],
                    ['code' => 'COWC32',  'name' => '32mm', 'ar_name' => '32 ملم'],
                    ['code' => 'COWC38',  'name' => '38mm', 'ar_name' => '38 ملم'],
                ],
            ],

            // 4. Cable Cutter (cable-cutter-2)
            [
                'name'     => 'Cable Cutter',
                'ar_name'  => 'قاطعة كابل',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cable-Cutter-1.png',
                'variants' => [
                    ['code' => 'COBC18', 'name' => 'COBC18 – 18 Inch', 'ar_name' => 'COBC18 – 18 بوصة'],
                    ['code' => 'COBC24', 'name' => 'COBC24 – 24 Inch', 'ar_name' => 'COBC24 – 24 بوصة'],
                    ['code' => 'COBC36', 'name' => 'COBC36 – 36 Inch', 'ar_name' => 'COBC36 – 36 بوصة'],
                ],
            ],

            // 5. Mini Bolt Cutter
            [
                'name'     => 'Mini Bolt Cutter',
                'ar_name'  => 'قاطعة براغي صغيرة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Mini-Bolt-Cutter.png',
                'variants' => [
                    ['code' => 'COMB08010', 'name' => 'COMB08010 – 8 Inch', 'ar_name' => 'COMB08010 – 8 بوصة'],
                ],
            ],

            // 6. Bolt Cutter (bolt-cutter-2)
            [
                'name'     => 'Bolt Cutter',
                'ar_name'  => 'قاطعة براغي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bolt-Cutter-2.png',
                'variants' => [
                    ['code' => 'COBC214', 'name' => '14 Inch', 'ar_name' => '14 بوصة'],
                    ['code' => 'COBC218', 'name' => '18 Inch', 'ar_name' => '18 بوصة'],
                    ['code' => 'COBC224', 'name' => '24 Inch', 'ar_name' => '24 بوصة'],
                    ['code' => 'COBC230', 'name' => '30 Inch', 'ar_name' => '30 بوصة'],
                    ['code' => 'COBC236', 'name' => '36 Inch', 'ar_name' => '36 بوصة'],
                    ['code' => 'COBC242', 'name' => '42 Inch', 'ar_name' => '42 بوصة'],
                    ['code' => 'COBC248', 'name' => '48 Inch', 'ar_name' => '48 بوصة'],
                ],
            ],

            // 7. Bolt Cutter (bolt-cutter)
            [
                'name'     => 'Bolt Cutter',
                'ar_name'  => 'قاطعة براغي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bolt-Cutters.png',
                'variants' => [
                    ['code' => 'COB0830', 'name' => 'COB0830 – 30 Inch', 'ar_name' => 'COB0830 – 30 بوصة'],
                ],
            ],

            // 8. White Rubber Hammer
            [
                'name'     => 'White Rubber Hammer',
                'ar_name'  => 'مطرقة مطاطية بيضاء',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/White-Rubber-Hammer-White.png',
                'variants' => [
                    ['code' => 'COHW016', 'name' => 'COHW016 – 16OZ', 'ar_name' => 'COHW016 – 16 أونصة'],
                    ['code' => 'COHW024', 'name' => 'COHW024 – 24OZ', 'ar_name' => 'COHW024 – 24 أونصة'],
                ],
            ],

            // 9. Black Rubber Hammer
            [
                'name'     => 'Black Rubber Hammer',
                'ar_name'  => 'مطرقة مطاطية سوداء',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Black-Rubber-Hammer.png',
                'variants' => [
                    ['code' => 'COHB016', 'name' => 'COHB016 – 16OZ', 'ar_name' => 'COHB016 – 16 أونصة'],
                    ['code' => 'COHB024', 'name' => 'COHB024 – 24OZ', 'ar_name' => 'COHB024 – 24 أونصة'],
                ],
            ],

            // 10. Axe (axe-3)
            [
                'name'     => 'Axe',
                'ar_name'  => 'فأس',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Axe-3.png',
                'variants' => [
                    ['code' => 'COX727', 'name' => 'COX727 – 2700g', 'ar_name' => 'COX727 – 2700 جرام'],
                    ['code' => 'COX735', 'name' => 'COX735 – 3500g', 'ar_name' => 'COX735 – 3500 جرام'],
                ],
            ],

            // 11. Axe (axe-2)
            [
                'name'     => 'Axe',
                'ar_name'  => 'فأس',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Axe-2.png',
                'variants' => [
                    ['code' => 'COX5200', 'name' => 'COX5200 – 2000g', 'ar_name' => 'COX5200 – 2000 جرام'],
                ],
            ],

            // 12. Axe (axe)
            [
                'name'     => 'Axe',
                'ar_name'  => 'فأس',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Axe1.png',
                'variants' => [
                    ['code' => 'COAX080500', 'name' => 'COAX080500 – 500g', 'ar_name' => 'COAX080500 – 500 جرام'],
                    ['code' => 'COAX080600', 'name' => 'COAX080600 – 600g', 'ar_name' => 'COAX080600 – 600 جرام'],
                ],
            ],

            // 13. Sledge Hammer
            [
                'name'     => 'Sledge Hammer',
                'ar_name'  => 'مطرقة ثقيلة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Sledge-Hammer.png',
                'variants' => [
                    ['code' => 'COH8102', 'name' => 'COH8102 – 2LB', 'ar_name' => 'COH8102 – 2 رطل'],
                    ['code' => 'COH8103', 'name' => 'COH8103 – 3LB', 'ar_name' => 'COH8103 – 3 رطل'],
                    ['code' => 'COH8104', 'name' => 'COH8104 – 4LB', 'ar_name' => 'COH8104 – 4 رطل'],
                ],
            ],

            // 14. Stone Hammer
            [
                'name'     => 'Stone Hammer',
                'ar_name'  => 'مطرقة حجر',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Stone-Hammer.png',
                'variants' => [
                    ['code' => 'COH821000', 'name' => 'COH821000 – 1000g', 'ar_name' => 'COH821000 – 1000 جرام'],
                    ['code' => 'COH821500', 'name' => 'COH821500 – 1500g', 'ar_name' => 'COH821500 – 1500 جرام'],
                    ['code' => 'COH822000', 'name' => 'COH822000 – 2000g', 'ar_name' => 'COH822000 – 2000 جرام'],
                ],
            ],

            // 15. Machinist Hammer
            [
                'name'     => 'Machinist Hammer',
                'ar_name'  => 'مطرقة ميكانيكي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Machinist-Hammer.png',
                'variants' => [
                    ['code' => 'COH080300', 'name' => 'COH080300 – 300g',  'ar_name' => 'COH080300 – 300 جرام'],
                    ['code' => 'COH080500', 'name' => 'COH080500 – 500g',  'ar_name' => 'COH080500 – 500 جرام'],
                    ['code' => 'COH081000', 'name' => 'COH081000 – 1000g', 'ar_name' => 'COH081000 – 1000 جرام'],
                    ['code' => 'COH081500', 'name' => 'COH081500 – 1500g', 'ar_name' => 'COH081500 – 1500 جرام'],
                    ['code' => 'COH082000', 'name' => 'COH082000 – 2000g', 'ar_name' => 'COH082000 – 2000 جرام'],
                ],
            ],

            // 16. American Type Claw Hammer 16OZ
            [
                'name'     => 'American Type Claw Hammer 16OZ',
                'ar_name'  => 'مطرقة مخلب أمريكية 16 أونصة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/American-Type-Claw-Hammer-16OZ.png',
                'variants' => [
                    ['code' => 'COH0816A', 'name' => 'COH0816A – 450g', 'ar_name' => 'COH0816A – 450 جرام'],
                ],
            ],

            // 17. French Type Claw Hammer
            [
                'name'     => 'French Type Claw Hammer',
                'ar_name'  => 'مطرقة مخلب فرنسية',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/French-Type-Claw-Hammer.png',
                'variants' => [
                    ['code' => 'COH8700', 'name' => 'COH8700 – 700g', 'ar_name' => 'COH8700 – 700 جرام'],
                ],
            ],

            // 18. Pipe Cutter (pipe-cutter-3)
            [
                'name'     => 'Pipe Cutter',
                'ar_name'  => 'قاطعة أنابيب',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pipe-Cutter-3.png',
                'variants' => [
                    ['code' => 'COPC08422', 'name' => 'COPC08422 – 42mm', 'ar_name' => 'COPC08422 – 42 ملم'],
                ],
            ],

            // 19. Pipe Cutter (pipe-cutter-2)
            [
                'name'     => 'Pipe Cutter',
                'ar_name'  => 'قاطعة أنابيب',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pipe-Cutter-2.png',
                'variants' => [
                    ['code' => 'COPC08421', 'name' => 'COPC08421 – 42mm', 'ar_name' => 'COPC08421 – 42 ملم'],
                ],
            ],

            // 20. Pipe Cutter (pipe-cutter)
            [
                'name'     => 'Pipe Cutter',
                'ar_name'  => 'قاطعة أنابيب',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pipe-Cutter-1.png',
                'variants' => [
                    ['code' => 'COPC08301', 'name' => 'COPC08301 – 30mm', 'ar_name' => 'COPC08301 – 30 ملم'],
                ],
            ],

            // 21. Pipe Cutter (Automatic open)
            [
                'name'     => 'Pipe Cutter (Automatic open)',
                'ar_name'  => 'قاطعة أنابيب (فتح تلقائي)',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pipe-Cutter.png',
                'variants' => [
                    ['code' => 'COPC842', 'name' => 'COPC842 – 42mm', 'ar_name' => 'COPC842 – 42 ملم'],
                    ['code' => 'COPC864', 'name' => 'COPC864 – 64mm', 'ar_name' => 'COPC864 – 64 ملم'],
                ],
            ],

            // 22. Pipe Cutter 32mm (Automatic open)
            [
                'name'     => 'Pipe Cutter 32mm (Automatic open)',
                'ar_name'  => 'قاطعة أنابيب 32 ملم (فتح تلقائي)',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pipe-Cutter-32mm（Automatic-open）-1.png',
                'variants' => [
                    ['code' => 'COPC832', 'name' => 'COPC832 – 32mm', 'ar_name' => 'COPC832 – 32 ملم'],
                ],
            ],

            // 23. Cutter Knife (cutter-knife-4)
            [
                'name'     => 'Cutter Knife',
                'ar_name'  => 'سكين قاطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-4.png',
                'variants' => [
                    ['code' => 'COCK1209', 'name' => 'COCK1209 – With 3pcs replacement blades', 'ar_name' => 'COCK1209 – مع 3 شفرات استبدال'],
                ],
            ],

            // 24. Cutter Knife (cutter-knife-3)
            [
                'name'     => 'Cutter Knife',
                'ar_name'  => 'سكين قاطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-3.png',
                'variants' => [
                    ['code' => 'COCK08028', 'name' => 'COCK08028 – With 5pcs replacement blades', 'ar_name' => 'COCK08028 – مع 5 شفرات استبدال'],
                ],
            ],

            // 25. Cutter Knife (cutter-knife-2)
            [
                'name'     => 'Cutter Knife',
                'ar_name'  => 'سكين قاطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-2.png',
                'variants' => [
                    ['code' => 'COCK08019', 'name' => 'COCK08019', 'ar_name' => 'COCK08019'],
                ],
            ],

            // 26. Cutter Knife (cutter-knife)
            [
                'name'     => 'Cutter Knife',
                'ar_name'  => 'سكين قاطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-1.png',
                'variants' => [
                    ['code' => 'COCK1506', 'name' => 'COCK1506', 'ar_name' => 'COCK1506'],
                ],
            ],

            // 27. Scrape Cutter
            [
                'name'     => 'Scrape Cutter',
                'ar_name'  => 'مكشطة قاطعة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Scrape-Cutter.png',
                'variants' => [
                    ['code' => 'COSC0861', 'name' => 'COSC0861 – With 10pcs replacement blades', 'ar_name' => 'COSC0861 – مع 10 شفرات استبدال'],
                ],
            ],

            // 28. Cutter Knife 12 Pcs
            [
                'name'     => 'Cutter Knife 12 Pcs',
                'ar_name'  => 'سكين قاطع 12 قطعة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-12-Pcs.png',
                'variants' => [
                    ['code' => 'COS1779', 'name' => 'COS1779 – With 5pcs 18mm + 5pcs 9mm replacement blades', 'ar_name' => 'COS1779 – مع 5 شفرات 18 ملم + 5 شفرات 9 ملم'],
                ],
            ],

            // 29. Cutter Knife 6 Pcs with 5pcs replacement blades
            [
                'name'     => 'Cutter Knife 6 Pcs',
                'ar_name'  => 'سكين قاطع 6 قطع',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife-6-Pcs-With-5pcs-replacement-blades.png',
                'variants' => [
                    ['code' => 'COS1786', 'name' => 'COS1786 – With 5pcs replacement blades', 'ar_name' => 'COS1786 – مع 5 شفرات استبدال'],
                ],
            ],

            // 30. Cutter Knife 24pcs
            [
                'name'     => 'Cutter Knife 24pcs',
                'ar_name'  => 'سكين قاطع 24 قطعة',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cutter-Knife.png',
                'variants' => [
                    ['code' => 'COCK08118', 'name' => 'COCK08118 – 18×100mm 24pcs', 'ar_name' => 'COCK08118 – 18×100 ملم 24 قطعة'],
                ],
            ],

            // 31. Saw Frame
            [
                'name'     => 'Saw Frame',
                'ar_name'  => 'إطار منشار',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Saw-Frame.png',
                'variants' => [
                    ['code' => 'COSF08121', 'name' => 'COSF08121 – 8-12 Inch', 'ar_name' => 'COSF08121 – 8-12 بوصة'],
                ],
            ],

            // 32. Hacksaw Frame
            [
                'name'     => 'Hacksaw Frame',
                'ar_name'  => 'إطار منشار حديد',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Hacksaw-Frame.png',
                'variants' => [
                    ['code' => 'COSF811', 'name' => 'COSF811 – 12 Inch / 300mm', 'ar_name' => 'COSF811 – 12 بوصة / 300 ملم'],
                ],
            ],

            // 33. Hand Saw (hand-saw-2)
            [
                'name'     => 'Hand Saw',
                'ar_name'  => 'منشار يدوي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Hand-Saw-2.png',
                'variants' => [
                    ['code' => 'COHS08162', 'name' => 'COHS08162 – 16 Inch 400mm', 'ar_name' => 'COHS08162 – 16 بوصة 400 ملم'],
                    ['code' => 'COHS08182', 'name' => 'COHS08182 – 18 Inch 450mm', 'ar_name' => 'COHS08182 – 18 بوصة 450 ملم'],
                ],
            ],

            // 34. Hand Saw (hand-saw)
            [
                'name'     => 'Hand Saw',
                'ar_name'  => 'منشار يدوي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Hand-Saw.png',
                'variants' => [
                    ['code' => 'COHS08161', 'name' => 'COHS08161 – 16 Inch 400mm', 'ar_name' => 'COHS08161 – 16 بوصة 400 ملم'],
                    ['code' => 'COHS08181', 'name' => 'COHS08181 – 18 Inch 450mm', 'ar_name' => 'COHS08181 – 18 بوصة 450 ملم'],
                ],
            ],

            // 35. Pruning Saw (pruning-saw-2)
            [
                'name'     => 'Pruning Saw',
                'ar_name'  => 'منشار تقليم',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pruning-Saw-2.png',
                'variants' => [
                    ['code' => 'COPS08350', 'name' => 'COPS08350 – 350mm', 'ar_name' => 'COPS08350 – 350 ملم'],
                ],
            ],

            // 36. Pruning Saw (pruning-saw)
            [
                'name'     => 'Pruning Saw',
                'ar_name'  => 'منشار تقليم',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Pruning-Saw.png',
                'variants' => [
                    ['code' => 'COPS8270', 'name' => 'COPS8270 – 270mm', 'ar_name' => 'COPS8270 – 270 ملم'],
                ],
            ],

            // 37. SK-5 Steel Backsaw With Plastic Mitre box
            [
                'name'     => 'SK-5 Steel Backsaw With Plastic Mitre box',
                'ar_name'  => 'منشار ظهري فولاذي SK-5 مع صندوق ميتر بلاستيكي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/SK-5-Steel-Backsaw-With-Plastic-Mitre-box.png',
                'variants' => [
                    ['code' => 'COHS812', 'name' => 'COHS812 – 12 Inch 300mm', 'ar_name' => 'COHS812 – 12 بوصة 300 ملم'],
                ],
            ],

            // 38. Folding Saw
            [
                'name'     => 'Folding Saw',
                'ar_name'  => 'منشار قابل للطي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Folding-Saw.png',
                'variants' => [
                    ['code' => 'COFS08210', 'name' => 'COFS08210 – 210mm', 'ar_name' => 'COFS08210 – 210 ملم'],
                ],
            ],


            // 42. Cable Cutter (cable-cutter — small)
            [
                'name'     => 'Cable Cutter',
                'ar_name'  => 'قاطعة كابل',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Cable-Cutter.png',
                'variants' => [
                    ['code' => 'COH6106', 'name' => 'COH6106 – 6 Inch 160mm', 'ar_name' => 'COH6106 – 6 بوصة 160 ملم'],
                    ['code' => 'COH6108', 'name' => 'COH6108 – 8 Inch 200mm', 'ar_name' => 'COH6108 – 8 بوصة 200 ملم'],
                ],
            ],

            // 43. Aviation Snip
            [
                'name'     => 'Aviation Snip',
                'ar_name'  => 'مقص طيران',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Aviation-Snip.png',
                'variants' => [
                    ['code' => 'COT6110S', 'name' => 'COT6110S – 10 Inch (Straight)', 'ar_name' => 'COT6110S – 10 بوصة (مستقيم)'],
                    ['code' => 'COT6110L', 'name' => 'COT6110L – 10 Inch (Left)',     'ar_name' => 'COT6110L – 10 بوصة (يسار)'],
                    ['code' => 'COT6110R', 'name' => 'COT6110R – 10 Inch (Right)',    'ar_name' => 'COT6110R – 10 بوصة (يمين)'],
                ],
            ],

            // 44. Tin Snip German Style
            [
                'name'     => 'Tin Snip German Style',
                'ar_name'  => 'مقص صفيح طراز ألماني',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tin-Snip-German-Style.png',
                'variants' => [
                    ['code' => 'COT8010', 'name' => 'COT8010 – 10 Inch 250mm', 'ar_name' => 'COT8010 – 10 بوصة 250 ملم'],
                    ['code' => 'COT8012', 'name' => 'COT8012 – 12 Inch 300mm', 'ar_name' => 'COT8012 – 12 بوصة 300 ملم'],
                ],
            ],

            // 45. Tin Snip American Style
            [
                'name'     => 'Tin Snip American Style',
                'ar_name'  => 'مقص صفيح طراز أمريكي',
                'group_id' => 6,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tin-Snip.png',
                'variants' => [
                    ['code' => 'COT9010', 'name' => 'COT9010 – 10 Inch 250mm', 'ar_name' => 'COT9010 – 10 بوصة 250 ملم'],
                    ['code' => 'COT9012', 'name' => 'COT9012 – 12 Inch 300mm', 'ar_name' => 'COT9012 – 12 بوصة 300 ملم'],
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
                    $imagePath = null;
                }
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