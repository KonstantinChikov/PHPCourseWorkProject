<?php

namespace App\Http\Controllers;

use App\Http\Requests\VillaRequest;
use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        $villas = Villa::all();
        return view('villa.index')->with(['villa' => $villas]);
    }
    public function create()
    {
        return view('villa.create');
    }

    public function store(VillaRequest $request)
    {
        echo $request;
        $data = $request->except('_method', '_token');
        Villa::create($data);

        return redirect(route('villa.index'));
    }

    public function edit($id)
    {
        $villa = Villa::find($id);
        return view('villa.edit')->with(['villa' => $villa]);
    }

    public function update(VillaRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $villa = Villa::find($id);
        if ($villa)
        {
            $villa->update($data);
        }
        return redirect()->action([VillaController::class, 'index']);
    }

    public function delete($id)
    {
        $villa = Villa::find($id);
        if ($villa)
        {
            $villa->delete();
        }
        return redirect()->back();
    }
}
