<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['detail_name', 'name'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
