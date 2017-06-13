<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'title',
        'thumbnail_image',
        'category_id',
        'abstract',
        'description',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
