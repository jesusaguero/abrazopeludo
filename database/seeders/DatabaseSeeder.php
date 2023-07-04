<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
    }

    public function createAdmin(){

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = '12345678';
        $user->role = 'admin';
        $user->save();
    }

}
