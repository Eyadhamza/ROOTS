<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'eyad',
            'role'=>'member',
            'email'=>'eyadhamza0@outlook.com',
            'tasks_performance'=>'100',
            'interaction_performance'=>'100',
            'knowledge_performance'=>'100',
            'password'=>'123456789'
        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'my first article',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'name'=>'my first achievement',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('committees')->insert([
            'name'=>'Security',

        ]);
    }
}
