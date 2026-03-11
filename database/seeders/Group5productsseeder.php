<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Group5ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 1. 3PCS Mouth Lift Drill
            [
                'name'     => '3PCS Mouth Lift Drill',
                'ar_name'  => 'مثقاب رافع 3 قطع',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片71-2.png',
                'variants' => [
                    ['code' => 'COMD03', 'name' => 'COMD03 – 15-19mm / 18-24mm / 24-31mm', 'ar_name' => 'COMD03 – 15-19 ملم / 18-24 ملم / 24-31 ملم'],
                ],
            ],

            // 2. 3.0Ah Battery
            [
                'name'     => '3.0Ah Battery',
                'ar_name'  => 'بطارية 3.0 أمبير',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片101.png',
                'variants' => [
                    ['code' => 'COB21B', 'name' => 'COB21B – Suitable For COLH0821B / COLA08125 / COLW0821B / COLA0821A / COLC0621', 'ar_name' => 'COB21B – متوافق مع COLH0821B / COLA08125 / COLW0821B / COLA0821A / COLC0621'],
                ],
            ],

            // 3. 2.0Ah Battery
            [
                'name'     => '2.0Ah Battery',
                'ar_name'  => 'بطارية 2.0 أمبير',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2025/08/图片91-1.png',
                'variants' => [
                    ['code' => 'COB21A', 'name' => 'COB21A – Suitable For COLI0821A / COLI0821B / COLS0621B', 'ar_name' => 'COB21A – متوافق مع COLI0821A / COLI0821B / COLS0621B'],
                ],
            ],

            // 4. Screwdriver Bit 65mm PH2 S2 (version 2)
            [
                'name'     => 'Screwdriver Bit 65mm PH2 S2',
                'ar_name'  => 'بت مفك 65 ملم PH2 S2',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Screwdriver-Bit-65mm-PH2-S2-2.png',
                'variants' => [
                    ['code' => 'COB08365', 'name' => 'COB08365 – 10 Pcs 65mm*PH2 S2', 'ar_name' => 'COB08365 – 10 قطع 65 ملم * PH2 S2'],
                ],
            ],

            // 5. Plastic Magnetic Ring Bits
            [
                'name'     => 'Plastic Magnetic Ring Bits',
                'ar_name'  => 'بتات حلقة مغناطيسية بلاستيكية',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Plastic-Magnetic-Ring-Bits-1.png',
                'variants' => [
                    ['code' => 'COB07065', 'name' => 'COB07065 – 10 Pcs S2', 'ar_name' => 'COB07065 – 10 قطع S2'],
                ],
            ],

            // 6. Fully Ground Twist Drill Bit M35
            [
                'name'     => 'Fully Ground Twist Drill Bit M35',
                'ar_name'  => 'مثقاب لولبي مطحون بالكامل M35',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Fully-Ground-Twist-Drill-Bit-M35.png',
                'variants' => [
                    ['code' => 'COFD03',  'name' => '3mm',  'ar_name' => '3 ملم'],
                    ['code' => 'COFD04',  'name' => '4mm',  'ar_name' => '4 ملم'],
                    ['code' => 'COFD05',  'name' => '5mm',  'ar_name' => '5 ملم'],
                    ['code' => 'COFD06',  'name' => '6mm',  'ar_name' => '6 ملم'],
                    ['code' => 'COFD07',  'name' => '7mm',  'ar_name' => '7 ملم'],
                    ['code' => 'COFD08',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'COFD09',  'name' => '9mm',  'ar_name' => '9 ملم'],
                    ['code' => 'COFD10',  'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'COFD11',  'name' => '11mm', 'ar_name' => '11 ملم'],
                    ['code' => 'COFD12',  'name' => '12mm', 'ar_name' => '12 ملم'],
                ],
            ],

            // 7. Wall Hole Saw
            [
                'name'     => 'Wall Hole Saw',
                'ar_name'  => 'منشار ثقب للجدار',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Wall-Hole-Saw.png',
                'variants' => [
                    ['code' => 'COWHS025', 'name' => '25mm',  'ar_name' => '25 ملم'],
                    ['code' => 'COWHS030', 'name' => '30mm',  'ar_name' => '30 ملم'],
                    ['code' => 'COWHS035', 'name' => '35mm',  'ar_name' => '35 ملم'],
                    ['code' => 'COWHS040', 'name' => '40mm',  'ar_name' => '40 ملم'],
                    ['code' => 'COWHS045', 'name' => '45mm',  'ar_name' => '45 ملم'],
                    ['code' => 'COWHS050', 'name' => '50mm',  'ar_name' => '50 ملم'],
                    ['code' => 'COWHS055', 'name' => '55mm',  'ar_name' => '55 ملم'],
                    ['code' => 'COWHS060', 'name' => '60mm',  'ar_name' => '60 ملم'],
                    ['code' => 'COWHS065', 'name' => '65mm',  'ar_name' => '65 ملم'],
                    ['code' => 'COWHS068', 'name' => '68mm',  'ar_name' => '68 ملم'],
                    ['code' => 'COWHS070', 'name' => '70mm',  'ar_name' => '70 ملم'],
                    ['code' => 'COWHS075', 'name' => '75mm',  'ar_name' => '75 ملم'],
                    ['code' => 'COWHS080', 'name' => '80mm',  'ar_name' => '80 ملم'],
                    ['code' => 'COWHS090', 'name' => '90mm',  'ar_name' => '90 ملم'],
                    ['code' => 'COWHS095', 'name' => '95mm',  'ar_name' => '95 ملم'],
                    ['code' => 'COWHS100', 'name' => '100mm', 'ar_name' => '100 ملم'],
                    ['code' => 'COWHS110', 'name' => '110mm', 'ar_name' => '110 ملم'],
                    ['code' => 'COWHS115', 'name' => '115mm', 'ar_name' => '115 ملم'],
                    ['code' => 'COWHS120', 'name' => '120mm', 'ar_name' => '120 ملم'],
                    ['code' => 'COWHS130', 'name' => '130mm', 'ar_name' => '130 ملم'],
                    ['code' => 'COWHS150', 'name' => '150mm', 'ar_name' => '150 ملم'],
                ],
            ],

            // 8. Glass Diamond Hole Saw
            [
                'name'     => 'Glass Diamond Hole Saw',
                'ar_name'  => 'منشار ثقب ماسي للزجاج',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Glass-Diamond-Hole-Saw.png',
                'variants' => [
                    ['code' => 'COGDHS06',  'name' => '6mm',  'ar_name' => '6 ملم'],
                    ['code' => 'COGDHS08',  'name' => '8mm',  'ar_name' => '8 ملم'],
                    ['code' => 'COGDHS10',  'name' => '10mm', 'ar_name' => '10 ملم'],
                    ['code' => 'COGDHS12',  'name' => '12mm', 'ar_name' => '12 ملم'],
                    ['code' => 'COGDHS14',  'name' => '14mm', 'ar_name' => '14 ملم'],
                    ['code' => 'COGDHS16',  'name' => '16mm', 'ar_name' => '16 ملم'],
                    ['code' => 'COGDHS20',  'name' => '20mm', 'ar_name' => '20 ملم'],
                    ['code' => 'COGDHS22',  'name' => '22mm', 'ar_name' => '22 ملم'],
                    ['code' => 'COGDHS25',  'name' => '25mm', 'ar_name' => '25 ملم'],
                    ['code' => 'COGDHS30',  'name' => '30mm', 'ar_name' => '30 ملم'],
                    ['code' => 'COGDHS35',  'name' => '35mm', 'ar_name' => '35 ملم'],
                    ['code' => 'COGDHS40',  'name' => '40mm', 'ar_name' => '40 ملم'],
                    ['code' => 'COGDHS42',  'name' => '42mm', 'ar_name' => '42 ملم'],
                    ['code' => 'COGDHS45',  'name' => '45mm', 'ar_name' => '45 ملم'],
                    ['code' => 'COGDHS50',  'name' => '50mm', 'ar_name' => '50 ملم'],
                    ['code' => 'COGDHS55',  'name' => '55mm', 'ar_name' => '55 ملم'],
                    ['code' => 'COGDHS60',  'name' => '60mm', 'ar_name' => '60 ملم'],
                    ['code' => 'COGDHS65',  'name' => '65mm', 'ar_name' => '65 ملم'],
                ],
            ],

            // 9. Diamond Hole Saw
            [
                'name'     => 'Diamond Hole Saw',
                'ar_name'  => 'منشار ثقب ماسي',
                'group_id' => 5,
                'image'    => 'https://conantools.net/wp-content/uploads/2024/07/Diamond-Hole-Saw.png',
                'variants' => [
                    ['code' => 'CODHS006', 'name' => '6mm',   'ar_name' => '6 ملم'],
                    ['code' => 'CODHS008', 'name' => '8mm',   'ar_name' => '8 ملم'],
                    ['code' => 'CODHS010', 'name' => '10mm',  'ar_name' => '10 ملم'],
                    ['code' => 'CODHS012', 'name' => '12mm',  'ar_name' => '12 ملم'],
                    ['code' => 'CODHS014', 'name' => '14mm',  'ar_name' => '14 ملم'],
                    ['code' => 'CODHS016', 'name' => '16mm',  'ar_name' => '16 ملم'],
                    ['code' => 'CODHS018', 'name' => '18mm',  'ar_name' => '18 ملم'],
                    ['code' => 'CODHS020', 'name' => '20mm',  'ar_name' => '20 ملم'],
                    ['code' => 'CODHS022', 'name' => '22mm',  'ar_name' => '22 ملم'],
                    ['code' => 'CODHS025', 'name' => '25mm',  'ar_name' => '25 ملم'],
                    ['code' => 'CODHS028', 'name' => '28mm',  'ar_name' => '28 ملم'],
                    ['code' => 'CODHS030', 'name' => '30mm',  'ar_name' => '30 ملم'],
                    ['code' => 'CODHS032', 'name' => '32mm',  'ar_name' => '32 ملم'],
                    ['code' => 'CODHS035', 'name' => '35mm',  'ar_name' => '35 ملم'],
                    ['code' => 'CODHS038', 'name' => '38mm',  'ar_name' => '38 ملم'],
                    ['code' => 'CODHS040', 'name' => '40mm',  'ar_name' => '40 ملم'],
                    ['code' => 'CODHS042', 'name' => '42mm',  'ar_name' => '42 ملم'],
                    ['code' => 'CODHS045', 'name' => '45mm',  'ar_name' => '45 ملم'],
                    ['code' => 'CODHS050', 'name' => '50mm',  'ar_name' => '50 ملم'],
                    ['code' => 'CODHS055', 'name' => '55mm',  'ar_name' => '55 ملم'],
                    ['code' => 'CODHS060', 'name' => '60mm',  'ar_name' => '60 ملم'],
                    ['code' => 'CODHS065', 'name' => '65mm',  'ar_name' => '65 ملم'],
                    ['code' => 'CODHS068', 'name' => '68mm',  'ar_name' => '68 ملم'],
                    ['code' => 'CODHS070', 'name' => '70mm',  'ar_name' => '70 ملم'],
                    ['code' => 'CODHS075', 'name' => '75mm',  'ar_name' => '75 ملم'],
                    ['code' => 'CODHS080', 'name' => '80mm',  'ar_name' => '80 ملم'],
                    ['code' => 'CODHS085', 'name' => '85mm',  'ar_name' => '85 ملم'],
                    ['code' => 'CODHS090', 'name' => '90mm',  'ar_name' => '90 ملم'],
                    ['code' => 'CODHS095', 'name' => '95mm',  'ar_name' => '95 ملم'],
                    ['code' => 'CODHS100', 'name' => '100mm', 'ar_name' => '100 ملم'],
                    ['code' => 'CODHS110', 'name' => '110mm', 'ar_name' => '110 ملم'],
                    ['code' => 'CODHS120', 'name' => '120mm', 'ar_name' => '120 ملم'],
                    ['code' => 'CODHS130', 'name' => '130mm', 'ar_name' => '130 ملم'],
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
            // Failed to download image, leave $imagePath as null
        }
    }

    // --- UPDATED: only insert if we have an image or use default ---
    if (!$imagePath) {
        // Option 1: Skip inserting if no image
        // continue; // <- if you want to skip ProductImage entirely

        // Option 2: Use a default image
        $imagePath = 'products/default.png'; // make sure this exists in storage/app/public/products/
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