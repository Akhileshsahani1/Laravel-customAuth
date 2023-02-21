<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Practice;
use App\Models\Calander;
use App\Models\Pracatice_Clander;
use App\Models\Provider_Practice;
use Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        Admin::create([
            'name'=>'Provider',
            'email'=>"Provider@gmail.com",
            'password'=>Hash::make(12345),
            'status'=>true,
            'Role'=>"provider"
        ]);
        Practice::create([
            'name'=>'Practice',
            'email'=>"Practice@gmail.com",
            'password'=>Hash::make(12345),
            'status'=>true,
            'Role'=>"practice"
        ]);
        		
        Calander::create([
            'provider_id'=>1,
            'start'=>"2023-02-09",
            'end'=>"2023-02-14",
           
        ]);
        Pracatice_Clander::create([
            'practice_id'=>1,
            'start'=>"2023-02-09",
            'end'=>"2023-02-14",
           
        ]);
        Provider_Practice::create([
            'practice_id'=>1,
            'admin_id'=>1,
            'start'=>"2023-02-09",
            'end'=>"2023-02-14",
           
        ]);
    }
}
