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
            'status' => 'pending',
            'image' => '/candidate/1.jpg',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aoun 2',
            'email' => 'candidate2@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/candidate/2.jpg',
            'status' => 'pending',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aoun 3',
            'email' => 'candidate3@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/candidate/2.jpg',
            'status' => 'pending',
            'cnic' => '00000-0000000-0',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
        DB::table('institutes')->insert([
            [ 'name' => 'Company 1',
            'email' => 'user1@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/institute/1.jpg',
            'status' => 'active',
            'phone' => '923030672683',
            'address' => 'Sargodha,Punjab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Company 2',
            'email' => 'user2@mail.com',
            'password' => Hash::make('1234'),
            'image' => '/institute/2.jpg',
            'phone' => '923030672683',
            'address' => 'Sargodha,Punjab',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
    }
}
