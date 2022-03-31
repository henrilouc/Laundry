<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type_id' => UserType::ADMIN,
            'name' => 'Henrique Elias' ,
            'email' => 'henrique.elias.melo@gmail.com',
            'password' => Hash::make('06079669'),
            'phone' => rand(8,10),
            'status' => 0,
            'birth'  => Carbon::createFromDate(1999, 07, 06, 'America/Sao_Paulo'),
            'cpf'   =>  '07034529167'
        ]);

        $faker = Faker::create();
        foreach (range(1,49) as $index) {
            User::create([
                'user_type_id' => UserType::GUEST,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make(rand(8, 10)),
                'phone' => $faker->phoneNumber,
                'status' => 0,
                'birth' => $faker->date,
                'cpf' => $faker->numberBetween(11111111111, 999999999)
            ]);
        }
    }
}
