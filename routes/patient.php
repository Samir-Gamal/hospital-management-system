<?php


use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Patient\PatientController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use App\Http\Livewire\Chat\Createchat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    //################################ dashboard patient ########################################
    Route::get('/dashboard/patient', function () {
        return view('Dashboard.dashboard_patient.dashboard');
    })->middleware(['auth:patient'])->name('dashboard.patient');
    //################################ end dashboard patient #####################################

    Route::middleware(['auth:patient'])->group(function () {

        //############################# patients route ##########################################
        Route::get('invoices', [PatientController::class,'invoices'])->name('invoices.patient');
        Route::get('laboratories', [PatientController::class,'laboratories'])->name('laboratories.patient');
        Route::get('view_laboratories/{id}', [PatientController::class,'viewLaboratories'])->name('laboratories.view');
        Route::get('rays', [PatientController::class,'rays'])->name('rays.patient');
        Route::get('view_rays/{id}', [PatientController::class,'viewRays'])->name('rays.view');
        Route::get('payments', [PatientController::class,'payments'])->name('payments.patient');
        //############################# end patients route ######################################

        //############################# Chat route ##########################################
         Route::get('list/doctors',Createchat::class)->name('list.doctors');
         Route::get('chat/doctors',Main::class)->name('chat.doctors');
        //############################# end Chat route ######################################



    });


    require __DIR__ . '/auth.php';

});





