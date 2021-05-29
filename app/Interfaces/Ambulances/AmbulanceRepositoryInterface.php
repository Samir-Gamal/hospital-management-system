<?php


namespace App\Interfaces\Ambulances;


interface AmbulanceRepositoryInterface
{
    // Get Ambulance data
    public function index();
    // show form add
    public function create();
    //insert data
    public function store($request);
    //show form edit
    public function edit($id);
    //update data
    public function update($request);
    //delete data
    public function destroy($request);

}
