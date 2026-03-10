<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;

class Group12ProductsSeeder_part2 extends Seeder
{
    public function run(): void
    {
        $products = [
            // 21. Water Pump Plier Quick-open type
            [
                'name'     => 'Water Pump Plier Quick-open type',
                'ar_name'  => 'كماشة ضخ المياه سريعة الفتح',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Water-Pump-Plier-Quick-open-type.png',
                'variants' => [
                    ['code' => 'COP58180', 'name' => '7 Inch 180mm',  'ar_name' => '7 بوصة 180 مم'],
                    ['code' => 'COP58250', 'name' => '10 Inch 250mm', 'ar_name' => '10 بوصة 250 مم'],
                ],
            ],

            // 22. 3 Pcs Pliers Set
            [
                'name'     => '3 Pcs Pliers Set',
                'ar_name'  => 'طقم كماشات 3 قطع',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/3-Pcs-Pliers-Set.png',
                'variants' => [
                    ['code' => 'COMP0803', 'name' => '4.5 Inch 115mm', 'ar_name' => '4.5 بوصة 115 مم'],
                ],
            ],

            // 23. Mini Long Nose Plier
            [
                'name'     => 'Mini Long Nose Plier',
                'ar_name'  => 'كماشة صغيرة ذات أنف طويل',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Mini-Long-nose-plier.png',
                'variants' => [
                    ['code' => 'COMP08453', 'name' => '4.5 Inch 115mm', 'ar_name' => '4.5 بوصة 115 مم'],
                ],
            ],

            // 24. Mini Diagonal Cutting Plier
            [
                'name'     => 'Mini Diagonal Cutting Plier',
                'ar_name'  => 'كماشة قطع قطرية صغيرة',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Mini-Diagonal-Cutting-Plier.png',
                'variants' => [
                    ['code' => 'COMP08452', 'name' => '4.5 Inch 115mm', 'ar_name' => '4.5 بوصة 115 مم'],
                ],
            ],

            // 25. Mini Combination Plier
            [
                'name'     => 'Mini Combination Plier',
                'ar_name'  => 'كماشة مجمعة صغيرة',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Mini-Combination-Plier.png',
                'variants' => [
                    ['code' => 'COMP08451', 'name' => '4.5 Inch 115mm', 'ar_name' => '4.5 بوصة 115 مم'],
                ],
            ],

            // 26. External Bent Head Circlip Plier
            [
                'name'     => 'External Bent Head Circlip Plier',
                'ar_name'  => 'كماشة حلقة تثبيت خارجية برأس منحنٍ',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/External-Bent-Head-Circilp-Plier.png',
                'variants' => [
                    ['code' => 'COBR709', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                ],
            ],

            // 27. External Straight Head Circlip Plier
            [
                'name'     => 'External Straight Head Circlip Plier',
                'ar_name'  => 'كماشة حلقة تثبيت خارجية برأس مستقيم',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/External-Straight-Head-Circlip-Plier.png',
                'variants' => [
                    ['code' => 'COBR708', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                ],
            ],

            // 28. Internal Bent Head Circlip Plier
            [
                'name'     => 'Internal Bent Head Circlip Plier',
                'ar_name'  => 'كماشة حلقة تثبيت داخلية برأس منحنٍ',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Internal-Bent-Head-Circilp-Plier.png',
                'variants' => [
                    ['code' => 'COSR709', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                ],
            ],

            // 29. Internal Straight Head Circlip Plier
            [
                'name'     => 'Internal Straight Head Circlip Plier',
                'ar_name'  => 'كماشة حلقة تثبيت داخلية برأس مستقيم',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Internal-Straight-Head-Circlip-plier.png',
                'variants' => [
                    ['code' => 'COSR708', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                ],
            ],

            // 30. Diagonal Cutting Plier
            [
                'name'     => 'Diagonal Cutting Plier',
                'ar_name'  => 'كماشة قطع قطرية',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Diagonal-Cutting-Plier.png',
                'variants' => [
                    ['code' => 'COP38160', 'name' => '6 Inch 160mm', 'ar_name' => '6 بوصة 160 مم'],
                    ['code' => 'COP38180', 'name' => '8 Inch 200mm', 'ar_name' => '8 بوصة 200 مم'],
                ],
            ],

            // 31. Long Nose Plier
            [
                'name'     => 'Long Nose Plier',
                'ar_name'  => 'كماشة ذات أنف طويل',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Long-nose-plier-600x597.png',
                'variants' => [
                    ['code' => 'COP48160', 'name' => '6 Inch 160mm', 'ar_name' => '6 بوصة 160 مم'],
                    ['code' => 'COP48180', 'name' => '8 Inch 200mm', 'ar_name' => '8 بوصة 200 مم'],
                ],
            ],

            // 32. Combination Plier
            [
                'name'     => 'Combination Plier',
                'ar_name'  => 'كماشة مجمعة',
                'group_id' => 12,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Diagonal-Cutting-Plier.png',
                'variants' => [
                    ['code' => 'COP28160', 'name' => '6 Inch 160mm', 'ar_name' => '6 بوصة 160 مم'],
                    ['code' => 'COP28170', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                    ['code' => 'COP28180', 'name' => '8 Inch 200mm', 'ar_name' => '8 بوصة 200 مم'],
                ],
            ],
        ];

        foreach ($products as $productData) {
            $product = Product::create([
                'name'     => $productData['name'],
                'ar_name'  => $productData['ar_name'],
                'group_id' => $productData['group_id'],
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image'      => $productData['image'],
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