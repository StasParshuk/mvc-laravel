<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $guarded = [];
    protected $fillable = ['id', 'name', 'description'];

     public function products(){
         return $this->hasMany(Product::class);
     }

    public function images()
    {
        return $this->morphOne(Image::class,"images");
    }
}
