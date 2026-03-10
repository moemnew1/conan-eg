<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductImage;

class Group13ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. Scraper
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Scraper',
                    'ar_name'        => 'مكشطة',
                    'link'           => 'https://conantools.net/product/scraper/',
                    'description'    => 'COSK03',
                    'ar_description' => 'COSK03',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片121.png',
            ],

            // 2. Cable Ties
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Cable Ties',
                    'ar_name'        => 'أربطة كابلات',
                    'link'           => 'https://conantools.net/product/cable-ties/',
                    'description'    => '100PCS',
                    'ar_description' => '100 قطعة',
                ],
                'variants' => [
                    ['code' => '2.5*100mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '2.5*100mm',  'ar_description' => '2.5×100 مم'],
                    ['code' => '2.5*150mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '2.5*150mm',  'ar_description' => '2.5×150 مم'],
                    ['code' => '3.6*200mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '3.6*200mm',  'ar_description' => '3.6×200 مم'],
                    ['code' => '3.6*250mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '3.6*250mm',  'ar_description' => '3.6×250 مم'],
                    ['code' => '3.6*300mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '3.6*300mm',  'ar_description' => '3.6×300 مم'],
                    ['code' => '3.6*400mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '3.6*400mm',  'ar_description' => '3.6×400 مم'],
                    ['code' => '4.8*200mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*200mm',  'ar_description' => '4.8×200 مم'],
                    ['code' => '4.8*250mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*250mm',  'ar_description' => '4.8×250 مم'],
                    ['code' => '4.8*300mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*300mm',  'ar_description' => '4.8×300 مم'],
                    ['code' => '4.8*350mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*350mm',  'ar_description' => '4.8×350 مم'],
                    ['code' => '4.8*400mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*400mm',  'ar_description' => '4.8×400 مم'],
                    ['code' => '4.8*450mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*450mm',  'ar_description' => '4.8×450 مم'],
                    ['code' => '4.8*500mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '4.8*500mm',  'ar_description' => '4.8×500 مم'],
                    ['code' => '7.6*500mm',  'link' => 'https://conantools.net/product/cable-ties/', 'description' => '7.6*500mm',  'ar_description' => '7.6×500 مم'],
                ],
                'image' => 'https://conantools.net/wp-content/uploads/2024/07/Cable-Ties.png',
            ],

            // 3. Tool Box
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Tool Box',
                    'ar_name'        => 'صندوق أدوات',
                    'link'           => 'https://conantools.net/product/tool-box/',
                    'description'    => 'Portable tool storage box available in 17 and 19 inch sizes.',
                    'ar_description' => 'صندوق تخزين أدوات محمول متوفر بمقاسين 17 و 19 بوصة.',
                ],
                'variants' => [
                    ['code' => 'COTB017', 'link' => 'https://conantools.net/product/tool-box/', 'description' => '17 Inch', 'ar_description' => '17 بوصة'],
                    ['code' => 'COTB019', 'link' => 'https://conantools.net/product/tool-box/', 'description' => '19 Inch', 'ar_description' => '19 بوصة'],
                ],
                'image' => 'https://conantools.net/wp-content/uploads/2024/07/Tool-Box.png',
            ],

            // 4. Tool Bag 3
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Tool Bag',
                    'ar_name'        => 'حقيبة أدوات',
                    'link'           => 'https://conantools.net/product/tool-bag-3/',
                    'description'    => 'COTB018',
                    'ar_description' => 'COTB018',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tool-Bag-3.png',
            ],

            // 5. Tool Bag 2
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Tool Bag',
                    'ar_name'        => 'حقيبة أدوات',
                    'link'           => 'https://conantools.net/product/tool-bag-2/',
                    'description'    => 'COTB016',
                    'ar_description' => 'COTB016',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tool-Bag-2.png',
            ],

            // 6. Tool Bag
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Tool Bag',
                    'ar_name'        => 'حقيبة أدوات',
                    'link'           => 'https://conantools.net/product/tool-bag/',
                    'description'    => 'COTB013',
                    'ar_description' => 'COTB013',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Tool-Bag-1.png',
            ],

            // 7. Safety Goggles
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Safety Goggles',
                    'ar_name'        => 'نظارات السلامة',
                    'link'           => 'https://conantools.net/product/safety-goggles/',
                    'description'    => 'COG608',
                    'ar_description' => 'COG608',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Safety-Goggles.png',
            ],

            // 8. Safety Goggles (Antifogging)
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Safety Goggles (Antifogging)',
                    'ar_name'        => 'نظارات السلامة (مضادة للضباب)',
                    'link'           => 'https://conantools.net/product/safety-goggles%ef%bc%88antifogging%ef%bc%89/',
                    'description'    => 'COG610',
                    'ar_description' => 'COG610',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Safety-Goggles（Antifogging）.png',
            ],

            // 9. Car Buffing Pad
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Car Buffing Pad',
                    'ar_name'        => 'قرص تلميع السيارة',
                    'link'           => 'https://conantools.net/product/car-buffing-pad/',
                    'description'    => 'COSP806 – 6 Inch',
                    'ar_description' => 'COSP806 – 6 بوصة',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Car-Buffing-Pad.png',
            ],

            // 10. Key Chuck 3 Pcs 13mm
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Key Chuck 3 Pcs 13mm',
                    'ar_name'        => 'تشاك مفتاح 3 قطع 13 مم',
                    'link'           => 'https://conantools.net/product/key-chuck-3-pcs-13mm/',
                    'description'    => 'CODC08131',
                    'ar_description' => 'CODC08131',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/3-Pcs-13mm-Key-Chuck.png',
            ],

            // 11. Wire Brush
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Wire Brush',
                    'ar_name'        => 'فرشاة سلكية',
                    'link'           => 'https://conantools.net/product/wire-brush/',
                    'description'    => 'COB08010 – Length: 250mm',
                    'ar_description' => 'COB08010 – الطول: 250 مم',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Wire-Brush.png',
            ],

            // 12. Gun For Polyurethane Foam
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Gun For Polyurethane Foam',
                    'ar_name'        => 'مسدس رغوة البولي يوريثان',
                    'link'           => 'https://conantools.net/product/gun-for-polyurethane-foam/',
                    'description'    => 'COPG810',
                    'ar_description' => 'COPG810',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Gun-For-Polyurethane-Foam.png',
            ],

            // 13. Ratchet PipeThreading
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Ratchet PipeThreading',
                    'ar_name'        => 'أداة تكريز الأنابيب بالرانشيت',
                    'link'           => 'https://conantools.net/product/ratchet-pipethreading/',
                    'description'    => 'Ratchet pipe threading tool available in two sizes.',
                    'ar_description' => 'أداة تكريز أنابيب بالرانشيت متوفرة بمقاسين.',
                ],
                'variants' => [
                    ['code' => 'COPT15', 'link' => 'https://conantools.net/product/ratchet-pipethreading/', 'description' => '1/2" 15mm', 'ar_description' => '1/2 بوصة – 15 مم'],
                    ['code' => 'COPT20', 'link' => 'https://conantools.net/product/ratchet-pipethreading/', 'description' => '3/4" 20mm', 'ar_description' => '3/4 بوصة – 20 مم'],
                ],
                'image' => 'https://conantools.net/wp-content/uploads/2024/07/Ratchet-PipeThreading.png',
            ],

            // 14. Thread Seal Tape
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Thread Seal Tape',
                    'ar_name'        => 'شريط إحكام الخيوط',
                    'link'           => 'https://conantools.net/product/thread-seal-tape/',
                    'description'    => 'COTS201925 – 19mm*0.25mm*20M',
                    'ar_description' => 'COTS201925 – 19 مم × 0.25 مم × 20 م',
                ],
                'variants' => [],
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Thread-Seal-Tape.png',
            ],

            // 15. Hand Riveter
            [
                'product' => [
                    'group_id'       => 13,
                    'name'           => 'Hand Riveter',
                    'ar_name'        => 'مسدس البراشيم اليدوي',
                    'link'           => 'https://conantools.net/product/hand-riveter/',
                    'description'    => 'Hand riveter available in two sizes.',
                    'ar_description' => 'مسدس البراشيم اليدوي متوفر بمقاسين.',
                ],
                'variants' => [
                    ['code' => 'CORG602', 'link' => 'https://conantools.net/product/hand-riveter/', 'description' => '9.5 Inch / 240mm', 'ar_description' => '9.5 بوصة / 240 مم'],
                    ['code' => 'CORG603', 'link' => 'https://conantools.net/product/hand-riveter/', 'description' => '10.5 Inch / 265mm', 'ar_description' => '10.5 بوصة / 265 مم'],
                ],
                'image' => 'https://conantools.net/wp-content/uploads/2024/07/Hand-Riveter.png',
            ],
        ];

        foreach ($products as $index => $data) {
            $product = Product::create($data['product']);

            // Create main product image
            ProductImage::create([
                'product_id' => $product->id,
                'image'      => $data['image'],
                'sort_order' => 1,
            ]);

            // Create variants if any
            foreach ($data['variants'] as $variantData) {
                ProductVariant::create(array_merge(
                    ['product_id' => $product->id],
                    $variantData
                ));
            }
        }
    }
}