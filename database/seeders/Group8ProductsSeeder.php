<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group8ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Self-Leveling Line Laser Green Line
            [
                'name'     => 'Self-Leveling Line Laser Green Line',
                'ar_name'  => 'مستوى ليزر خطي ذاتي التسوية (خط أخضر)',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片111-1.png',
                'variants' => [
                    [
                        'code'    => 'COWS805',
                        'name'    => 'COWS805 – With 1pcs safety goggle',
                        'ar_name' => 'COWS805 – مع نظارة أمان 1 قطعة',
                    ],
                ],
            ],

            // 2. Glue Gun Anti-drip function (2)
            [
                'name'     => 'Glue Gun Anti-drip function',
                'ar_name'  => 'مسدس غراء بوظيفة منع التقطير',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片251.png',
                'variants' => [
                    [
                        'code'    => 'COGL0808',
                        'name'    => 'COGL0808',
                        'ar_name' => 'COGL0808',
                    ],
                ],
            ],

            // 3. Putty Knife (Stainless)
            [
                'name'     => 'Putty Knife',
                'ar_name'  => 'سكين معجون',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片21.png',
                'variants' => [
                    [
                        'code'    => 'COP102',
                        'name'    => 'COP102 – 2 Inch',
                        'ar_name' => 'COP102 – 2 بوصة',
                    ],
                    [
                        'code'    => 'COP103',
                        'name'    => 'COP103 – 3 Inch',
                        'ar_name' => 'COP103 – 3 بوصة',
                    ],
                    [
                        'code'    => 'COP104',
                        'name'    => 'COP104 – 4 Inch',
                        'ar_name' => 'COP104 – 4 بوصة',
                    ],
                    [
                        'code'    => 'COP105',
                        'name'    => 'COP105 – 5 Inch',
                        'ar_name' => 'COP105 – 5 بوصة',
                    ],
                    [
                        'code'    => 'COP106',
                        'name'    => 'COP106 – 6 Inch',
                        'ar_name' => 'COP106 – 6 بوصة',
                    ],
                ],
            ],

            // 4. Glue Gun Anti-drip function
            [
                'name'     => 'Glue Gun Anti-drip function',
                'ar_name'  => 'مسدس غراء بوظيفة منع التقطير',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片241.png',
                'variants' => [
                    [
                        'code'    => 'COGL0807',
                        'name'    => 'COGL0807',
                        'ar_name' => 'COGL0807',
                    ],
                ],
            ],

            // 5. Laser Range Finder (2)
            [
                'name'     => 'Laser Range Finder',
                'ar_name'  => 'جهاز قياس المسافة بالليزر',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片231.png',
                'variants' => [
                    [
                        'code'    => 'COLD50',
                        'name'    => 'COLD50 – 50M 164FT',
                        'ar_name' => 'COLD50 – 50 متر',
                    ],
                    [
                        'code'    => 'COLD70',
                        'name'    => 'COLD70 – 70M 230FT',
                        'ar_name' => 'COLD70 – 70 متر',
                    ],
                    [
                        'code'    => 'COLD100',
                        'name'    => 'COLD100 – 100M 328FT',
                        'ar_name' => 'COLD100 – 100 متر',
                    ],
                ],
            ],

            // 6. Quick Release Bar Clamp
            [
                'name'     => 'Quick Release Bar Clamp',
                'ar_name'  => 'مشبك بار سريع التحرير',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片11.png',
                'variants' => [
                    [
                        'code'    => 'COQB06',
                        'name'    => 'COQB06 – 63×150mm 6Inch',
                        'ar_name' => 'COQB06 – 63×150 مم 6 بوصة',
                    ],
                    [
                        'code'    => 'COQB08',
                        'name'    => 'COQB08 – 63×200mm 8Inch',
                        'ar_name' => 'COQB08 – 63×200 مم 8 بوصة',
                    ],
                    [
                        'code'    => 'COQB12',
                        'name'    => 'COQB12 – 63×300mm 12Inch',
                        'ar_name' => 'COQB12 – 63×300 مم 12 بوصة',
                    ],
                    [
                        'code'    => 'COQB18',
                        'name'    => 'COQB18 – 63×450mm 18Inch',
                        'ar_name' => 'COQB18 – 63×450 مم 18 بوصة',
                    ],
                    [
                        'code'    => 'COQB24',
                        'name'    => 'COQB24 – 63×600mm 24Inch',
                        'ar_name' => 'COQB24 – 63×600 مم 24 بوصة',
                    ],
                ],
            ],

            // 7. Laser Tape Measure
            [
                'name'     => 'Laser Tape Measure',
                'ar_name'  => 'شريط قياس بالليزر',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片221.png',
                'variants' => [
                    [
                        'code'    => 'COLM05',
                        'name'    => 'COLM05 – 40M Laser, 5M×19mm Tape',
                        'ar_name' => 'COLM05 – ليزر 40 متر، شريط 5 متر×19 مم',
                    ],
                ],
            ],

            // 8. Heavy-duty Mason's Level With Magnetic
            [
                'name'     => "Heavy-duty Mason's Level With Magnetic",
                'ar_name'  => 'ميزان بنّاء ثقيل مغناطيسي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片211-2.png',
                'variants' => [
                    [
                        'code'    => 'COXL26',
                        'name'    => 'COXL26 – 25cm',
                        'ar_name' => 'COXL26 – 25 سم',
                    ],
                ],
            ],

            // 9. Heavy Duty 6 Way Staple Gun
            [
                'name'     => 'Heavy Duty 6 Way Staple Gun',
                'ar_name'  => 'مسدس دبابيس ثقيل 6 طرق',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片201.png',
                'variants' => [
                    [
                        'code'    => 'COSG06',
                        'name'    => 'COSG06 – With 1200 Pcs Staples',
                        'ar_name' => 'COSG06 – مع 1200 قطعة دبابيس',
                    ],
                ],
            ],

            // 10. Heavy Duty 4 Way Staple Gun
            [
                'name'     => 'Heavy Duty 4 Way Staple Gun',
                'ar_name'  => 'مسدس دبابيس ثقيل 4 طرق',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片191.png',
                'variants' => [
                    [
                        'code'    => 'COSG04',
                        'name'    => 'COSG04 – With 800 Pcs Staples',
                        'ar_name' => 'COSG04 – مع 800 قطعة دبابيس',
                    ],
                    [
                        'code'    => 'COSG05',
                        'name'    => 'COSG05 – With 800 Pcs Staples + 1pc Nail Remover',
                        'ar_name' => 'COSG05 – مع 800 دبوس + خالع مسامير',
                    ],
                ],
            ],

            // 11. Staple Gun (new)
            [
                'name'     => 'Staple Gun',
                'ar_name'  => 'مسدس دبابيس',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片181.png',
                'variants' => [
                    [
                        'code'    => 'COSG01',
                        'name'    => 'COSG01',
                        'ar_name' => 'COSG01',
                    ],
                ],
            ],

            // 12. Air Brad Nailer 22GA
            [
                'name'     => 'Air Brad Nailer 22GA',
                'ar_name'  => 'مسدس مسامير هوائي 22GA',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Air-Brad-Nailer-22GA.png',
                'variants' => [
                    [
                        'code'    => 'CONA22',
                        'name'    => 'CONA22',
                        'ar_name' => 'CONA22',
                    ],
                ],
            ],

            // 13. Air Brad Nailer 18GA
            [
                'name'     => 'Air Brad Nailer 18GA',
                'ar_name'  => 'مسدس مسامير هوائي 18GA',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Air-Brad-Nailer-18GA.png',
                'variants' => [
                    [
                        'code'    => 'CONA18',
                        'name'    => 'CONA18',
                        'ar_name' => 'CONA18',
                    ],
                ],
            ],

            // 14. Tripods For Laser Level
            [
                'name'     => 'Tripods For Laser Level',
                'ar_name'  => 'حوامل ثلاثية لمستوى الليزر',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tripods-For-Laser-Level.png',
                'variants' => [
                    [
                        'code'    => 'COS801',
                        'name'    => 'COS801 – 1M',
                        'ar_name' => 'COS801 – 1 متر',
                    ],
                    [
                        'code'    => 'COS812',
                        'name'    => 'COS812 – 1.2M',
                        'ar_name' => 'COS812 – 1.2 متر',
                    ],
                    [
                        'code'    => 'COS815',
                        'name'    => 'COS815 – 1.5M',
                        'ar_name' => 'COS815 – 1.5 متر',
                    ],
                ],
            ],

            // 15. 16 Line 4D Laser Level With Controller (2)
            [
                'name'     => '16 Line 4D Laser Level With Controller',
                'ar_name'  => 'مستوى ليزر 4D بـ 16 خطاً مع وحدة تحكم',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/16-Line-4D-Laser-Level-With-Controller-2.png',
                'variants' => [
                    [
                        'code'    => 'COLL16G',
                        'name'    => 'COLL16G',
                        'ar_name' => 'COLL16G',
                    ],
                ],
            ],

            // 16. 16 Line 4D Laser Level With Controller
            [
                'name'     => '16 Line 4D Laser Level With Controller',
                'ar_name'  => 'مستوى ليزر 4D بـ 16 خطاً مع وحدة تحكم',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/16-Line-4D-Laser-Level-With-Controller.png',
                'variants' => [
                    [
                        'code'    => 'COLL16R',
                        'name'    => 'COLL16R',
                        'ar_name' => 'COLL16R',
                    ],
                ],
            ],

            // 17. 12 Line 4D Laser Level With Controller
            [
                'name'     => '12 Line 4D Laser Level With Controller',
                'ar_name'  => 'مستوى ليزر 4D بـ 12 خطاً مع وحدة تحكم',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/12-Line-4D-Laser-Level-With-Controller.png',
                'variants' => [
                    [
                        'code'    => 'COLL12',
                        'name'    => 'COLL12',
                        'ar_name' => 'COLL12',
                    ],
                ],
            ],

            // 18. Paint Brush
            [
                'name'     => 'Paint Brush',
                'ar_name'  => 'فرشاة دهان',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Paint-Brush.png',
                'variants' => [
                    [
                        'code'    => 'COPB',
                        'name'    => 'COPB',
                        'ar_name' => 'COPB',
                    ],
                ],
            ],

            // 19. Roller Brush 4 Inch 10 Pcs
            [
                'name'     => 'Roller Brush 4 Inch 10 Pcs',
                'ar_name'  => 'رول دهان 4 بوصة 10 قطع',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Roller-Brush-4-Inch-10-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'CORB4P10',
                        'name'    => 'CORB4P10',
                        'ar_name' => 'CORB4P10',
                    ],
                ],
            ],

            // 20. Roller Brush 9 Inch 2 Pcs
            [
                'name'     => 'Roller Brush 9 Inch 2 Pcs',
                'ar_name'  => 'رول دهان 9 بوصة 2 قطعة',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Roller-Brush-9-Inch-2-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'CORB9P2',
                        'name'    => 'CORB9P2',
                        'ar_name' => 'CORB9P2',
                    ],
                ],
            ],

            // 21. Roller Brush
            [
                'name'     => 'Roller Brush',
                'ar_name'  => 'رول دهان',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Roller-Brush.png',
                'variants' => [
                    [
                        'code'    => 'CORB',
                        'name'    => 'CORB',
                        'ar_name' => 'CORB',
                    ],
                ],
            ],

            // 22. Bricklaying Trowel Plastic Handle (3)
            [
                'name'     => 'Bricklaying Trowel Plastic Handle',
                'ar_name'  => 'مالج بناء بمقبض بلاستيكي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bricklaying-Trowel-Plastic-Handle-2.png',
                'variants' => [
                    [
                        'code'    => 'COBT3',
                        'name'    => 'COBT3',
                        'ar_name' => 'COBT3',
                    ],
                ],
            ],

            // 23. Bricklaying Trowel Plastic Handle (2)
            [
                'name'     => 'Bricklaying Trowel Plastic Handle',
                'ar_name'  => 'مالج بناء بمقبض بلاستيكي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bricklaying-Trowel-Plastic-Handle-1.png',
                'variants' => [
                    [
                        'code'    => 'COBT2',
                        'name'    => 'COBT2',
                        'ar_name' => 'COBT2',
                    ],
                ],
            ],

            // 24. Bricklaying Trowel Plastic Handle
            [
                'name'     => 'Bricklaying Trowel Plastic Handle',
                'ar_name'  => 'مالج بناء بمقبض بلاستيكي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bricklaying-Trowel-Plastic-Handle.png',
                'variants' => [
                    [
                        'code'    => 'COBT1',
                        'name'    => 'COBT1',
                        'ar_name' => 'COBT1',
                    ],
                ],
            ],

            // 25. Bricklaying Trowel Wood Handle
            [
                'name'     => 'Bricklaying Trowel Wood Handle',
                'ar_name'  => 'مالج بناء بمقبض خشبي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Bricklaying-Trowel-Wood-Handle.png',
                'variants' => [
                    [
                        'code'    => 'COBTW',
                        'name'    => 'COBTW',
                        'ar_name' => 'COBTW',
                    ],
                ],
            ],

            // 26. Plastering Trowel Plastic Handle
            [
                'name'     => 'Plastering Trowel Plastic Handle',
                'ar_name'  => 'مالج تلييس بمقبض بلاستيكي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Plastering-Trowel-Plastic-Handle.png',
                'variants' => [
                    [
                        'code'    => 'COPTP',
                        'name'    => 'COPTP',
                        'ar_name' => 'COPTP',
                    ],
                ],
            ],

            // 27. Plastering Trowel Beech Handle (2)
            [
                'name'     => 'Plastering Trowel Beech Handle',
                'ar_name'  => 'مالج تلييس بمقبض زان',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Plastering-Trowel-3.png',
                'variants' => [
                    [
                        'code'    => 'COPTB2',
                        'name'    => 'COPTB2',
                        'ar_name' => 'COPTB2',
                    ],
                ],
            ],

            // 28. Plastering Trowel Beech Handle
            [
                'name'     => 'Plastering Trowel Beech Handle',
                'ar_name'  => 'مالج تلييس بمقبض زان',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Plastering-Trowel-4.png',
                'variants' => [
                    [
                        'code'    => 'COPTB1',
                        'name'    => 'COPTB1',
                        'ar_name' => 'COPTB1',
                    ],
                ],
            ],

            // 29. Plastering Trowel
            [
                'name'     => 'Plastering Trowel',
                'ar_name'  => 'مالج تلييس',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Plastering-Trowel-2.png',
                'variants' => [
                    [
                        'code'    => 'COPT',
                        'name'    => 'COPT',
                        'ar_name' => 'COPT',
                    ],
                ],
            ],

            // 30. Scraper Putty Knife
            [
                'name'     => 'Scraper Putty Knife',
                'ar_name'  => 'سكين معجون (كاشطة)',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Scraper-Putty-Knife.png',
                'variants' => [
                    [
                        'code'    => 'COSPK',
                        'name'    => 'COSPK',
                        'ar_name' => 'COSPK',
                    ],
                ],
            ],

            // 31. Putty Knife (Carbon Steel) 2
            [
                'name'     => 'Putty Knife (Carbon Steel)',
                'ar_name'  => 'سكين معجون (صلب كربوني)',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Putty-Knife-（Carbon-Steel）2.png',
                'variants' => [
                    [
                        'code'    => 'COPKCS2',
                        'name'    => 'COPKCS2',
                        'ar_name' => 'COPKCS2',
                    ],
                ],
            ],

            // 32. Putty Knife (Stainless)
            [
                'name'     => 'Putty Knife (Stainless)',
                'ar_name'  => 'سكين معجون (ستانلس ستيل)',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Putty-Knife-（Carbon-Steel）.png',
                'variants' => [
                    [
                        'code'    => 'COPKSS',
                        'name'    => 'COPKSS',
                        'ar_name' => 'COPKSS',
                    ],
                ],
            ],

            // 33. Putty Knife (Carbon Steel)
            [
                'name'     => 'Putty Knife (Carbon Steel)',
                'ar_name'  => 'سكين معجون (صلب كربوني)',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Putty-Knife-（Carbon-Steel）.png',
                'variants' => [
                    [
                        'code'    => 'COPKCS',
                        'name'    => 'COPKCS',
                        'ar_name' => 'COPKCS',
                    ],
                ],
            ],

            // 34. Putty Trowel
            [
                'name'     => 'Putty Trowel',
                'ar_name'  => 'مالج معجون',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Putty-Trowel.png',
                'variants' => [
                    [
                        'code'    => 'COPTROW',
                        'name'    => 'COPTROW',
                        'ar_name' => 'COPTROW',
                    ],
                ],
            ],

            // 35. G Clamp
            [
                'name'     => 'G Clamp',
                'ar_name'  => 'مشبك G',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/G-Clamp.png',
                'variants' => [
                    [
                        'code'    => 'COGC',
                        'name'    => 'COGC',
                        'ar_name' => 'COGC',
                    ],
                ],
            ],

            // 36. Glue Gun (4)
            [
                'name'     => 'Glue Gun',
                'ar_name'  => 'مسدس غراء',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Glue-Gun-4.png',
                'variants' => [
                    [
                        'code'    => 'COGL04',
                        'name'    => 'COGL04',
                        'ar_name' => 'COGL04',
                    ],
                ],
            ],

            // 37. Glue Gun (3)
            [
                'name'     => 'Glue Gun',
                'ar_name'  => 'مسدس غراء',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Glue-gun-3.png',
                'variants' => [
                    [
                        'code'    => 'COGL03',
                        'name'    => 'COGL03',
                        'ar_name' => 'COGL03',
                    ],
                ],
            ],

            // 38. Glue Gun (2)
            [
                'name'     => 'Glue Gun',
                'ar_name'  => 'مسدس غراء',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Glue-Gun.png',
                'variants' => [
                    [
                        'code'    => 'COGL02',
                        'name'    => 'COGL02',
                        'ar_name' => 'COGL02',
                    ],
                ],
            ],

            // 39. Glue Gun
            [
                'name'     => 'Glue Gun',
                'ar_name'  => 'مسدس غراء',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Glue-gun-1.png',
                'variants' => [
                    [
                        'code'    => 'COGL01',
                        'name'    => 'COGL01',
                        'ar_name' => 'COGL01',
                    ],
                ],
            ],

            // 40. Laser Range Finder
            [
                'name'     => 'Laser Range Finder',
                'ar_name'  => 'جهاز قياس المسافة بالليزر',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Laser-Range-Finder.png',
                'variants' => [
                    [
                        'code'    => 'COLD',
                        'name'    => 'COLD',
                        'ar_name' => 'COLD',
                    ],
                ],
            ],

            // 41. Digital Display Level
            [
                'name'     => 'Digital Display Level',
                'ar_name'  => 'ميزان ذو شاشة رقمية',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Digital-display-level.png',
                'variants' => [
                    [
                        'code'    => 'CODDL',
                        'name'    => 'CODDL',
                        'ar_name' => 'CODDL',
                    ],
                ],
            ],

            // 42. Spirit Level With Magnetic (2)
            [
                'name'     => 'Spirit Level With Magnetic',
                'ar_name'  => 'ميزان تسوية مغناطيسي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Spirit-Level-With-Magnetic-2-600x600.png',
                'variants' => [
                    [
                        'code'    => 'COSLM2',
                        'name'    => 'COSLM2',
                        'ar_name' => 'COSLM2',
                    ],
                ],
            ],

            // 43. Spirit Level With Magnetic
            [
                'name'     => 'Spirit Level With Magnetic',
                'ar_name'  => 'ميزان تسوية مغناطيسي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Spirit-Level-With-Magnetic-600x600.png',
                'variants' => [
                    [
                        'code'    => 'COSLM',
                        'name'    => 'COSLM',
                        'ar_name' => 'COSLM',
                    ],
                ],
            ],

            // 44. Tape Measure
            [
                'name'     => 'Tape Measure',
                'ar_name'  => 'شريط قياس',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tape-Measure-2.png',
                'variants' => [
                    [
                        'code'    => 'COTM',
                        'name'    => 'COTM',
                        'ar_name' => 'COTM',
                    ],
                ],
            ],

            // 45. Tape Measure With Magnetic (2)
            [
                'name'     => 'Tape Measure With Magnetic',
                'ar_name'  => 'شريط قياس مغناطيسي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tape-Measure-With-Magnetic-2.png',
                'variants' => [
                    [
                        'code'    => 'COTMM2',
                        'name'    => 'COTMM2',
                        'ar_name' => 'COTMM2',
                    ],
                ],
            ],

            // 46. Tape Measure With Magnetic
            [
                'name'     => 'Tape Measure With Magnetic',
                'ar_name'  => 'شريط قياس مغناطيسي',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tape-Measure-With-Magnetic.png',
                'variants' => [
                    [
                        'code'    => 'COTMM',
                        'name'    => 'COTMM',
                        'ar_name' => 'COTMM',
                    ],
                ],
            ],

            // 47. Staples
            [
                'name'     => 'Staples',
                'ar_name'  => 'دبابيس تدبيس',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Staples.png',
                'variants' => [
                    [
                        'code'    => 'COSTPL',
                        'name'    => 'COSTPL',
                        'ar_name' => 'COSTPL',
                    ],
                ],
            ],

            // 48. Heavy Duty 3 Way Staple Gun (2)
            [
                'name'     => 'Heavy Duty 3 Way Staple Gun',
                'ar_name'  => 'مسدس دبابيس ثقيل 3 طرق',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Heavy-Duty-3-Way-Staple-Gun-2.png',
                'variants' => [
                    [
                        'code'    => 'COSG32',
                        'name'    => 'COSG32',
                        'ar_name' => 'COSG32',
                    ],
                ],
            ],

            // 49. Staple Gun
            [
                'name'     => 'Staple Gun',
                'ar_name'  => 'مسدس دبابيس',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Staple-Gun.png',
                'variants' => [
                    [
                        'code'    => 'COSG',
                        'name'    => 'COSG',
                        'ar_name' => 'COSG',
                    ],
                ],
            ],

            // 50. Heavy Duty 3 Way Staple Gun
            [
                'name'     => 'Heavy Duty 3 Way Staple Gun',
                'ar_name'  => 'مسدس دبابيس ثقيل 3 طرق',
                'group_id' => 8,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Heavy-Duty-3-Way-Staple-Gun.png',
                'variants' => [
                    [
                        'code'    => 'COSG31',
                        'name'    => 'COSG31',
                        'ar_name' => 'COSG31',
                    ],
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
                        $extension = pathinfo(parse_url($productData['image'], PHP_URL_PATH), PATHINFO_EXTENSION) ?: 'jpg';
                        $filename = Str::slug($product->name) . '-' . uniqid() . '.' . $extension;
                        $path = "products/{$filename}";

                        Storage::disk('public')->put($path, $response->body());
                        $imagePath = $path;
                    }
                } catch (\Exception $e) {
                    $imagePath = null;
                }
            }

            // ONLY this one should remain. Remove the one that was below it.
            if ($imagePath) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image'      => $imagePath,
                ]);
            }

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