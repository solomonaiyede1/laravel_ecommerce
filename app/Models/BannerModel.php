<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BannerModel;

class BannerModel extends Model
{
    use HasFactory;
    protected $table='banner';
    protected $fillable=['id', 'title'];

}