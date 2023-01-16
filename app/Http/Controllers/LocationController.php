<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations =  Location::all();
        return view('locations.index')->with(['location' => $locations]);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(LocationRequest $request)
    {
        $data = $request->except('_method', '_token');
        Location::create($data);

        return redirect(route('locations.index'));
    }

    public function edit($id)
    {
        $house_location =  Location::find($id);
        return view('locations.edit')->with(['house_location' => $house_location]);
    }

    public function update(LocationRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $location =  Location::find($id);
        if ($location){
            $location->update($data);
        }
        return redirect()->action([LocationController::class, 'index']);
    }

    public function delete($id){
        $location =  Location::find($id);
        if ($location){
            $location->delete();
        }
        return redirect()->back();
    }
}
