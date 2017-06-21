<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    private $destinationRepo;

    public function __construct(Destination $destination)
    {
        $this->destinationRepo = $destination;
    }

    public function index()
    {
        $destinations = $this->destinationRepo->with('category')->latest()->paginate();

        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $thumbpath = $request->file('thumbnail_image')->store('destinations/thumbnails', 'public');
        $input['thumbnail_image'] = "/storage/{$thumbpath}";

        foreach ($request->file('banners') as $banner) {
            $bannerPath = $banner->store('destinations/banners', 'public');
            $input['banners'][] = "/storage/{$bannerPath}";
        }

        DB::transaction(function() use ($input) {

            $destination = $this->destinationRepo->create($input);

            foreach ($input['banners'] as $banner) {
                $destination->images()->create(['link' => $banner]);
            }

        });
        flash('Destination have been created')->success();

        return redirect()->route('admin.destinations.index');
    }

    public function edit($id)
    {
        $destination = $this->destinationRepo->findOrFail($id);

        return view('admin.destinations.edit', compact('destination'));
    }

    public function update($id, Request $request)
    {
        $input = $request->only('title', 'category_id', 'location', 'abstract', 'description');

        if ($request->hasFile('thumbnail_image')) {
            $path = $request->file('thumbnail_image')->store('destinations', 'public');
            $input['thumbnail_image'] = "/storage/{$path}";
        }

        $this->destinationRepo->whereId($id)->update($input);

        flash('Destination successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->destinationRepo->destroy($id);

        flash('Destination have been deleted');

        return redirect()->back();
    }

}
