<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function show()
    {
        $diseases=Disease::all();
        return view("admin.disease",[
            "diseases"=>$diseases
        ]);
    }
}
