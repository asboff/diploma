<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location',
        'category',
        'area',
        'description',
        'price',
        'area',
        'address',
        'images_dir'
    ];

    public function category(){
        $category = Category::find($this->category);
        return $category->name;
    }


}
