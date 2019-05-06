<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'bestcyt',
            'email' => '850160757@qq.com',
            'password' => bcrypt('cyt850160757'),
        ]);
    }
}
