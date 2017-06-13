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
        Category::create([
            'name' => 'WISATA ALAM BEBAS PENDAKIAN GUNUNG',
            'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/gunung-1.jpg',
        ]);
        Category::create([
            'name' => 'WISATA ALAM BEBAS PANJAT TEBING',
            'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/panjat-1.jpg',
        ]);
        Category::create([
            'name' => 'WISATA ALAM BEBAS ARUNG JERAM',
            'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/arjer-1.jpg',
        ]);
        Category::create([
            'name' => 'WISATA ALAM BEBAS SUSUR GOA',
            'image' => 'https://d1o6t6wdv45461.cloudfront.net/s4/fm/120/newsletter/caving-1.jpg',
        ]);
    }
}
