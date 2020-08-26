<?php

use Illuminate\Database\Seeder;

use App\Tasa;

class TasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tasa::class, 10)->create();
    }
}
