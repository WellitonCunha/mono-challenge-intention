<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyIntention extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'address',
        'product_id',
    ];
}
