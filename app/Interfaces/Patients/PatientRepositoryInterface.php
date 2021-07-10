<?php


namespace App\Interfaces\Patients;


interface PatientRepositoryInterface
{
    // Get All Patients
    public function index();
    // Create New Patients
    public function create();
    // Store new Patients
    public function store($request);
    // edit Patients
    public function edit($id);
    // show Patients
    public function show($id);
    // update Patients
    public function update($request);
    // Deleted Patients
    public function destroy($request);
}
