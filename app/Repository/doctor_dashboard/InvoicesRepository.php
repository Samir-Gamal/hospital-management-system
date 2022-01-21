<?php

namespace App\Repository\doctor_dashboard;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use App\Models\Invoice;
use App\Models\Ray;
use Illuminate\Support\Facades\Auth;

class InvoicesRepository implements InvoicesRepositoryInterface
{
    // قائمة الكشوفات تحت الاجراء
    public function index()
    {
        $invoices = Invoice::where('doctor_id',  Auth::user()->id)->where('invoice_status',1)->get();
        return view('Dashboard.Doctor.invoices.index',compact('invoices'));
    }

    // قائمة المراجعات
    public function reviewInvoices()
    {
        $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 2)->get();
        return view('Dashboard.Doctor.invoices.review_invoices', compact('invoices'));
    }

    // قائمة الفواتير المكتملة
    public function completedInvoices()

    {
        $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 3)->get();
        return view('Dashboard.Doctor.invoices.completed_invoices', compact('invoices'));
    }

    public function show($id)
    {
        $rays = Ray::findorFail($id);
        return view('Dashboard.Doctor.invoices.view_rays', compact('rays'));
    }
}
