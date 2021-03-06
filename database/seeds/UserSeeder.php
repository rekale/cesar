<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'admin',
            'username' => 'admin',
        ]);

        factory(User::class, 10)->create();

        Admin::create([
            'email' => 'admin@test.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
