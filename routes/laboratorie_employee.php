<?php


use App\Http\Controllers\Dashboard_Laboratorie_Employee\InvoiceController;
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

    Route::get('/dashboard/laboratorie_employee', function () {
        return view('Dashboard.dashboard_LaboratorieEmployee.dashboard');
    })->middleware(['auth:laboratorie_employee'])->name('dashboard.laboratorie_employee');
    //################################ end dashboard doctor #####################################

    Route::middleware(['auth:laboratorie_employee'])->group(function () {

    //############################# invoices route ##########################################
     Route::resource('invoices_laboratorie_employee', InvoiceController::class);
     Route::get('completed_invoices', [InvoiceController::class,'completed_invoices'])->name('completed_invoices');
     Route::get('view_laboratories/{id}', [InvoiceController::class,'view_laboratories'])->name('view_laboratories');
    //############################# end invoices route ######################################

    });



//---------------------------------------------------------------------------------------------------------------


    require __DIR__ . '/auth.php';

});





