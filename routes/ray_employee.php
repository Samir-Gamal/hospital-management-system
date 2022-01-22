<?php


use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
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


    //################################ dashboard doctor ########################################

    Route::get('/dashboard/ray_employee', function () {
        return view('Dashboard.dashboard_RayEmployee.dashboard');
    })->middleware(['auth:ray_employee'])->name('dashboard.ray_employee');
    //################################ end dashboard doctor #####################################

    Route::middleware(['auth:ray_employee'])->group(function () {

    //############################# invoices route ##########################################
     Route::resource('invoices_ray_employee', InvoiceController::class);
     Route::get('completed_invoices', [InvoiceController::class,'completed_invoices'])->name('completed_invoices');
     Route::get('view_rays/{id}', [InvoiceController::class,'viewRays'])->name('view_rays');

        //############################# end invoices route ######################################

    });



//---------------------------------------------------------------------------------------------------------------


    require __DIR__ . '/auth.php';

});





