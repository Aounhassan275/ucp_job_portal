<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [ 'name' => 'Aoun 1',
            'email' => 'admin1@mail.com',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aoun 2',
            'email' => 'admin2@mail.com',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
        DB::table('candidates')->insert([
            [ 'name' => 'Aoun 1',
            'email' => 'candidate1@mail.com',
            'password' => Hash::make('1234'),
            'code' => uniqid(),
            'status' => 'pending',
            'image' => '/candidate/1.jpg',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aoun 2',
            'email' => 'candidate2@mail.com',
            'password' => Hash::make('1234'),
            'code' => uniqid(),
            'image' => '/candidate/2.jpg',
            'status' => 'pending',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aoun 3',
            'email' => 'candidate3@mail.com',
            'password' => Hash::make('1234'),
            'code' => uniqid(),
            'image' => '/candidate/2.jpg',
            'status' => 'pending',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
        DB::table('services')->insert([
            [ 'name' => 'Service 1',
            'email' => 'service1@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/service/1.jpg',
            'phone' => '923030672683',
            'address' => 'Sargodha,Punjab',
            'time' => 'Full-Time',
            'type' => 'Contract',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! 
            Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil 
            officia numquam in. Deleniti pariatur at minima quaerat!',
            'code' => uniqid(),
            'status' => 'pending',
            'fb' => 'https://www.facebook.com/aoun.shah.79',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Service 2',
            'email' => 'service2@mail.com',
            'password' => Hash::make('1234'),
            'phone' => '923030672683',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! 
            Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil 
            officia numquam in. Deleniti pariatur at minima quaerat!',
            'address' => 'Sargodha,Punjab',
            'time' => 'Full-Time',
            'type' => 'Contract',
            'image' => '/service/2.jpg',
            'code' => uniqid(),
            'status' => 'pending',
            'fb' => 'https://www.facebook.com/aoun.shah.79',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
        DB::table('institutes')->insert([
            [ 'name' => 'Company 1',
            'email' => 'user1@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/institute/1.jpg',
            'code' => uniqid(),
            'status' => 'active',
            'phone' => '923030672683',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Company 2',
            'email' => 'user2@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/institute/2.jpg',
            'code' => uniqid(),
            'phone' => '923030672683',
            'address' => 'Sargodha,Punjab',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
    }
}
