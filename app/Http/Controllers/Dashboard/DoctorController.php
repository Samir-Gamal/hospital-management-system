<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    private $Doctors;

    public function __construct(DoctorRepositoryInterface $Doctors)
    {
        $this->Doctors = $Doctors;
    }


    public function index()
    {
        return $this->Doctors->index();
    }


    public function create()
    {
        return $this->Doctors->create();
    }


    public function store(Request $request)
    {
        return $this->Doctors->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
