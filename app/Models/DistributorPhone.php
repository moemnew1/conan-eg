<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorPhone extends Model
{
    use HasFactory;

    protected $fillable = [
        'distributor_id',
        'phone',
        'sort',
    ];

    // Relationship to distributor
    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }
}