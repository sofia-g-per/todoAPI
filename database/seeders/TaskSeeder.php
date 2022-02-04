<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            ['id' => 1, 'name'=> 'work', 'description' => 'work!'],
            ['id' => 2, 'name'=> 'rest', 'description' => 'rest!'],
            ['id' => 3, 'name'=> 'sleep', 'description' => 'sleep!'],
            ['id' => 4, 'name'=> 'cook', 'description' => 'cook!'],
            ['id' => 5, 'name'=> 'eat', 'description' => 'eat!']
        ]);
    }
}
