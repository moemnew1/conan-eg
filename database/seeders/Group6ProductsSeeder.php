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