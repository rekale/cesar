<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepo;

    public function __construct(Category $category)
    {
        $this->categoryRepo = $category;
    }

    public function index()
    {
        $categories = $this->categoryRepo->latest()->paginate();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->categoryRepo->create($request->all());

        flash('category have been created')->success();

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $category = $this->categoryRepo->findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $this->categoryRepo->whereId($id)->update($request->only('name'));

        flash('category successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->categoryRepo->destroy($id);

        flash('category have been deleted');

        return redirect()->back();
    }

}
