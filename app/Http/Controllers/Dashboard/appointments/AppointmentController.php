<?php

namespace App\Http\Controllers\Dashboard\appointments;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){

        $appointments = Appointment::where('type','غير مؤكد')->get();
        return view('Dashboard.appointments.index',compact('appointments'));
    }

    public function index2(){

        $appointments = Appointment::where('type','مؤكد')->get();
        return view('Dashboard.appointments.index2',compact('appointments'));
    }

    public function approval(Request $request,$id){
        $appointment = Appointment::findorFail($id);
        $appointment->update([
            'type'=>'مؤكد',
            'appointment'=>$request->appointment
        ]);
        session()->flash('add');
        return back();
    }
}
