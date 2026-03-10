<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;

class Group12ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. 9 In 1 Multifunctional Electrician Combination Pliers
            [
                'name'        => '9 In 1 Multifunctional Electrician Combination Pliers',
                'ar_name'     => 'كماشة كهربائية متعددة الوظائف 9 في 1',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/图片1.png',
                'variants'    => [
                    ['code' => 'COP9851', 'name' => '8.5 Inch 213mm', 'ar_name' => '8.5 بوصة 213 مم'],
                ],
            ],

            // 2. High Leverage Diagonal Cutting Pliers
            [
                'name'        => 'High Leverage Diagonal Cutting Pliers',
                'ar_name'     => 'كماشة قطع قطرية عالية الرفع',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2025/08/图片61.png',
                'variants'    => [
                    ['code' => 'COP163', 'name' => '6 Inch 160mm', 'ar_name' => '6 بوصة 160 مم'],
                ],
            ],

            // 3. High Leverage Combination Pliers
            [
                'name'        => 'High Leverage Combination Pliers',
                'ar_name'     => 'كماشة مجمعة عالية الرفع',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2025/08/图片51.png',
                'variants'    => [
                    ['code' => 'COP161', 'name' => '6 Inch', 'ar_name' => '6 بوصة'],
                    ['code' => 'COP171', 'name' => '7 Inch', 'ar_name' => '7 بوصة'],
                    ['code' => 'COP181', 'name' => '8 Inch', 'ar_name' => '8 بوصة'],
                ],
            ],

            // 4. High Leverage Long Nose Pliers 6 Inch 160mm
            [
                'name'        => 'High Leverage Long Nose Pliers 6 Inch 160mm',
                'ar_name'     => 'كماشة ذات أنف طويل عالية الرفع 6 بوصة 160 مم',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2025/08/图片4.png',
                'variants'    => [
                    ['code' => 'COP162', 'name' => '6 Inch 160mm', 'ar_name' => '6 بوصة 160 مم'],
                ],
            ],

            // 5. 9 In 1 Multifunctional Electrician Diagonal Cutting Pliers
            [
                'name'        => '9 In 1 Multifunctional Electrician Diagonal Cutting Pliers',
                'ar_name'     => 'كماشة قطع قطرية كهربائية متعددة الوظائف 9 في 1',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2025/08/图片3.png',
                'variants'    => [
                    ['code' => 'COP9853', 'name' => '8 Inch 192mm', 'ar_name' => '8 بوصة 192 مم'],
                ],
            ],

            // 6. 9 In 1 Multifunctional Electrician Long Nose Pliers
            [
                'name'        => '9 In 1 Multifunctional Electrician Long Nose Pliers',
                'ar_name'     => 'كماشة ذات أنف طويل كهربائية متعددة الوظائف 9 في 1',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2025/08/图片2.png',
                'variants'    => [
                    ['code' => 'COP9852', 'name' => '8.5 Inch 215mm', 'ar_name' => '8.5 بوصة 215 مم'],
                ],
            ],

            // 7. Wire Stripping (wire-stripping-4 / COWS08215)
            [
                'name'        => 'Wire Stripping',
                'ar_name'     => 'أداة تقشير الأسلاك',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Wire-Stripping-8.png',
                'variants'    => [
                    ['code' => 'COWS08215', 'name' => 'COWS08215', 'ar_name' => 'COWS08215'],
                ],
            ],

            // 8. Wire Stripping (wire-stripping-3 / COWS08165)
            [
                'name'        => 'Wire Stripping',
                'ar_name'     => 'أداة تقشير الأسلاك',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Wire-Stripping-3.png',
                'variants'    => [
                    ['code' => 'COWS08165', 'name' => 'COWS08165', 'ar_name' => 'COWS08165'],
                ],
            ],

            // 9. Wire Stripping (wire-stripping-2 / COWS08180)
            [
                'name'        => 'Wire Stripping',
                'ar_name'     => 'أداة تقشير الأسلاك',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Wire-Stripping-2.png',
                'variants'    => [
                    ['code' => 'COWS08180', 'name' => '6 Inch', 'ar_name' => '6 بوصة'],
                ],
            ],

            // 10. Wire Stripping (wire-stripping / COWS08160)
            [
                'name'        => 'Wire Stripping',
                'ar_name'     => 'أداة تقشير الأسلاك',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Wire-Stripping.png',
                'variants'    => [
                    ['code' => 'COWS08160', 'name' => '6 Inch', 'ar_name' => '6 بوصة'],
                ],
            ],

            // 11. Duck Bill Wire Stripper
            [
                'name'        => 'Duck Bill Wire Stripper',
                'ar_name'     => 'قاطعة أسلاك على شكل منقار البطة',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Duck-Bill-Wire-Stripper.png',
                'variants'    => [
                    ['code' => 'COWS104', 'name' => '7 Inch', 'ar_name' => '7 بوصة'],
                ],
            ],

            // 12. Automatic Wire Stripper (automatic-wire-stripper-2 / COWS103)
            [
                'name'        => 'Automatic Wire Stripper',
                'ar_name'     => 'قاطعة أسلاك أوتوماتيكية',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Automatic-Wire-Stripper-2.png',
                'variants'    => [
                    ['code' => 'COWS103', 'name' => '7 Inch', 'ar_name' => '7 بوصة'],
                ],
            ],

            // 13. Automatic Wire Stripper (automatic-wire-stripper / COWS043)
            [
                'name'        => 'Automatic Wire Stripper',
                'ar_name'     => 'قاطعة أسلاك أوتوماتيكية',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Automatic-Wire-Stripper.png',
                'variants'    => [
                    ['code' => 'COWS043', 'name' => '10-24AWG (0.2-6mm)', 'ar_name' => '10-24AWG (0.2-6 مم)'],
                ],
            ],

            // 14. Locking Plier
            [
                'name'        => 'Locking Plier',
                'ar_name'     => 'كماشة قفل',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Locking-plier.png',
                'variants'    => [
                    ['code' => 'COLK08101', 'name' => '10 Inch 250mm', 'ar_name' => '10 بوصة 250 مم'],
                ],
            ],

            // 15. End Cutting Plier
            [
                'name'        => 'End Cutting Plier',
                'ar_name'     => 'كماشة قطع طرفية',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/End-Cutting-Plier.png',
                'variants'    => [
                    ['code' => 'COE0807', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                ],
            ],

            // 16. Carpenter Plier
            [
                'name'        => 'Carpenter Plier',
                'ar_name'     => 'كماشة النجار',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Carpenter-Plier.png',
                'variants'    => [
                    ['code' => 'COC0807', 'name' => '7 Inch 180mm', 'ar_name' => '7 بوصة 180 مم'],
                    ['code' => 'COC0808', 'name' => '8 Inch 200mm', 'ar_name' => '8 بوصة 200 مم'],
                ],
            ],

            // 17. Rabbet Plier
            [
                'name'        => 'Rabbet Plier',
                'ar_name'     => 'كماشة الحز',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Rabbet-Plier.png',
                'variants'    => [
                    ['code' => 'COR0808', 'name' => '8 Inch 200mm',  'ar_name' => '8 بوصة 200 مم'],
                    ['code' => 'COR0809', 'name' => '9 Inch 230mm',  'ar_name' => '9 بوصة 230 مم'],
                    ['code' => 'COR0810', 'name' => '10 Inch 250mm', 'ar_name' => '10 بوصة 250 مم'],
                    ['code' => 'COR0812', 'name' => '12 Inch 300mm', 'ar_name' => '12 بوصة 300 مم'],
                ],
            ],

            // 18. Leather Hole Punch
            [
                'name'        => 'Leather Hole Punch',
                'ar_name'     => 'ثاقبة جلد',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Leather-Hole-Punch.png',
                'variants'    => [
                    ['code' => 'COLH810', 'name' => '2.5-5mm (6 sizes)', 'ar_name' => '2.5-5 مم (6 أحجام)'],
                ],
            ],

            // 19. Water Pump Plier (water-pump-plier-2 / multi-size)
            [
                'name'        => 'Water Pump Plier',
                'ar_name'     => 'كماشة ضخ المياه',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Water-Pump-Plier-1-600x599.png',
                'variants'    => [
                    ['code' => 'COP28200', 'name' => '8 Inch 200mm',  'ar_name' => '8 بوصة 200 مم'],
                    ['code' => 'COP28250', 'name' => '10 Inch 250mm', 'ar_name' => '10 بوصة 250 مم'],
                    ['code' => 'COP28300', 'name' => '12 Inch 300mm', 'ar_name' => '12 بوصة 300 مم'],
                ],
            ],

            // 20. Water Pump Plier (water-pump-plier / COP68010)
            [
                'name'        => 'Water Pump Plier',
                'ar_name'     => 'كماشة ضخ المياه',
                'group_id'    => 12,
                'image'       => 'https://conantools.net/wp-content/uploads/2024/07/Water-Pump-Plier.png',
                'variants'    => [
                    ['code' => 'COP68010', 'name' => '10 Inch 250mm', 'ar_name' => '10 بوصة 250 مم'],
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
                'image'  => $productData['image'],

            ]);

            foreach ($productData['variants'] as $variant) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'code'       => $variant['code'],
                    'description'       => $variant['name'],
                    'ar_description'    => $variant['ar_name'],
                ]);
            }
        }
    }
}

