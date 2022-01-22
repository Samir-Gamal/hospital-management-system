<?php

namespace App\Interfaces\Dashboard_Ray_Employee;

interface InvoicesRepositoryInterface
{
    public function index();
    public function completed_invoices();
    public function edit($id);
    public function update($request,$id);
    public function view_rays($id);
}
