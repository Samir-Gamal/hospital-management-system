<?php

namespace App\Providers;

use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\Sections\SectionRepository;
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
