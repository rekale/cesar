<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    protected $tables = [
        'users',
        'admins',
        'categories',
        'destinations',
        'banners',
        'transactions',
        'destination_transaction',
    ];


    protected $seeds = [
        UserSeeder::class,
        CategorySeeder::class,
        DestinationSeeder::class,
        TransactionSeeder::class,
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        foreach ($this->seeds as $seed) {
            $this->call($seed);
        }


    }
}
