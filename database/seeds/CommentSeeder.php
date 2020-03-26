<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->insert([
        ['user_id'=>"7",'post_id'=>7,'content'=>"comment one content"],
        ['user_id'=>"7",'post_id'=>8,'content'=>"comment two content"],
        ['user_id'=>"7",'post_id'=>9,'content'=>"comment three content"],
      ]);
    }
}
