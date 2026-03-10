<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group10ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Lithium-Ion Cordless Screwdriver
            [
                'name'     => 'Lithium-Ion Cordless Screwdriver',
                'ar_name'  => 'مفك براغي لاسلكي بمحرك ليثيوم أيون',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片121-1.png',
                'variants' => [
                    [
                        'code'    => 'COCS01',
                        'name'    => 'COCS01 – 3.6V, 1/4" Hex Shank, 250rpm, 3N.m, USB-C, 25pcs Bits',
                        'ar_name' => 'COCS01 – 3.6 فولت، ساق سداسية 1/4 بوصة، 250 دورة/دقيقة، 3 نيوتن.متر، شحن USB-C، 25 قطعة بت',
                    ],
                ],
            ],

            // 2. Screwdriver Set 8 Pcs
            [
                'name'     => 'Screwdriver Set 8 Pcs',
                'ar_name'  => 'طقم مفكات براغي 8 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片171.png',
                'variants' => [
                    [
                        'code'    => 'COS808',
                        'name'    => '8 Pcs',
                        'ar_name' => '8 قطع',
                    ],
                ],
            ],

            // 3. Ratchet Screwdriver 8 Pcs
            [
                'name'     => 'Ratchet Screwdriver 8 Pcs',
                'ar_name'  => 'مفك براغي راتشيت 8 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片161.png',
                'variants' => [
                    [
                        'code'    => 'COTR08',
                        'name'    => '8 Pcs',
                        'ar_name' => '8 قطع',
                    ],
                ],
            ],

            // 4. Screwdriver Set 5 Pcs
            [
                'name'     => 'Screwdriver Set 5 Pcs',
                'ar_name'  => 'طقم مفكات براغي 5 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片151.png',
                'variants' => [
                    [
                        'code'    => 'COS805',
                        'name'    => '5 Pcs',
                        'ar_name' => '5 قطع',
                    ],
                ],
            ],

            // 5. 2 in 1 Screwdriver
            [
                'name'     => '2 in 1 Screwdriver',
                'ar_name'  => 'مفك براغي 2 في 1',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片141.png',
                'variants' => [
                    [
                        'code'    => 'COS150',
                        'name'    => '6*100mm',
                        'ar_name' => '6*100 ملم',
                    ],
                ],
            ],

            // 6. Screwdriver (new range)
            [
                'name'     => 'Screwdriver',
                'ar_name'  => 'مفك براغي',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片131.png',
                'variants' => [
                    ['code' => 'COS153',  'name' => '5*75mm – 3 Inch (Slotted)',   'ar_name' => '5*75 ملم – 3 بوصة (مسطح)'],
                    ['code' => 'COS253',  'name' => '5*75mm + 3 Inch PH1',         'ar_name' => '5*75 ملم + 3 بوصة PH1'],
                    ['code' => 'COS164',  'name' => '6*100mm – 4 Inch (Slotted)',  'ar_name' => '6*100 ملم – 4 بوصة (مسطح)'],
                    ['code' => 'COS264',  'name' => '6*100mm + 4 Inch PH2',        'ar_name' => '6*100 ملم + 4 بوصة PH2'],
                    ['code' => 'COS165',  'name' => '6*125mm – 5 Inch (Slotted)',  'ar_name' => '6*125 ملم – 5 بوصة (مسطح)'],
                    ['code' => 'COS265',  'name' => '6*125mm + 5 Inch PH2',        'ar_name' => '6*125 ملم + 5 بوصة PH2'],
                    ['code' => 'COS166',  'name' => '6*150mm – 6 Inch (Slotted)',  'ar_name' => '6*150 ملم – 6 بوصة (مسطح)'],
                    ['code' => 'COS266',  'name' => '6*150mm + 6 Inch PH2',        'ar_name' => '6*150 ملم + 6 بوصة PH2'],
                ],
            ],

            // 7. Screw Driver SET 26 Pcs
            [
                'name'     => 'Screw Driver SET 26 Pcs',
                'ar_name'  => 'طقم مفكات براغي 26 قطعة',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screw-Driver-SET-26-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COS2826',
                        'name'    => '26 Pcs: Slotted (8pcs), Phillips (8pcs), Torx (6pcs), Pozi (4pcs)',
                        'ar_name' => '26 قطعة: مسطح (8 قطع)، فيليبس (8 قطع)، توركس (6 قطع)، بوزي (4 قطع)',
                    ],
                ],
            ],

            // 8. Screw Driver SET 10 Pcs
            [
                'name'     => 'Screw Driver SET 10 Pcs',
                'ar_name'  => 'طقم مفكات براغي 10 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screw-Driver-SET-10-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COS1028',
                        'name'    => '10 Pcs: SL6X38, PH2X38, SL3X75, PH0X75, PH1X150, PH1X75, SL5X75, PH2X100, SL6X125, SL5X150',
                        'ar_name' => '10 قطع: SL6X38، PH2X38، SL3X75، PH0X75، PH1X150، PH1X75، SL5X75، PH2X100، SL6X125، SL5X150',
                    ],
                ],
            ],

            // 9. VDE Screw Driver SET 7 Pcs
            [
                'name'     => 'VDE Screw Driver SET 7 Pcs',
                'ar_name'  => 'طقم مفكات براغي VDE 7 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/VDE-Screw-Driver-SET-7-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COSV0807',
                        'name'    => '7 Pcs: 1x Test Pen 140mm, Slotted (0.8x4x100mm, 1.0x5.5x125mm, 1.2x6.5x150mm), Phillips (PH0x75mm, PH1x80mm, PH2x100mm)',
                        'ar_name' => '7 قطع: قلم اختبار 140 ملم، مسطح (3 قطع)، فيليبس (PH0×75، PH1×80، PH2×100)',
                    ],
                ],
            ],

            // 10. Screw Driver SET 29 Pcs
            [
                'name'     => 'Screw Driver SET 29 Pcs',
                'ar_name'  => 'طقم مفكات براغي 29 قطعة',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screw-Driver-SET-29-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COS0829',
                        'name'    => '29 Pcs: Screwdrivers (9pcs) + 25mm Bits: PH1/PH2/PH3, SL3/4/5/6mm, PZ1/PZ2/PZ3, T10/T15/T20/T25/T30, H2/H3/H4/H5/H6',
                        'ar_name' => '29 قطعة: مفكات (9 قطع) + بتات 25 ملم: فيليبس، مسطح، بوزي، توركس، هكس',
                    ],
                ],
            ],

            // 11. T-bar Driver Set 28 Pcs
            [
                'name'     => 'T-bar Driver Set 28 Pcs',
                'ar_name'  => 'طقم مفك T-bar 28 قطعة',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/T-bar-Driver-Set-28-Pcs-1.png',
                'variants' => [
                    [
                        'code'    => 'COKZ010',
                        'name'    => '28 Pcs: 16pc 25mm Bits (Phillips/Pozi/Slotted/Torx) + 9pc Sockets (4–12mm) + Bit Holder + Adaptor + T-bar Driver',
                        'ar_name' => '28 قطعة: 16 بت 25 ملم (فيليبس/بوزي/مسطح/توركس) + 9 سوكيت (4–12 ملم) + حامل بت + محول + مفك T-bar',
                    ],
                ],
            ],

            // 12. Socket & Bit Tool Set 30 Pcs
            [
                'name'     => 'Socket & Bit Tool Set 30 Pcs',
                'ar_name'  => 'طقم سوكيت وبتات 30 قطعة',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/T-bar-Driver-Set-28-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COBX213',
                        'name'    => '30 Pcs: 13pc 25mm Bits + 8pc Precision Bits + 6pc Sockets (5–10mm) + Adaptor + Stubby Ratchet Handle',
                        'ar_name' => '30 قطعة: 13 بت 25 ملم + 8 بت دقيقة + 6 سوكيت (5–10 ملم) + محول + مقبض راتشيت قصير',
                    ],
                ],
            ],

            // 13. Socket & Bit Tool Set 23 Pcs
            [
                'name'     => 'Socket & Bit Tool Set 23 Pcs',
                'ar_name'  => 'طقم سوكيت وبتات 23 قطعة',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Socket-Bit-Tool-Set-23-Pcs.png',
                'variants' => [
                    [
                        'code'    => 'COAX212',
                        'name'    => '23 Pcs: 12pc 25mm Bits (Phillips/Slotted/Pozi/Torx) + 9pc Sockets (5–13mm) + 50mm Extension Bar + Offset Ratchet Driver',
                        'ar_name' => '23 قطعة: 12 بت 25 ملم (فيليبس/مسطح/بوزي/توركس) + 9 سوكيت (5–13 ملم) + قضيب تمديد 50 ملم + مفك راتشيت زاوية',
                    ],
                ],
            ],

            // 14. Screw Driver SET 7 Pcs
            [
                'name'     => 'Screw Driver SET 7 Pcs',
                'ar_name'  => 'طقم مفكات براغي 7 قطع',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screw-Driver-SET.png',
                'variants' => [
                    [
                        'code'    => 'COS0507',
                        'name'    => '7 Pcs: 1pc Bit Holder Driver + 6pc 25mm Bits (SL: 4mm, 5mm, 6mm / PH: PH1, PH2, PH3)',
                        'ar_name' => '7 قطع: حامل بت + 6 بتات 25 ملم (مسطح: 4، 5، 6 ملم / فيليبس: PH1، PH2، PH3)',
                    ],
                ],
            ],

            // 15. Screw Driver (old range)
            [
                'name'     => 'Screw Driver',
                'ar_name'  => 'مفك براغي',
                'group_id' => 10,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screw-Driver.png',
                'variants' => [
                    ['code' => 'COS285075', 'name' => '5*75mm + 3 Inch (PH)',       'ar_name' => '5*75 ملم + 3 بوصة (فيليبس)'],
                    ['code' => 'COS385075', 'name' => '5*75mm – 3 Inch (Slotted)',  'ar_name' => '5*75 ملم – 3 بوصة (مسطح)'],
                    ['code' => 'COS286100', 'name' => '6*100mm + 4 Inch (PH)',      'ar_name' => '6*100 ملم + 4 بوصة (فيليبس)'],
                    ['code' => 'COS386100', 'name' => '6*100mm – 4 Inch (Slotted)', 'ar_name' => '6*100 ملم – 4 بوصة (مسطح)'],
                    ['code' => 'COS286125', 'name' => '6*125mm + 5 Inch (PH)',      'ar_name' => '6*125 ملم + 5 بوصة (فيليبس)'],
                    ['code' => 'COS386125', 'name' => '6*125mm – 5 Inch (Slotted)', 'ar_name' => '6*125 ملم – 5 بوصة (مسطح)'],
                    ['code' => 'COS286150', 'name' => '6*150mm + 6 Inch (PH)',      'ar_name' => '6*150 ملم + 6 بوصة (فيليبس)'],
                    ['code' => 'COS386150', 'name' => '6*150mm – 6 Inch (Slotted)', 'ar_name' => '6*150 ملم – 6 بوصة (مسطح)'],
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