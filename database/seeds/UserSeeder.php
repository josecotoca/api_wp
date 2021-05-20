<?php

use App\Models\Person;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'username' => 'jheredia',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'api_token' => null,
                'api_token_expiration' => null,
                'role_id' => 2,
                'person_id' => Person::all()->random()->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'username' => '64684684',
                'password' => \Illuminate\Support\Facades\Hash::make('64684684'),
                'api_token' => null,
                'api_token_expiration' => null,
                'role_id' => 2,
                'person_id' => Person::all()->random()->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'username' => '66574554',
                'password' => \Illuminate\Support\Facades\Hash::make('66574554'),
                'api_token' => null,
                'api_token_expiration' => null,
                'role_id' => 3,
                'person_id' => Person::all()->random()->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'username' => '1114565',
                'password' => \Illuminate\Support\Facades\Hash::make('1114565'),
                'api_token' => null,
                'api_token_expiration' => null,
                'role_id' => 4,
                'person_id' => Person::all()->random()->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
