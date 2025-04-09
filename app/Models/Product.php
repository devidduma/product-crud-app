<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';

    protected $fillable = [
        'bleachingCode',
        'defaultLanguage',
        'dryCleaningCode',
        'dryingCode',
        'fasteningTypeCode',
        'ironingCode',
        'productID',
        'pulloutTypeCode',
        'sapPacket',
        'updateImages',
        'waistlineCode',
        'washabilityCode'
    ];
}
