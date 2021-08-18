<?php

namespace App\Repository\doctor_dashboard;

use App\Interfaces\doctor_dashboard\DiagnosisRepositoryInterface;
use App\Models\Diagnostic;

class DiagnosisRepository implements DiagnosisRepositoryInterface
{
    public function store($request)
    {
        try {
            $diagnosis = new Diagnostic();
            $diagnosis->date = date('Y-m-d');
            $diagnosis->diagnosis = $request->diagnosis;
            $diagnosis->medicine = $request->medicine;
            $diagnosis->invoice_id = $request->invoice_id;
            $diagnosis->patient_id = $request->patient_id;
            $diagnosis->doctor_id = $request->doctor_id;
            $diagnosis->save();
            session()->flash('add');
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $patient_records = Diagnostic::where('patient_id',$id)->get();
        return view('Dashboard.Doctor.invoices.patient_record',compact('patient_records'));
    }
}
