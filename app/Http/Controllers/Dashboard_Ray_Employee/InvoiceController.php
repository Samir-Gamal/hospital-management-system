<?php

namespace App\Http\Controllers\Dashboard_Ray_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Ray_Employee\InvoicesRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    private $Ray_Employee;

    public function __construct(InvoicesRepositoryInterface $Ray_Employee)
    {
        $this->Ray_Employee = $Ray_Employee;
    }

    public function index()
    {
       return $this->Ray_Employee->index();
    }

    public function completed_invoices()
    {
        return $this->Ray_Employee->completed_invoices();
    }


    public function edit($id)
    {
        return $this->Ray_Employee->edit($id);
    }

    public function viewRays($id)
    {
        return $this->Ray_Employee->view_rays($id);
    }


    public function update(Request $request, $id)
    {
        return $this->Ray_Employee->update($request,$id);
    }


    public function destroy($id)
    {
        //
    }
}
