<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group7ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. 1/2" Hexagonal Socket
            [
                'name'     => '1/2" Hexagonal Socket',
                'ar_name'  => 'مقبس سداسي 1/2 بوصة',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片311.png',
                'variants' => [
                    ['code' => 'COHS10', 'name' => 'COHS10 – 10mm', 'ar_name' => 'COHS10 – 10 ملم'],
                    ['code' => 'COHS11', 'name' => 'COHS11 – 11mm', 'ar_name' => 'COHS11 – 11 ملم'],
                    ['code' => 'COHS12', 'name' => 'COHS12 – 12mm', 'ar_name' => 'COHS12 – 12 ملم'],
                    ['code' => 'COHS13', 'name' => 'COHS13 – 13mm', 'ar_name' => 'COHS13 – 13 ملم'],
                    ['code' => 'COHS14', 'name' => 'COHS14 – 14mm', 'ar_name' => 'COHS14 – 14 ملم'],
                    ['code' => 'COHS15', 'name' => 'COHS15 – 15mm', 'ar_name' => 'COHS15 – 15 ملم'],
                    ['code' => 'COHS17', 'name' => 'COHS17 – 17mm', 'ar_name' => 'COHS17 – 17 ملم'],
                    ['code' => 'COHS19', 'name' => 'COHS19 – 19mm', 'ar_name' => 'COHS19 – 19 ملم'],
                    ['code' => 'COHS21', 'name' => 'COHS21 – 21mm', 'ar_name' => 'COHS21 – 21 ملم'],
                    ['code' => 'COHS24', 'name' => 'COHS24 – 24mm', 'ar_name' => 'COHS24 – 24 ملم'],
                ],
            ],

            // 2. 46 Pcs 1/4" Socket Set
            [
                'name'     => '46 Pcs 1/4" Socket Set',
                'ar_name'  => 'طقم مقابس 46 قطعة 1/4 بوصة',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片281.png',
                'variants' => [
                    ['code' => 'COSK46', 'name' => 'COSK46', 'ar_name' => 'COSK46'],
                ],
            ],

            // 3. 12 Pcs 1/2" Socket Set
            [
                'name'     => '12 Pcs 1/2" Socket Set',
                'ar_name'  => 'طقم مقابس 12 قطعة 1/2 بوصة',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片271.png',
                'variants' => [
                    ['code' => 'COSK12', 'name' => 'COSK12', 'ar_name' => 'COSK12'],
                ],
            ],

            // 4. Utility Knife Replacement SK5 Blade
            [
                'name'     => 'Utility Knife Replacement SK5 Blade',
                'ar_name'  => 'شفرة بديلة SK5 لسكين الأداة',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Utility-Knife-Replacement-SK5-Blade.png',
                'variants' => [
                    ['code' => 'COKB810', 'name' => 'COKB810 – 10Pcs 18×0.6mm', 'ar_name' => 'COKB810 – 10 قطع 18×0.6 ملم'],
                ],
            ],

            // 5. Utility Knife Replacement Blades 10 Pcs
            [
                'name'     => 'Utility Knife Replacement Blades 10 Pcs',
                'ar_name'  => 'شفرات بديلة لسكين الأداة 10 قطع',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Utility-Knife-Replacement-Blades-10-Pcs.png',
                'variants' => [
                    ['code' => 'COKB510', 'name' => 'COKB510 – 10 Pcs', 'ar_name' => 'COKB510 – 10 قطع'],
                ],
            ],

            // 6. 5 Pcs Jig Saw Blade (Speed for Wood)
            [
                'name'     => '5 Pcs Jig Saw Blade (Speed for Wood)',
                'ar_name'  => '5 قطع شفرة منشار ترددي (سرعة للخشب)',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/5-Pcs-Jig-Saw-Blade-speed-for-wood）2.png',
                'variants' => [
                    ['code' => 'COT111C', 'name' => 'COT111C – 3mm sawtooth, Straight rough cutting', 'ar_name' => 'COT111C – أسنان 3 ملم، قطع خشن مستقيم'],
                    ['code' => 'COT144D', 'name' => 'COT144D – 4mm sawtooth, Straight rough cutting', 'ar_name' => 'COT144D – أسنان 4 ملم، قطع خشن مستقيم'],
                    ['code' => 'COT244D', 'name' => 'COT244D – 4mm sawtooth, Curve rough cutting', 'ar_name' => 'COT244D – أسنان 4 ملم، قطع خشن منحني'],
                ],
            ],

            // 7. 5 Pcs Jig Saw Blade (Speed for Metal)
            [
                'name'     => '5 Pcs Jig Saw Blade (Speed for Metal)',
                'ar_name'  => '5 قطع شفرة منشار ترددي (سرعة للمعدن)',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/5PCS-Jig-Saw-Blade（speed-for-metal）.png',
                'variants' => [
                    ['code' => 'COT118AF', 'name' => 'COT118AF – 1.1-1.5mm sawtooth, Metal cutting', 'ar_name' => 'COT118AF – أسنان 1.1-1.5 ملم، قطع معدن'],
                    ['code' => 'COT101B',  'name' => 'COT101B – 2.5mm sawtooth, Metal cutting',     'ar_name' => 'COT101B – أسنان 2.5 ملم، قطع معدن'],
                ],
            ],

            // 8. Reciprocating Saw Blade Set 10 Pcs For Wood & Metal
            [
                'name'     => 'Reciprocating Saw Blade Set 10 Pcs For Wood & Metal',
                'ar_name'  => 'طقم شفرات منشار ترددي 10 قطع للخشب والمعدن',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Reciprocating-Saw-Blade-Set.png',
                'variants' => [
                    ['code' => 'CORS810', 'name' => 'CORS810 – 150mm 6TPI', 'ar_name' => 'CORS810 – 150 ملم 6TPI'],
                ],
            ],

            // 9. Saw Blade
            [
                'name'     => 'Saw Blade',
                'ar_name'  => 'شفرة منشار',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Saw-Blade.png',
                'variants' => [
                    ['code' => 'COS08018', 'name' => 'COS08018 – 18T (100 Pcs)', 'ar_name' => 'COS08018 – 18 سن (100 قطعة)'],
                    ['code' => 'COS08024', 'name' => 'COS08024 – 24T (100 Pcs)', 'ar_name' => 'COS08024 – 24 سن (100 قطعة)'],
                ],
            ],

            // 10. Short Arm Ball Point Hex Key Set 9 Pcs
            [
                'name'     => 'Short Arm Ball Point Hex Key Set 9 Pcs',
                'ar_name'  => 'طقم مفاتيح سداسية بنقطة كروية 9 قطع',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Short-Arm-Ball-Point-Hex-Key-Set-9-Pcs.png',
                'variants' => [
                    ['code' => 'COT83091', 'name' => 'COT83091 – Short Arm Ball Point Hex Key Set 9 Pcs',      'ar_name' => 'COT83091 – طقم مفاتيح سداسية كروية ذراع قصيرة 9 قطع'],
                    ['code' => 'COT83092', 'name' => 'COT83092 – Long Arm Ball Point Hex Key Set 9 Pcs',       'ar_name' => 'COT83092 – طقم مفاتيح سداسية كروية ذراع طويلة 9 قطع'],
                    ['code' => 'COT83093', 'name' => 'COT83093 – Extra Arm Ball Point Hex Key Set 9 Pcs',      'ar_name' => 'COT83093 – طقم مفاتيح سداسية كروية ذراع إضافي 9 قطع'],
                ],
            ],

            // 11. Arm Torx Key Set 9 Pcs
            [
                'name'     => 'Arm Torx Key Set 9 Pcs',
                'ar_name'  => 'طقم مفاتيح تورکس 9 قطع',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Arm-Torx-Key-Set.png',
                'variants' => [
                    ['code' => 'COT72091', 'name' => 'COT72091 – Short Arm Torx Hex Key Set 9 Pcs',     'ar_name' => 'COT72091 – طقم مفاتيح تورکس ذراع قصيرة 9 قطع'],
                    ['code' => 'COT72092', 'name' => 'COT72092 – Long Arm Torx Hex Key Set 9 Pcs',      'ar_name' => 'COT72092 – طقم مفاتيح تورکس ذراع طويلة 9 قطع'],
                    ['code' => 'COT72093', 'name' => 'COT72093 – Extra Long Torx Hex Key Set 9 Pcs',    'ar_name' => 'COT72093 – طقم مفاتيح تورکس ذراع إضافي 9 قطع'],
                ],
            ],

            // 12. Arm Hex Key Set 9 Pcs
            [
                'name'     => 'Arm Hex Key Set 9 Pcs',
                'ar_name'  => 'طقم مفاتيح سداسية 9 قطع',
                'group_id' => 7,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Short-Arm-Hex-Key-Set-600x600.png',
                'variants' => [
                    ['code' => 'COT61091', 'name' => 'COT61091 – Short Arm Hex Key Set 9 Pcs',      'ar_name' => 'COT61091 – طقم مفاتيح سداسية ذراع قصيرة 9 قطع'],
                    ['code' => 'COT61092', 'name' => 'COT61092 – Long Arm Hex Key Set 9 Pcs',       'ar_name' => 'COT61092 – طقم مفاتيح سداسية ذراع طويلة 9 قطع'],
                    ['code' => 'COT61093', 'name' => 'COT61093 – Extra Long Hex Key Set 9 Pcs',     'ar_name' => 'COT61093 – طقم مفاتيح سداسية ذراع إضافي 9 قطع'],
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