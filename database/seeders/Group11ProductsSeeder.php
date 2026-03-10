<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Group11ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Quick Release Ratchet Wrench
            [
                'name'     => 'Quick Release Ratchet Wrench',
                'ar_name'  => 'مفتاح رباطة سريع الفك',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片301.png',
                'variants' => [
                    ['code' => 'CORW14', 'name' => '1/4 Inch', 'ar_name' => '1/4 بوصة'],
                    ['code' => 'CORW12', 'name' => '1/2 Inch', 'ar_name' => '1/2 بوصة'],
                ],
            ],

            // 2. Flexible Ratchet Spanner Set
            [
                'name'     => 'Flexible Ratchet Spanner Set',
                'ar_name'  => 'طقم مفاتيح رباطة مرنة',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片26.png',
                'variants' => [
                    ['code' => 'COFR06S', 'name' => '6PCS: 8mm, 10mm, 12mm, 13mm, 14mm, 17mm',    'ar_name' => '6 قطع: 8 ملم، 10 ملم، 12 ملم، 13 ملم، 14 ملم، 17 ملم'],
                    ['code' => 'COFR07S', 'name' => '7PCS: 8mm, 10mm, 12mm, 13mm, 14mm, 17mm, 19mm', 'ar_name' => '7 قطع: 8 ملم، 10 ملم، 12 ملم، 13 ملم، 14 ملم، 17 ملم، 19 ملم'],
                ],
            ],

            // 3. 90 Degree Bent Nose Pipe Wrench
            [
                'name'     => '90 Degree Bent Nose Pipe Wrench',
                'ar_name'  => 'مفتاح أنابيب بأنف منحني 90 درجة',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/90-Degree-Bent-Nose-Pipe-Wrench.png',
                'variants' => [
                    ['code' => 'Type-3/4',  'name' => '3/4 Inch',  'ar_name' => '3/4 بوصة'],
                    ['code' => 'Type-1',    'name' => '1 Inch',    'ar_name' => '1 بوصة'],
                    ['code' => 'Type-1.5',  'name' => '1.5 Inch',  'ar_name' => '1.5 بوصة'],
                    ['code' => 'Type-2',    'name' => '2 Inch',    'ar_name' => '2 بوصة'],
                    ['code' => 'Type-3',    'name' => '3 Inch',    'ar_name' => '3 بوصة'],
                    ['code' => 'Type-4',    'name' => '4 Inch',    'ar_name' => '4 بوصة'],
                ],
            ],

            // 4. Heavy Duty Pipe Wrench
            [
                'name'     => 'Heavy Duty Pipe Wrench',
                'ar_name'  => 'مفتاح أنابيب للأعمال الشاقة',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Heavy-Duty-Pipe-Wrench.png',
                'variants' => [
                    ['code' => 'Type-10', 'name' => '10 Inch', 'ar_name' => '10 بوصة'],
                    ['code' => 'Type-12', 'name' => '12 Inch', 'ar_name' => '12 بوصة'],
                    ['code' => 'Type-14', 'name' => '14 Inch', 'ar_name' => '14 بوصة'],
                    ['code' => 'Type-18', 'name' => '18 Inch', 'ar_name' => '18 بوصة'],
                    ['code' => 'Type-24', 'name' => '24 Inch', 'ar_name' => '24 بوصة'],
                    ['code' => 'Type-36', 'name' => '36 Inch', 'ar_name' => '36 بوصة'],
                    ['code' => 'Type-48', 'name' => '48 Inch', 'ar_name' => '48 بوصة'],
                ],
            ],

            // 5. Y-Type Socket Wrench
            [
                'name'     => 'Y-Type Socket Wrench',
                'ar_name'  => 'مفتاح صامولة على شكل Y',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Y-Type-Socket-Wrench.png',
                'variants' => [
                    ['code' => 'COYS808', 'name' => '8-10-12mm',  'ar_name' => '8-10-12 ملم'],
                    ['code' => 'COYS810', 'name' => '10-12-14mm', 'ar_name' => '10-12-14 ملم'],
                    ['code' => 'COYS812', 'name' => '12-14-17mm', 'ar_name' => '12-14-17 ملم'],
                    ['code' => 'COYS814', 'name' => '14-17-19mm', 'ar_name' => '14-17-19 ملم'],
                ],
            ],

            // 6. T-Handle Socket Wrench
            [
                'name'     => 'T-Handle Socket Wrench',
                'ar_name'  => 'مفتاح صامولة بمقبض T',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/T-Handle-Socket-Wrench.png',
                'variants' => [
                    ['code' => 'Type-8mm',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'Type-12mm', 'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'Type-13mm', 'name' => '13mm', 'ar_name' => '13 ملم'],
                    ['code' => 'Type-14mm', 'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'Type-15mm', 'name' => '15mm', 'ar_name' => '15 ملم'],
                    ['code' => 'Type-16mm', 'name' => '16mm', 'ar_name' => '16 ملم'],
                    ['code' => 'Type-17mm', 'name' => '17mm', 'ar_name' => '17 ملم'],
                    ['code' => 'Type-18mm', 'name' => '18mm', 'ar_name' => '18 ملم'],
                    ['code' => 'Type-19mm', 'name' => '19mm', 'ar_name' => '19 ملم'],
                ],
            ],

            // 7. X-Type Socket Wrench
            [
                'name'     => 'X-Type Socket Wrench',
                'ar_name'  => 'مفتاح صامولة على شكل X',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/X-Type-Socket-Wrench.png',
                'variants' => [
                    ['code' => 'COXS814', 'name' => '14 Inch', 'ar_name' => '14 بوصة'],
                    ['code' => 'COXS818', 'name' => '18 Inch', 'ar_name' => '18 بوصة'],
                    ['code' => 'COXS820', 'name' => '20 Inch', 'ar_name' => '20 بوصة'],
                ],
            ],

            // 8. L Type Wrench
            [
                'name'     => 'L Type Wrench',
                'ar_name'  => 'مفتاح على شكل L',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/L-Type-Wrench.png',
                'variants' => [
                    ['code' => 'Type-L8',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'Type-L10', 'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'Type-L12', 'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'Type-L13', 'name' => '13mm', 'ar_name' => '13 ملم'],
                    ['code' => 'Type-L14', 'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'Type-L17', 'name' => '17mm', 'ar_name' => '17 ملم'],
                    ['code' => 'Type-L19', 'name' => '19mm', 'ar_name' => '19 ملم'],
                ],
            ],

            // 9. Self Locking Wrench
            [
                'name'     => 'Self Locking Wrench',
                'ar_name'  => 'مفتاح ذاتي القفل',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Self-Locking-Wrench.png',
                'variants' => [
                    ['code' => 'COSW808', 'name' => '8 Inch',  'ar_name' => '8 بوصة'],
                    ['code' => 'COSW810', 'name' => '10 Inch', 'ar_name' => '10 بوصة'],
                    ['code' => 'COSW812', 'name' => '12 Inch', 'ar_name' => '12 بوصة'],
                ],
            ],

            // 10. Adjustable Wrench
            [
                'name'     => 'Adjustable Wrench',
                'ar_name'  => 'مفتاح قابل للضبط',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Ajustable-Wrench.png',
                'variants' => [
                    ['code' => 'Type-6',  'name' => '6 Inch',  'ar_name' => '6 بوصة'],
                    ['code' => 'Type-8',  'name' => '8 Inch',  'ar_name' => '8 بوصة'],
                    ['code' => 'Type-10', 'name' => '10 Inch', 'ar_name' => '10 بوصة'],
                    ['code' => 'Type-12', 'name' => '12 Inch', 'ar_name' => '12 بوصة'],
                ],
            ],

            // 11. Ratchet Two-purpose Wrench
            [
                'name'     => 'Ratchet Two-purpose Wrench',
                'ar_name'  => 'مفتاح رباطة ثنائي الغرض',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Ratchet-Two-purpose-Wrench-1.png',
                'variants' => [
                    ['code' => 'COMW0606', 'name' => '6PCS: 8mm, 10mm, 12mm, 13mm, 14mm, 17mm',         'ar_name' => '6 قطع: 8 ملم، 10 ملم، 12 ملم، 13 ملم، 14 ملم، 17 ملم'],
                    ['code' => 'COMW0607', 'name' => '7PCS: 8mm, 10mm, 12mm, 13mm, 14mm, 17mm, 19mm',    'ar_name' => '7 قطع: 8 ملم، 10 ملم، 12 ملم، 13 ملم، 14 ملم، 17 ملم، 19 ملم'],
                ],
            ],

            // 12. Mirror Ratchet Two-purpose Wrench
            [
                'name'     => 'Mirror Ratchet Two-purpose Wrench',
                'ar_name'  => 'مفتاح رباطة مرآة ثنائي الغرض',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Mirror-ratchet-Two-purpose-Wrench.png',
                'variants' => [
                    ['code' => 'Type-MR8',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'Type-MR10', 'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'Type-MR12', 'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'Type-MR13', 'name' => '13mm', 'ar_name' => '13 ملم'],
                    ['code' => 'Type-MR14', 'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'Type-MR15', 'name' => '15mm', 'ar_name' => '15 ملم'],
                    ['code' => 'Type-MR17', 'name' => '17mm', 'ar_name' => '17 ملم'],
                    ['code' => 'Type-MR19', 'name' => '19mm', 'ar_name' => '19 ملم'],
                    ['code' => 'Type-MR22', 'name' => '22mm', 'ar_name' => '22 ملم'],
                    ['code' => 'Type-MR24', 'name' => '24mm', 'ar_name' => '24 ملم'],
                ],
            ],

            // 13. Combination Spanner
            [
                'name'     => 'Combination Spanner',
                'ar_name'  => 'مفتاح مجمع',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Combination-Spanner.png',
                'variants' => [
                    ['code' => 'Type-CS8',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'Type-CS10', 'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'Type-CS11', 'name' => '11mm', 'ar_name' => '11 ملم'],
                    ['code' => 'Type-CS12', 'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'Type-CS13', 'name' => '13mm', 'ar_name' => '13 ملم'],
                    ['code' => 'Type-CS14', 'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'Type-CS15', 'name' => '15mm', 'ar_name' => '15 ملم'],
                    ['code' => 'Type-CS16', 'name' => '16mm', 'ar_name' => '16 ملم'],
                    ['code' => 'Type-CS17', 'name' => '17mm', 'ar_name' => '17 ملم'],
                    ['code' => 'Type-CS18', 'name' => '18mm', 'ar_name' => '18 ملم'],
                    ['code' => 'Type-CS19', 'name' => '19mm', 'ar_name' => '19 ملم'],
                    ['code' => 'Type-CS20', 'name' => '20mm', 'ar_name' => '20 ملم'],
                    ['code' => 'Type-CS21', 'name' => '21mm', 'ar_name' => '21 ملم'],
                    ['code' => 'Type-CS22', 'name' => '22mm', 'ar_name' => '22 ملم'],
                    ['code' => 'Type-CS24', 'name' => '24mm', 'ar_name' => '24 ملم'],
                    ['code' => 'Type-CS27', 'name' => '27mm', 'ar_name' => '27 ملم'],
                ],
            ],

            // 14. Combination Spanner Set 6pcs
            [
                'name'     => 'Combination Spanner Set 6pcs',
                'ar_name'  => 'طقم مفاتيح مجمعة 6 قطع',
                'group_id' => 11,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Combination-Spanner-Set-6pcs.png',
                'variants' => [
                    ['code' => 'COSPA1068', 'name' => '6PCS: 8mm, 9mm, 10mm, 12mm, 14mm, 17mm', 'ar_name' => '6 قطع: 8 ملم، 9 ملم، 10 ملم، 12 ملم، 14 ملم، 17 ملم'],
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