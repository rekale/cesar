<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Destination $destModel)
    {
        return $destModel->all()->toJson();
    }

    public function show($slug, Destination $destModel)
    {
        $destination = $destModel->with('banners')->whereSlug($slug)->firstOrFail();

        return view('front.show', compact('destination'));
    }

    public function listByCategory($slug, Category $catModel)
    {
        $name = implode(' ', explode('-', $slug));

        $category = $catModel->whereName($name)->first();
        $destinations = $category->destinations()->latest()->paginate(6);

        return view('front.category-list', compact('destinations', 'category'));
    }
}
