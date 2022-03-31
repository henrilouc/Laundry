<?php

namespace Database\Seeders;

use App\Models\LaundryService;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExtractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,200) as $index) {

            $randomInt = rand(1, 1000);
            LaundryService::create([
                'user_id' => 1,
                'description' => $faker->realText,
                'kilo' => $randomInt,
                'credit' => $randomInt,
                'paymentReceipt' => $faker->image,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status'  => 'P'
            ]);

        }
    }
}
