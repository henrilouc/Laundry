<?php

namespace Database\Seeders;

use App\Models\UserType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Hotel', 'Pousada', 'Pessoa'];
        foreach ($names as $name) {

            UserType::create([
                'name' => $name,
                'description' => $name,
                'inactivated_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        }
    }
}
