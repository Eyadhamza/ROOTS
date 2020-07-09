<?php

use App\Committee;
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
        //seeding user of three roles
       $AdminUser = User::firstOrCreate([
            'name'=>'Eyad hamza',
            'avatar'=>'/images/me.jpg',
            'email'=>'eyadhamza0@outlook.com',
            'password'=>bcrypt('123456789')
        ]);
        $RRUser = User::firstOrCreate([
            'name'=>'John Doe ',
            'avatar'=>'/images/default_avatar.png',
            'email'=>'eyadhamza00@outlook.com',
            'password'=>bcrypt('123456789')
        ]);
        $InstructorUser = User::firstOrCreate([
            'name'=>'John Smith',
            'email'=>'eyadhamza000@outlook.com',
            'avatar'=>'/images/default_avatar.png',
            'password'=>bcrypt('123456789')
        ]);
        $MemberUser = User::firstOrCreate([
            'name'=>'Johny ',
            'avatar'=>'/images/default_avatar.png',
            'email'=>'eyadhamza0000@outlook.com',
            'password'=>bcrypt('123456789')
        ]);


        //seeding articles that belong to certain users
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('articles')->insert([
            'user_id'=>1,
            'committee_id'=>1,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('articles')->insert([
            'user_id'=>2,
            'committee_id'=>2,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('articles')->insert([
            'user_id'=>3,
            'committee_id'=>3,
            'title'=>'this text is for testing',
            'image'=>'/images/default_article.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        //seeding achievements of certain users
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'this text is for testing',
            'image'=>'/images/default_achievement.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('achievements')->insert([
            'user_id'=>1,
            'title'=>'this text is for testing',
            'image'=>'/images/default_achievement.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('achievements')->insert([
            'user_id'=>2,
            'title'=>'my first achievement',
            'image'=>'/images/default_achievement.png',
            'description'=>'this iadsdaskdaskldjaslkdjaslkdjaslkdjaslkdaskldlakdsaklsdjalskdjaksdj'

        ]);
        DB::table('achievements')->insert([
            'user_id'=>3,
            'title'=>'this text is for testing',
            'image'=>'/images/default_achievement.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);

//seeding committees
            $committe1 =Committee::firstOrCreate([
            'name'=>'Security',
            'image'=>'/images/security.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);
        $committe2 =Committee::firstOrCreate([
            'name'=>'Network',
            'image'=>'/images/networks.jpg',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);
        $committe3 =Committee::firstOrCreate([
            'name'=>'UI/UX',

            'image'=>'/images/ui.jpg',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);
        $committe4 =Committee::firstOrCreate([
            'name'=>'IOS',
            'image'=>'/images/IOS.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);
        $committe5 =Committee::firstOrCreate([
            'name'=>'Android',
            'image'=>'/images/android.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);

        $AdminUser->AssignCommittee($committe1);
        $MemberUser->AssignCommittee($committe2);
        $RRUser->AssignCommittee($committe3);
        $MemberUser->AssignCommittee($committe4);
        $MemberUser->AssignCommittee($committe5);
        $InstructorUser->AssignCommittee($committe1);

        //seeding tracks
        DB::table('tracks')->insert([
            'name'=>'Android',
            'image'=>'/images/android.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing ',

        ]);
        DB::table('tracks')->insert([
            'name'=>'Security',
            'image'=>'/images/security.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('tracks')->insert([
            'name'=>'Network',
            'image'=>'/images/networks.jpg',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('tracks')->insert([
            'name'=>'UI/UX',
            'image'=>'/images/ui.jpg',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);
        DB::table('tracks')->insert([
            'name'=>'Graphics',
            'image'=>'/images/graphic.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing '

        ]);

        //seeding events
        DB::table('events')->insert([
            'name'=>'this text is for testing',
            'image'=>'/images/default_event.png',
            'description'=>'This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing This text is just for testing'

        ]);
        DB::table('events')->insert([
            'name'=>'this text is for testing',
            'image'=>'/images/default_event.png',
            'description'=>'this text is for testing'

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
