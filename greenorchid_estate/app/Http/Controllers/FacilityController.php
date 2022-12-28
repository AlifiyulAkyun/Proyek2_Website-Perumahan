<?php

namespace App\Http\Controllers;
use App\Models\Facility;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
      
        $data=Facility::all();
        return view('facilities.index', ['data'=>$data]);
    }

public function store(Request $request)
{
    $validatedData=$request->validate([
        'nama'=>'required|max:255',
        'deskripsi'=>'required|max:255',
        'image'=>'image|file|max:10240',

    ]);
}
}