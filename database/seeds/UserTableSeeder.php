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
            'name'=>'eyad Hamza',
            'role'=>'member',
            'email'=>'asdasoutlook.com',
            'avatar'=>'/images/logo1.png',
            'tasks_performance'=>'100',
            'interaction_performance'=>'100',
            'knowledge_performance'=>'100',
            'password'=>'123456789'
        ]);
        DB::table('users')->insert([
            'name'=>'eyad hamza 2',
            'role'=>'instructor',
            'avatar'=>'/images/logo1.png',
            'email'=>'eyadhamza00@outlook.com',
            'tasks_performance'=>'100',
            'interaction_performance'=>'100',
            'knowledge_performance'=>'100',
            'password'=>'123456789'
        ]);
        DB::table('users')->insert([
            'name'=>'eyad hamza 2',
            'avatar'=>'/images/logo1.png',
            'role'=>'RR',
            'email'=>'eyadhamza000@outlook.com',
            'tasks_performance'=>'100',
            'interaction_performance'=>'100',
            'knowledge_performance'=>'100',
            'password'=>'123456789'
        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'my first article',
            'image'=>'/images/logo1.png',
            'description'=>'this is my first article'

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'my first article',
            'image'=>'/images/logo1.png',
            'description'=>'this is my second article'

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'my first article',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>'my first article',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>'my first article',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('articles')->insert([
            'user_id'=>3,
            'committee_id'=>3,
            'title'=>'my  article',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);

        DB::table('committees')->insert([
            'name'=>'Security',

            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('committees')->insert([
            'name'=>'Network',

            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('committees')->insert([
            'name'=>'UI/UX',

            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('committees')->insert([
            'name'=>'IOS',

            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('committees')->insert([
            'name'=>'Android',

            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('tracks')->insert([
            'name'=>'Android',
            'instructors'=>'eyad hamza , eyad hamza2',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('tracks')->insert([
            'name'=>'Security',
            'instructors'=>'eyad hamza , eyad hamza2',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('tracks')->insert([
            'name'=>'Network',
            'instructors'=>'eyad hamza , eyad hamza2',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('tracks')->insert([
            'name'=>'UI/UX',
            'instructors'=>'eyad hamza , eyad hamza2',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('tracks')->insert([
            'name'=>'Graphics',
            'instructors'=>'eyad hamza , eyad hamza2',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('events')->insert([
            'name'=>'find your route',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('events')->insert([
            'name'=>'Graphics',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
    }
}
