<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Felipe',
            'lastname' => 'novoa',
            'phone' =>'55555555',
            'email' => 'felipenovoa@gmail.com',
            'password' =>'admin',
            'created_at'=>$now,
            'updated_at'=>$now,
        ]);

    }
}
