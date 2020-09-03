<?php

use Illuminate\Database\Seeder;

use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'  =>  'Jean',
        	'email'  =>  'profesorjeandiaz@gmail.com',
        	'password'  =>  bcrypt('tikery.27')
     	
        ]);
        User::create([
        	'name'  =>  'leonel',
        	'email'  =>  'leonel.camero@gmail.com',
        	'password'  =>  bcrypt('Password09')
     	
        ]);
    }
}
