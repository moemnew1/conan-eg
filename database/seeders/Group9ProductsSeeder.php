<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group9ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Retractable Lopping Shears
            [
                'name'     => 'Retractable Lopping Shears',
                'ar_name'  => 'مقص تقليم قابل للسحب',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片111.png',
                'variants' => [
                    [
                        'code'    => 'COS990',
                        'name'    => 'COS990',
                        'ar_name' => 'COS990',
                    ],
                ],
            ],

            // 2. Garden Shears (garden-shears-7) – COSP13
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片10.png',
                'variants' => [
                    [
                        'code'    => 'COSP13',
                        'name'    => 'COSP13 – Two gears: 10mm & 18mm',
                        'ar_name' => 'COSP13 – ترسين: 10 مم و 18 مم',
                    ],
                ],
            ],

            // 3. Garden Shears (garden-shears-6) – COSP08
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片91.png',
                'variants' => [
                    [
                        'code'    => 'COSP08',
                        'name'    => 'COSP08',
                        'ar_name' => 'COSP08',
                    ],
                ],
            ],

            // 4. Garden Shears With Cutting Board (garden-shears-with-cutting-board-2) – COSP010
            [
                'name'     => 'Garden Shears With Cutting Board',
                'ar_name'  => 'مقص حديقة مع لوح قطع',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片81.png',
                'variants' => [
                    [
                        'code'    => 'COSP010',
                        'name'    => 'COSP010',
                        'ar_name' => 'COSP010',
                    ],
                ],
            ],

            // 5. Garden Shears (garden-shears-5) – COS10B
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片71.png',
                'variants' => [
                    [
                        'code'    => 'COS10B',
                        'name'    => 'COS10B',
                        'ar_name' => 'COS10B',
                    ],
                ],
            ],

            // 6. Water Gun Set 5 Pcs (water-gun-set-5-pcs-2) – COSG08071
            [
                'name'     => 'Water Gun Set 5 Pcs',
                'ar_name'  => 'طقم مسدسات رش الماء 5 قطع',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Water-Gun-Set-5-Pcs-2.png',
                'variants' => [
                    [
                        'code'    => 'COSG08071',
                        'name'    => 'COSG08071',
                        'ar_name' => 'COSG08071',
                    ],
                ],
            ],

            // 7. Water Gun Set 5 Pcs (water-gun-set-5-pcs) – COSG08051
            [
                'name'     => 'Water Gun Set 5 Pcs',
                'ar_name'  => 'طقم مسدسات رش الماء 5 قطع',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Water-Gun-Set-5-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COSG08051',
                        'name'    => 'COSG08051',
                        'ar_name' => 'COSG08051',
                    ],
                ],
            ],

            // 8. Water Gun Set 3 Pcs – COSG08011
            [
                'name'     => 'Water Gun Set 3 Pcs',
                'ar_name'  => 'طقم مسدسات رش الماء 3 قطع',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Water-Gun-Set-3-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COSG08011',
                        'name'    => 'COSG08011',
                        'ar_name' => 'COSG08011',
                    ],
                ],
            ],

            // 9. Lopping Shears (lopping-shears-3) – COS08791
            [
                'name'     => 'Lopping Shears',
                'ar_name'  => 'مقص تقليم الأغصان',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lopping-Shears-3.png',
                'variants' => [
                    [
                        'code'    => 'COS08791',
                        'name'    => 'COS08791',
                        'ar_name' => 'COS08791',
                    ],
                ],
            ],

            // 10. Lopping Shears (lopping-shears-2) – COS08691
            [
                'name'     => 'Lopping Shears',
                'ar_name'  => 'مقص تقليم الأغصان',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lopping-Shears-2.png',
                'variants' => [
                    [
                        'code'    => 'COS08691',
                        'name'    => 'COS08691',
                        'ar_name' => 'COS08691',
                    ],
                ],
            ],

            // 11. Lopping Shears (lopping-shears) – COS08660
            [
                'name'     => 'Lopping Shears',
                'ar_name'  => 'مقص تقليم الأغصان',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Lopping-Shears-1-600x600.png',
                'variants' => [
                    [
                        'code'    => 'COS08660',
                        'name'    => 'COS08660',
                        'ar_name' => 'COS08660',
                    ],
                ],
            ],

            // 12. Transplanter – COST05
            [
                'name'     => 'Transplanter',
                'ar_name'  => 'أداة زراعة الشتلات',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Transplanter.png',
                'variants' => [
                    [
                        'code'    => 'COST05',
                        'name'    => 'COST05',
                        'ar_name' => 'COST05',
                    ],
                ],
            ],

            // 13. Garden Rake – COST02
            [
                'name'     => 'Garden Rake',
                'ar_name'  => 'مشط الحديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Rake.png',
                'variants' => [
                    [
                        'code'    => 'COST02',
                        'name'    => 'COST02',
                        'ar_name' => 'COST02',
                    ],
                ],
            ],

            // 14. Trowel – COST03
            [
                'name'     => 'Trowel',
                'ar_name'  => 'مجرفة الحديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Trowel.png',
                'variants' => [
                    [
                        'code'    => 'COST03',
                        'name'    => 'COST03',
                        'ar_name' => 'COST03',
                    ],
                ],
            ],

            // 15. Garden Shears SK5 blade (garden-shears-sk5-blade-3) – COS0811
            [
                'name'     => 'Garden Shears (SK5 blade)',
                'ar_name'  => 'مقص حديقة (شفرة SK5)',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-SK5-blade-3.png',
                'variants' => [
                    [
                        'code'    => 'COS0811',
                        'name'    => 'COS0811',
                        'ar_name' => 'COS0811',
                    ],
                ],
            ],

            // 16. Garden Shears SK5 blade (garden-shears-sk5-blade-2) – COS0807
            [
                'name'     => 'Garden Shears (SK5 blade)',
                'ar_name'  => 'مقص حديقة (شفرة SK5)',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-SK5-blade-2.png',
                'variants' => [
                    [
                        'code'    => 'COS0807',
                        'name'    => 'COS0807',
                        'ar_name' => 'COS0807',
                    ],
                ],
            ],

            // 17. Garden Shears SK5 blade (garden-shears-sk5-blade) – COS0815
            [
                'name'     => 'Garden Shears (SK5 blade)',
                'ar_name'  => 'مقص حديقة (شفرة SK5)',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-SK5-blade-1.png',
                'variants' => [
                    [
                        'code'    => 'COS0815',
                        'name'    => 'COS0815',
                        'ar_name' => 'COS0815',
                    ],
                ],
            ],

            // 18. Garden Shears (garden-shears-4) – COSP087
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears.png',
                'variants' => [
                    [
                        'code'    => 'COSP087',
                        'name'    => 'COSP087',
                        'ar_name' => 'COSP087',
                    ],
                ],
            ],

            // 19. Garden Shears (garden-shears-3) – COSP03
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-3.png',
                'variants' => [
                    [
                        'code'    => 'COSP03',
                        'name'    => 'COSP03',
                        'ar_name' => 'COSP03',
                    ],
                ],
            ],

            // 20. Garden Shears (garden-shears-2) – COS0805
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-2.png',
                'variants' => [
                    [
                        'code'    => 'COS0805',
                        'name'    => 'COS0805',
                        'ar_name' => 'COS0805',
                    ],
                ],
            ],

            // 21. Garden Shears (garden-shears) – COS0810
            [
                'name'     => 'Garden Shears',
                'ar_name'  => 'مقص حديقة',
                'group_id' => 9,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Garden-Shears-1.png',
                'variants' => [
                    [
                        'code'    => 'COS0810',
                        'name'    => 'COS0810',
                        'ar_name' => 'COS0810',
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