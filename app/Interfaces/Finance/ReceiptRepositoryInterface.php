<?php


namespace App\Interfaces\Finance;


interface ReceiptRepositoryInterface
{
    // get All Receipt
    public function index();

    // show form add
    public function create();

    // store Receipt
    public function store($request);

    // edit Receipt
    public function edit($id);

    // show Receipt
    public function show($id);

    // Update Receipt
    public function update($request);

    // destroy Receipt
    public function destroy($request);
}
