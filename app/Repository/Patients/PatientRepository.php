<?php


namespace App\Repository\Patients;
use App\Interfaces\Patients\PatientRepositoryInterface;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\PatientAccount;
use App\Models\ReceiptAccount;
use App\Models\single_invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class PatientRepository implements PatientRepositoryInterface
{
   public function index()
   {
       $Patients = Patient::all();
       return view('Dashboard.Patients.index',compact('Patients'));
   }

    public function Show($id)
    {
        $Patient = patient::findorfail($id);
        $invoices = Invoice::where('patient_id', $id)->get();
        $receipt_accounts = ReceiptAccount::where('patient_id', $id)->get();
        $Patient_accounts = PatientAccount::where('patient_id', $id)->get();

        return view('Dashboard.Patients.show', compact('Patient', 'invoices', 'receipt_accounts', 'Patient_accounts'));
    }

    public function create()
   {
       return view('Dashboard.Patients.create');
   }

   public function store($request)
   {
       try {
           $Patients = new Patient();
           $Patients->email = $request->email;
           $Patients->Password = Hash::make($request->Phone);
           $Patients->Date_Birth = $request->Date_Birth;
           $Patients->Phone = $request->Phone;
           $Patients->Gender = $request->Gender;
           $Patients->Blood_Group = $request->Blood_Group;
           $Patients->save();
           //insert trans
           $Patients->name = $request->name;
           $Patients->Address = $request->Address;
           $Patients->save();
           session()->flash('add');
           return redirect()->back();
       }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       }
   }

   public function edit($id)
   {
       $Patient = Patient::findorfail($id);
       return view('Dashboard.Patients.edit',compact('Patient'));
   }
   public function update($request)
   {
       $Patient = Patient::findOrFail($request->id);
       $Patient->email = $request->email;
       $Patient->Password = Hash::make($request->Phone);
       $Patient->Date_Birth = $request->Date_Birth;
       $Patient->Phone = $request->Phone;
       $Patient->Gender = $request->Gender;
       $Patient->Blood_Group = $request->Blood_Group;
       $Patient->save();
       // insert trans
       $Patient->name = $request->name;
       $Patient->Address = $request->Address;
       $Patient->save();
       session()->flash('edit');
       return redirect()->route('Patients.index');
   }

   public function destroy($request)
   {
       Patient ::destroy($request->id);
       session()->flash('delete');
       return redirect()->back();
   }
}
