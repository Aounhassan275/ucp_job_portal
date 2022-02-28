<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'name' => 'IT',
            'price' => '150'],
            
            ['name' => 'Bussiness',
            'price' => '250'],

            ['name' => 'Education',
            'price' => '250'],
        ]);   
        DB::table('prices')->insert([
            [ 'page' => 'Institute'],
            
            ['page' => 'Service Provider'],
        ]);   
        DB::table('skills')->insert([
            [ 'name' => 'IT',
            'price' => '150'],
            
            ['name' => 'Bussiness',
            'price' => '250'],

            ['name' => 'Education',
            'price' => '250'],
        ]);  
        DB::table('s_deposits')->insert([
            [ 'skill_id' => '1',
            't_id' => '1234',
            'payment' => 'jazzcash',
            'service_id' => '1',
            'status' => 'active',
            'price' => '150'],
            
            [ 'skill_id' => '2',
            't_id' => '1234',
            'payment' => 'jazzcash',
            'service_id' => '2',
            'status' => 'active',
            'price' => '250'],
        ]);  
        DB::table('profiles')->insert([
            [ 'name' => 'Aoun Hassan',
             'fname' => 'Israr Hussain',
            'email' => 'candidate1@mail.com',
            'professional' => 'Web Developer',
            'number' => '923030672683',
            'status' => 'Not Approved',
            'image' => '/profile/1.jpg',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'candidate_id' => '1',
            'social' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!',
            'qualification' => 'Msc(Information Technology)',
            'job_description' => 'Qui corrupti animi, dignissimos veritatis, necessitatibus consequuntur nobis, placeat beatae dolorum ullam harum at atque dolor! Accusantium cupiditate ipsum placeat, vel voluptatibus non eaque, animi neque minima facere provident aspernatur!',
            'url_fb' => 'https://www.facebook.com/aoun.shah.79'],
            [ 'name' => 'Aoun Hassan 2',
            'fname' => 'Israr Hussain',
           'email' => 'candidate2@mail.com',
           'professional' => 'Web Developer',
           'number' => '923030672683',
           'status' => 'Not Approved',
           'image' => '/profile/1.jpg',
           'cnic' => '00000-0000000-0',
           'address' => 'Sargodha,Punjab',
           'candidate_id' => '2',
           'social' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! 
           Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil 
           officia numquam in. Deleniti pariatur at minima quaerat!',
           'qualification' => 'Msc(Information Technology)',
           'job_description' => 'Qui corrupti animi, dignissimos veritatis, necessitatibus consequuntur nobis, placeat beatae dolorum ullam harum at atque dolor! Accusantium cupiditate ipsum placeat, vel voluptatibus non eaque, animi neque minima facere provident aspernatur!',
           'url_fb' => 'https://www.facebook.com/aoun.shah.79'],
           [ 'name' => 'Aoun Hassan 3',
           'fname' => 'Israr Hussain',
          'email' => 'candidate2@mail.com',
          'professional' => 'Web Developer',
          'number' => '923030672683',
          'status' => 'Not Approved',
          'image' => '/profile/1.jpg',
          'cnic' => '00000-0000000-0',
          'address' => 'Sargodha,Punjab',
          'candidate_id' => '3',
          'social' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!',
          'qualification' => 'Msc(Information Technology)',
          'job_description' => 'Qui corrupti animi, dignissimos veritatis, necessitatibus consequuntur nobis, placeat beatae dolorum ullam harum at atque dolor! Accusantium cupiditate ipsum placeat, vel voluptatibus non eaque, animi neque minima facere provident aspernatur!',
          'url_fb' => 'https://www.facebook.com/aoun.shah.79'],
          
        ]);
        DB::table('jobs')->insert([
            [ 'title' => 'Web Developer',
             'type' => 'Full Time',
            'salary' => '45000',
            'location' => 'Sargodha,Punjab',
            'category_id' => '1',
            'institute_id' => '1',
            'qualification' => 'MSC',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!'],
            [ 'title' => 'Accountant',
            'type' => 'Full Time',
           'salary' => '45000',
           'location' => 'Sargodha,Punjab',
           'category_id' => '2',
           'institute_id' => '1',
           'qualification' => 'MSC',
           'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!'],
           [ 'title' => 'Teacher',
           'type' => 'Full Time',
          'salary' => '45000',
          'location' => 'Sargodha,Punjab',
          'qualification' => 'MSC',
          'category_id' => '3',
          'institute_id' => '2',
          'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!'],
          
        ]);
    }
}
