<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'address',
        'latitude',
        'longitude',
        'google_maps_link',
        'ar_name',
        'ar_address',
    ];
    public function phones()
{
    return $this->hasMany(DistributorPhone::class)->orderBy('sort');
}
}