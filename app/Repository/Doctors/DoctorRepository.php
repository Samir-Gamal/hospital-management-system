<?php
namespace App\Repository\Doctors;

use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Models\Doctor;
use App\Models\Image;
use App\Models\Section;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorRepository implements DoctorRepositoryInterface
{
    use UploadTrait;

    public function index()
    {
        $doctors = Doctor::all();
        return view('Dashboard.Doctors.index',compact('doctors'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('Dashboard.Doctors.add',compact('sections'));
    }


    public function store($request){

        DB::beginTransaction();

        try {

            $doctors = new Doctor();
            $doctors->email = $request->email;
            $doctors->password = Hash::make($request->password);
            $doctors->section_id = $request->section_id;
            $doctors->phone = $request->phone;
            $doctors->price = $request->price;
            $doctors->status = 1;
            $doctors->save();
            // store trans
            $doctors->name = $request->name;
            $doctors->appointments =implode(",",$request->appointments);
            $doctors->save();


            //Upload img
            $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$doctors->id,'App\Models\Doctor');

            DB::commit();
            session()->flash('add');
            return redirect()->route('Doctors.create');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    public function update($request)
    {
        $section = Section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Sections.index');
    }

    public function destroy($request)
    {
        Section::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }



}
