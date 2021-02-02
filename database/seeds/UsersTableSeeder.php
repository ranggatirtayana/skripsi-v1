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
        DB::table('users')->insert([
            'name' => 'Rangga',
            'username' => 'developer',
            'password' => Hash::make('123qwe'),
            'level' => 'admin',
        ]);
    }
}
