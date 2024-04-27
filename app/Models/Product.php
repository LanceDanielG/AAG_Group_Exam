<?php
## Changes
namespace App\Models; //indicates where this class (Product) is located

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ //Mass assignment of Model Attribute
        'product_name',
        'product_quantity',
        'product_price',
        'product_description'
    ];
}
