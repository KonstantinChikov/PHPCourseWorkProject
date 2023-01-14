<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\HouseLocation;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations =  HouseLocation::all();
        return view('house_location.index')->with(['house_location' => $locations]);
    }

    public function create()
    {
        return view('house_location.create');
    }

    public function store(LocationRequest $request)
    {
        $data = $request->except('_method', '_token');
        HouseLocation::create($data);

        return redirect(route('house_location.index'));
    }

    public function edit($id)
    {
        $location =  HouseLocation::find($id);
        return view('house_location.edit')->with(['house_location' => $location]);
    }

    public function update(LocationRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $location =  HouseLocation::find($id);
        if ($location){
            $location->update($data);
        }
        return redirect()->action([LocationController::class, 'index']);
    }

    public function delete($id){
        $location =  HouseLocation::find($id);
        if ($location){
            $location->delete();
        }
        return redirect()->back();
    }
}
