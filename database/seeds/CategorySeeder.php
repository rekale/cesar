<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'detail_name' => 'WISATA ALAM BEBAS PENDAKIAN GUNUNG',
                'name' => 'Wisata Gunung',
                'link' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/gunung-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS PANJAT TEBING',
                'name' => 'Wisata Tebing',
                'link' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/panjat-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS ARUNG JERAM',
                'name' => 'Wisata Arung jeram',
                'link' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/arjer-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS SUSUR GOA',
                'name' => 'Wisata Goa',
                'link' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/caving-1.jpg',
            ],
        ];

        foreach ($data as $category) {
            $cat = Category::create([
                'name' => $category['name'],
                'detail_name' => $category['detail_name'],
            ]);
            $cat->image()->create(['link' => $category['link']]);
        }
    }
}
