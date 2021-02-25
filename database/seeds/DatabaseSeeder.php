<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "spotadmin",
            'email' => 'hello@thespot.ma',
            'password' => bcrypt('spotadmin'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
// 9j3oSU3AUSRGIcks admin@mail.com