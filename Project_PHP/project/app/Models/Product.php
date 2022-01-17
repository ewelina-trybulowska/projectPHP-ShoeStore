<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function shelves() {
        return $this->hasMany(Shelf::class);
    }

    public function scopeAvailable($query){
        return $query->with('shelves')->has('shelves');
    }

    public function scopeOfType($query, $type){
        $category_id = DB::table('categories')->where('name', $type)->first()->id;
        return $query->where('category_id', $category_id);
    }

    protected $fillable = [
        'category_id',
        //'subcategory_id',
        'image_id',
        'brand',
        'model',
        'price',
        'description',
    ];
}
