<?php

use Illuminate\Database\Seeder;

use App\Layout;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Layout::class, 10)->create();
    }
}
