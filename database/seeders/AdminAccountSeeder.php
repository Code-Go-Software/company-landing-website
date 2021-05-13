<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');

        $admin->save();
    }
}
