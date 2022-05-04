<?php

namespace Database\Seeders;

use App\Models\Credit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            Credit::create([
                'user_id' => 1,
                'amount' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
