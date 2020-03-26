<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
          ['user_id'=>"7",'title'=>"please post it 1",'content'=>"posting it"],
          ['user_id'=>"7",'title'=>"please post it 2",'content'=>"posting it 2"],
          ['user_id'=>"7",'title'=>"please post it 3",'content'=>"posting it 3"],
        ]);
    }
}
