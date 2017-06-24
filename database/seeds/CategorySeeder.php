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
                'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/gunung-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS PANJAT TEBING',
                'name' => 'Wisata Tebing',
                'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/panjat-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS ARUNG JERAM',
                'name' => 'Wisata Arung jeram',
                'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/arjer-1.jpg',
            ],
            [
                'detail_name' => 'WISATA ALAM BEBAS SUSUR GOA',
                'name' => 'Wisata Goa',
                'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/caving-1.jpg',
            ],
        ];

        foreach($data as $cat) {
            Category::create($cat);
        }

    }
}
