<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['id' => 1, 'name'=> 'not important'],
            ['id' => 2, 'name'=> 'important'],
            ['id' => 3, 'name'=> 'extremely important'],
            ['id' => 4, 'name'=> 'easy'],
            ['id' => 5, 'name'=> 'difficult'],
        ]);
    }
}
