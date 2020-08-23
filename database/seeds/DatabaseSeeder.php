<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array();
        $user['username'] = 'avec';
        $user['password'] = Hash::make('avec');
        $user['email'] = 'avectest@avec.com.br';
        $user['first_name'] = 'Avec';
        $user['last_name'] = 'Test';
        $user['active'] = 1;
        $user['deleted'] = 0;
        
        DB::table('usuario')->insert($user);
    }
}
