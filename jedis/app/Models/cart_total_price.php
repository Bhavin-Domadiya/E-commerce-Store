<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_total_price extends Model
{
    protected $table = 'cart_total_price';
    use HasFactory;
    public $timestamps = false;
}
