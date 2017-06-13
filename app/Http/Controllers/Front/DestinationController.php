<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {

    }

    public function show($slug, Destination $destModel)
    {
        $title = implode(' ', explode('-', $slug));
        $destination = $destModel->with('images')->whereTitle($title)->first();

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
