<?php

namespace App\Interfaces\doctor_dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index();

    // Get reviewInvoices Doctor
    public function reviewInvoices();

    // Get completedInvoices Doctor
    public function completedInvoices();

    // View rays
    public function show($id);

    // View Laboratories
    public function showLaboratorie($id);
}
