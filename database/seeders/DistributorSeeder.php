<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distributor;
use App\Models\DistributorPhone;

class DistributorSeeder extends Seeder
{
    public function run(): void
    {
for ($i = 1; $i <= 20; $i++) {
    $distributor = Distributor::create([
        'name' => "Distributor $i",
        'ar_name' => "الموزع $i",
        'logo' => "distributors/logo.jpg",
        'address' => "Street $i, Cairo, Egypt",
        'ar_address' => "شارع $i, القاهرة, مصر",
        'latitude' => 30.03 + mt_rand(-100, 100)/1000,
        'longitude' => 31.22 + mt_rand(-100, 100)/1000,
        'google_maps_link' => "https://www.google.com/maps?q=" . (30.03 + mt_rand(-100, 100)/1000) . "," . (31.22 + mt_rand(-100, 100)/1000),
    ]);

    // Add phones
    $phonesCount = rand(1,3);
    for ($j = 1; $j <= $phonesCount; $j++) {
        DistributorPhone::create([
            'distributor_id' => $distributor->id,
            'phone' => "+2010" . rand(10000000, 99999999),
            'sort' => $j,
        ]);
    }
}
    }
}