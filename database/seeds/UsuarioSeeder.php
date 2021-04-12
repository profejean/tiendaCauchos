<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name'       => 'Jean',
            'rol'        => 'Gerente',
            'cedula_rif' => '123',
            'direccion'  => '124',
            'telefono'   => '124',
            'email'      => 'pruebadecodigo@gmail.com',
            'password'   => bcrypt('123456.456'),

        ]);

    }
}
