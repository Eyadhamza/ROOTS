<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        //seeding user of three roles
       $AdminUser = User::firstOrCreate([
            'name'=>'eyad hamza 4',
            'avatar'=>'/images/me.jpg',
            'role'=>'Admin',
            'email'=>'eyaasdahamza000000100000@outlook.com',
            'tasks_performance'=>$faker->numberBetween(0,100),
            'interaction_performance'=>$faker->numberBetween(0,100),
            'knowledge_performance'=>$faker->numberBetween(0,100),
            'password'=>bcrypt('123456789')
        ]);
        $RRUser = User::firstOrCreate([
            'name'=>'eyad hamza 3',
            'avatar'=>'/images/me.jpg',
            'role'=>'RR',
            'email'=>'eyadhasdasdamza00100@outlook.com',
            'tasks_performance'=>$faker->numberBetween(0,100),
            'interaction_performance'=>$faker->numberBetween(0,100),
            'knowledge_performance'=>$faker->numberBetween(0,100),
            'password'=>bcrypt('123456789')
        ]);
        $InstructorUser = User::firstOrCreate([
            'name'=>'eyad Hamza',
            'role'=>'instructor',
            'email'=>$faker->email,
            'avatar'=>'/images/me.jpg',
            'tasks_performance'=>$faker->numberBetween(0,100),
            'interaction_performance'=>$faker->numberBetween(0,100),
            'knowledge_performance'=>$faker->numberBetween(0,100),
            'password'=>bcrypt('123456789')
        ]);
        $MemberUser = User::firstOrCreate([
            'name'=>'eyad hamza 2',
            'role'=>'member',
            'avatar'=>'/images/me.jpg',
            'email'=>'eyadhasdasdsddssaamza000000@outlook.com',
            'tasks_performance'=>$faker->numberBetween(0,100),
            'interaction_performance'=>$faker->numberBetween(0,100),
            'knowledge_performance'=>$faker->numberBetween(0,100),
            'password'=>bcrypt('123456789')
        ]);


        //seeding articles that belong to certain users
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('articles')->insert([
            'user_id'=>3,
            'committee_id'=>3,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        //seeding achievements of certain users
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('achievements')->insert([
            'user_id'=>2,
            'title'=>'my first achievement',
            'image'=>'/images/logo1.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>3,
            'title'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);

//seeding committees
        DB::table('committees')->insert([
            'name'=>'Security',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);
        DB::table('committees')->insert([
            'name'=>'Network',

            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);
        DB::table('committees')->insert([
            'name'=>'UI/UX',

            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);
        DB::table('committees')->insert([
            'name'=>'IOS',

            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);
        DB::table('committees')->insert([
            'name'=>'Android',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);

        //seeding tracks
        DB::table('tracks')->insert([
            'name'=>'Android',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph,

        ]);
        DB::table('tracks')->insert([
            'name'=>'Security',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('tracks')->insert([
            'name'=>'Network',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('tracks')->insert([
            'name'=>'UI/UX',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('tracks')->insert([
            'name'=>'Graphics',
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);

        //seeding events
        DB::table('events')->insert([
            'name'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->paragraph

        ]);
        DB::table('events')->insert([
            'name'=>$faker->title,
            'image'=>'/images/logo1.png',
            'description'=>$faker->title

        ]);
        //authorization system
        //seeding roles in create_roles_table
        $Admin = Role::firstOrCreate([
            'name'=>'Admin',
        ]);
        $RR= Role::firstOrCreate([
            'name'=>'RR',
        ]);
        $Instructor=Role::firstOrCreate([
            'name'=>'Instructor',
        ]);
        $Member= Role::firstOrCreate([
            'name'=>'Member',
        ]);
        //seeding the abilities now

        DB::table('abilities')->insert([
            'name'=>'AdminAbility',
        ]);
        DB::table('abilities')->insert([
            'name'=>'RRAbility',
        ]);
        DB::table('abilities')->insert([
            'name'=>'InstructorAbility',
        ]);

        //ASSIGNING abilities to admin
        $Admin->AllowAbility('AdminAbility');
        $Admin->AllowAbility('RRAbility');
        $Admin->AllowAbility('InstructorAbility');
        //ASSIGNING abilities to RR
        $RR->AllowAbility('RRAbility');
        $RR->AllowAbility('InstructorAbility');
        //ASSIGNING abilities to instructors
        $Instructor->AllowAbility('InstructorAbility');
        //ASSIGNING abilities to MEMBERS

        //giving roles to admins
        $AdminUser->AssignRole($Admin);
        //giving roles to RR
        $RRUser->AssignRole($RR);
        //giving roles to instructors
        $InstructorUser->AssignRole($Instructor);
        //giving roles to members
        $MemberUser->AssignRole($Member);
    }
}
