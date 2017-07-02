<?php

use App\Models\Destination;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
        $fake = Faker\Factory::create('id_ID');

        //create transaction
        foreach($users as $user) {
            for ($i=0; $i < 10; $i++) {
                $transaction = new Transaction(['user_id' => $user->id]);

                $isPurchased = $fake->boolean();

                if ($isPurchased) {
                    $transaction->confirmed = true;
                    $transaction->proof = $fake->imageUrl();
                }

                $transaction->save();

                $randDest = $destinations->random($fake->numberBetween(1, 5))->pluck('id');

                $transaction->destinations()->attach($randDest, [
                    'tickets' => $fake->numberBetween(1, 10),
                    'total' => $fake->numberBetween(10000, 1000000),
                ]);
            }
        }
    }
}
