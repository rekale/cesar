<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail_image',
        'category_id',
        'abstract',
        'description',
        'location',
        'long',
        'lat',
        'tickets',
    ];

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
