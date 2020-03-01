<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_Bookmarks')->insert([
            'user_id'=>1234,
            'task_id'=>12345,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }
    
}
