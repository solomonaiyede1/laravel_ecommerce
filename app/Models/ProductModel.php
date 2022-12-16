<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = [
        'product_category', 'product_name', 'product_tag', 'product_part', 'product_price', 'product_description', 'product_image'
    ];

    public function productCategory(){
     $this->belongsTo('App\Models\CategoryModel');  
    }

}
