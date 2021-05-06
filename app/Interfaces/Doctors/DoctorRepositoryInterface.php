<?php

namespace App\Interfaces\Doctors;

interface DoctorRepositoryInterface
{
    // get Doctor
    public function index();

    // create Doctor
    public function create();

    // store Doctor
    public function store($request);

    // update Doctor
    public function update($request);

    // destroy Doctor
    public function destroy($request);

    // destroy Doctor
    public function edit($id);

    // update_password
    public function update_password($request);

    // update_status
    public function update_status($request);

}
