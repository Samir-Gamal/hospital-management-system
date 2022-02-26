<?php

namespace App\Interfaces\Dashboard_Laboratorie_Employee;

interface InvoicesRepositoryInterface
{
    public function index();
    public function completed_invoices();
    public function edit($id);
    public function update($request,$id);
    public function view_laboratories($id);
}
