<?php


namespace App\Repository\insurances;
use App\Interfaces\insurances\insuranceRepositoryInterface;
use App\Models\Insurance;
use Illuminate\Database\Eloquent\Model;

class insuranceRepository implements insuranceRepositoryInterface
{

    public function index()
    {
        $insurances = insurance::all();
        return view('Dashboard.insurance.index', compact('insurances'));
    }

    public function create()
    {
        return view('Dashboard.insurance.create');
    }

    public function store($request)
    {
        try {
            $insurances = new insurance();
            $insurances->insurance_code = $request->insurance_code;
            $insurances->discount_percentage = $request->discount_percentage;
            $insurances->Company_rate = $request->Company_rate;
            $insurances->status = 1;
            $insurances->save();

            // insert trans
            $insurances->name = $request->name;
            $insurances->notes = $request->notes;
            $insurances->save();
            session()->flash('add');
            return redirect()->route('insurance.create');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $insurances = insurance::findorfail($id);
        return view('Dashboard.insurance.edit', compact('insurances'));
    }

    public function update($request)
    {
        if (!$request->has('status'))
            $request->request->add(['status' => 0]);
        else
            $request->request->add(['status' => 1]);

        $insurances = insurance::findOrFail($request->id);

        $insurances->update($request->all());

        // insert trans
        $insurances->name = $request->name;
        $insurances->notes = $request->notes;
        $insurances->save();

        session()->flash('edit');
        return redirect('insurance');
    }

    public function destroy($request)
    {
        insurance::destroy($request->id);
        session()->flash('delete');
        return redirect('insurance');
    }

}
