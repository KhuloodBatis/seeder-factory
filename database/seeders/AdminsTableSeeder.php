<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert(array(
            array(
            'name' => "Onaa",
            'email' => 'Onaa@gmail.com',
            'password' => bcrypt('secret'),
            'created_at'=>now(),
            'updated_at'=>now(),
            //'remember_token'=>Str::random(10),
            'remember_token'=>hash('sha256', 'N7fp6GTjO9CJD1QIhqv0Ty1ZZbJeS3tFIbToFJZQ'),
            ),
            array(
            'name' => "lana",
            'email' => 'lana@gmail.com',
            'password' => bcrypt('secret'),
            'created_at'=>now(),
            'updated_at'=>now(),
            //'remember_token'=>Str::random(10),
            'remember_token'=>hash('sha256', 'N7fp6GTjO9CJD1QIhqv0Ty1ZZbJeS3tFIbToFJZQ'),
            )
            ));
    }
}
