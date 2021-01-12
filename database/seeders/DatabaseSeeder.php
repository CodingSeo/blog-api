<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($t = 0; $t < 10; $t ++){
            DB::table('users')->insert([
                'name' => Str::random(10)
            ]);
            $u_id = DB::getPdo()->lastInsertId();
            for($i = 0; $i < 10; $i ++){
                DB::table('posts')->insert([
                    'user_id'=> $u_id,
                    'name' => Str::random(10),
                    'content' => Str::random(30)
                ]);
            }
        }
    }
}
