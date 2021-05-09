<?php


namespace App\Interfaces\Services;


interface SingleServiceRepositoryInterface
{

    // Get SingleServices
    public function index();

    // store SingleServices
    public function store($request);

    // update SingleServices
    public function update($request);

    // destroy SingleServices
    public function destroy($request);


}
