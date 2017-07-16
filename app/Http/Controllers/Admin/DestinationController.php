<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationRequest;
use App\Models\Banner;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    private $model;

    public function __construct(Destination $destination)
    {
        $this->model = $destination;
    }

    public function index()
    {
        $destinations = $this->model->with('category')->latest()->paginate();

        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(DestinationRequest $request)
    {
        $input = $request->all();

        $thumbpath = $request->file('thumbnail_image')->store('destinations/thumbnails', 'public');
        $input['thumbnail_image'] = "/storage/{$thumbpath}";
        $input['slug'] = str_slug($input['title']);




            DB::transaction(function() use ($input, $request) {

                $destination = $this->model->create($input);

                if($request->hasFile('banners')) {
                    foreach ($request->file('banners') as $banner) {
                        $bannerPath = $banner->store('destinations/banners', 'public');
                        $input['banners'][] = "/storage/{$bannerPath}";
                    }
                    foreach ($input['banners'] as $banner) {
                        $destination->banners()->create(['link' => $banner]);
                    }
                }

            });

        flash('Destination have been created')->success();

        return redirect()->route('admin.destinations.index');
    }

    public function edit($id)
    {
        $destination = $this->model->findOrFail($id);

        return view('admin.destinations.edit', compact('destination'));
    }

    public function update($id, DestinationRequest $request)
    {
        $input = $request->only(
            'title', 'category_id', 'tickets', 'ticket_price', 'location', 'abstract', 'description', 'lat', 'lng'
        );
        $input['slug'] = str_slug($input['title']);

        if ($request->hasFile('thumbnail_image')) {
            $path = $request->file('thumbnail_image')->store('destinations', 'public');
            $input['thumbnail_image'] = "/storage/{$path}";
        }

        $this->model->whereId($id)->update($input);

        if($request->hasFile('banners')) {

            Banner::whereDestinationId($id)->delete();

            foreach ($request->file('banners') as $banner) {
                $bannerPath = $banner->store('destinations/banners', 'public');
                $input['banners'][] = "/storage/{$bannerPath}";
            }

            DB::transaction(function() use ($input, $id) {

                foreach ($input['banners'] as $banner) {
                    Banner::create(['link' => $banner, 'destination_id' => $id]);
                }

            });
        }

        flash('Destination successfuly edited')->success();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->model->destroy($id);

        flash('Destination have been deleted');

        return redirect()->back();
    }

}
