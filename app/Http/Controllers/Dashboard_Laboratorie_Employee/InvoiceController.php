<?php

namespace App\Http\Controllers\Dashboard_Laboratorie_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Laboratorie_Employee\InvoicesRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    private $Laboratorie_Employee;

    public function __construct(InvoicesRepositoryInterface $Laboratorie_Employee)
    {
        $this->Laboratorie_Employee = $Laboratorie_Employee;
    }

    public function index()
    {
        return $this->Laboratorie_Employee->index();
    }

    public function completed_invoices()
    {
        return $this->Laboratorie_Employee->completed_invoices();
    }


    public function edit($id)
    {
        return $this->Laboratorie_Employee->edit($id);
    }

    public function view_laboratories($id)
    {
        return $this->Laboratorie_Employee->view_laboratories($id);
    }


    public function update(Request $request, $id)
    {
        return $this->Laboratorie_Employee->update($request,$id);
    }


    public function destroy($id)
    {
        //
    }
}
