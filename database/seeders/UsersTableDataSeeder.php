<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'akhil',
            'email'=>'akhilesh48@gamil.com',
            'password'=>Hash::make(12345678),
            'Role'=>'1'
        ]);
    }
}
