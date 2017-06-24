<?php

use App\Models\Category;
use App\Models\Destination;
use App\Models\Banner;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {

            $destinations = factory(Destination::class, 10)->create([
                'category_id' => $categories->random()->id,
            ]);

            foreach ($destinations as $destination) {
                $images = factory(Banner::class, 5)->make();
                $destination->banners()->saveMany($images);
            }


        }
    }
}
