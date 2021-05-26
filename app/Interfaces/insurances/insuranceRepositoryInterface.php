<?php


namespace App\Interfaces\insurances;


interface insuranceRepositoryInterface
{
    // Get All insurance
    public function index();

    // Create New insurance
    public function create();

    // Store new insurance
    public function store($request);

    // edit insurance
    public function edit($id);

    // update insurance
    public function update($request);

    // Deleted insurance
    public function destroy($request);
}
