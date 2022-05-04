<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        foreach (range(1,10) as $index) {

            $randomInt = rand(1, 20);
            Transaction::create([
                'user_id' => 1,
                'value' => $randomInt,
                'amount' => $randomInt,
                'description' => $faker->realText,
                'status' => 'P',
                'type' => 0,
                'paymentReceipt' => $faker->image,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        foreach (range(1,10) as $index) {

            $randomInt = rand(1, 20);
            Transaction::create([
                'user_id' => 1,
                'value' => $randomInt,
                'amount' => $randomInt,
                'description' => $faker->realText,
                'status' => 'A',
                'type' => 1,
                'paymentReceipt' => $faker->image,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
