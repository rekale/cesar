<?php

use App\Models\Destination;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all('id');
        $destinations = Destination::all('id');

        foreach($users as $user) {
            for ($i=0; $i < 10; $i++) {
               $purchase = factory(Purchase::class)->make([
                    'user_id' => $user->id,
                    'destination_id' => $destinations->random()->id,
                ]);
               $purchase->save();
            }
        }
    }
}
