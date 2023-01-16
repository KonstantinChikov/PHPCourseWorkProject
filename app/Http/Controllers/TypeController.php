<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $house_type =  Type::all();
        return view('type.index')->with(['type' => $house_type]);
    }

    public function create()
    {
        return view('type.create');
    }

    public function store(TypeRequest $request)
    {
        $data = $request->except('_method', '_token');
        Type::create($data);

        return redirect(route('type.index'));
    }

    public function edit($id)
    {
        $type =  Type::find($id);
        return view('type.edit')->with(['type' => $type]);
    }

    public function update(TypeRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $type =  Type::find($id);
        if ($type){
            $type->update($data);
        }
        return redirect()->action([TypeController::class, 'index']);
    }

    public function delete($id){
        $type =  Type::find($id);
        if ($type){
            $type->delete();
        }
        return redirect()->back();
    }
}

