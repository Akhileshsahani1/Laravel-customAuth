<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calander;

class CalanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calander::create([

            'practice_id'=>2,
            'starting_date'=>"2023/02/7",
            'end_date'=>"2023/02/13"
            
            
        ]);
    }
}
