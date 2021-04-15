<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Doctor::factory()->count(30)->create();
    }
}
