<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            "name" => "Naufal Alfadhil",
            "email" => "naufal@nafaarts.com",
            "hak_akses" => "administrator",
            "password" => Hash::make('admin')
        ]);
    }
}