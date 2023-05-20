<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (!User::where('email', 'admin@example.com')->exists()){
            User::create([
           'name' => 'feres',
           'email' => 'feres@gmail.com',
           'password' => Hash::make('123'),
           'role' => '1',
       ]);
    }
}
}
