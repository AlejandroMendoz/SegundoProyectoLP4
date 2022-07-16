<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Facturaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\factura::factory(1000)->create();
    }
}
