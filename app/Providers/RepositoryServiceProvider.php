<?php

namespace App\Providers;

use App\Interfaces\Ambulances\AmbulanceRepositoryInterface;
use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Interfaces\insurances\insuranceRepositoryInterface;
use App\Interfaces\Patients\PatientRepositoryInterface;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Interfaces\Services\SingleServiceRepositoryInterface;
use App\Repository\Ambulances\AmbulanceRepository;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\insurances\insuranceRepository;
use App\Repository\Patients\PatientRepository;
use App\Repository\Sections\SectionRepository;
use App\Repository\Services\SingleServiceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, SingleServiceRepository::class);
        $this->app->bind(insuranceRepositoryInterface::class, insuranceRepository::class);
        $this->app->bind(AmbulanceRepositoryInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
