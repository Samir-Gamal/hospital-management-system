<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
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
        $doctors =  Doctor::factory()->count(30)->create();
        $Appointments = Appointment::all()->random()->id;

        foreach ($doctors as $doctor){
            $doctor->doctorappointments()->attach($Appointments);
        }
//
//        Doctor::all()->each(function ($doctor) use ($Appointments) {
//            $doctor->doctorappointments()->attach(
//                $Appointments->random(rand(1,7))->pluck('id')->toArray()
//            );
//        });


    }
}
