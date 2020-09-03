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
            'rol'  =>  'Cliente',
        	'email'  =>  'profesorjeandiaz@gmail.com',
        	'password'  =>  bcrypt('tikery.27')
     	
        ]);
        User::create([
        	'name'  =>  'leonel',
            'rol'  =>  'Gerente',
        	'email'  =>  'leonel.camero@gmail.com',
        	'password'  =>  bcrypt('Password09')
     	
        ]);
        User::create([
            'name'  =>  'cliente',
            'rol'  =>  'Cliente',
            'email'  =>  'cliente@gmail.com',
            'password'  =>  bcrypt('1234')
        
        ]);
    }
}
