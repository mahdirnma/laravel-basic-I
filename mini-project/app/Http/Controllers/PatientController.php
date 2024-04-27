<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients=Patient::all();
        return view('home',[
            "patients"=>$patients
        ]);
    }
    public function show()
    {
        $patients=Patient::all();
        return view('admin.patient.index',[
            "patients"=>$patients
        ]);
    }
    public function add(){
        $diseases=Disease::all();
        return view('admin.patient.add',[
            "diseases"=>$diseases
        ]);
    }
    public function create(Request $request)
    {
        $validation=$request->validate([
            "firstname"=>"required|min:3",
            "lastname"=>"required|min:3",
            "age"=>"required|integer",
            "disease"=>"required|integer"
        ]);
        $firstname=request("firstname");
        $lastname=request("lastname");
        $age=request("age");
        $disease=request("disease");
        Patient::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "age"=>$age,
            "disease_id"=>$disease
        ]);
        return redirect("/admin/patient");
    }
    public function delete($id){
        $patient=Patient::find($id);
        $patient->delete();
        return redirect('/admin/patient');
    }
    public function update($id){
        $diseases=Disease::all();
        $patient=Patient::find($id);
        return view('admin.patient.update',[
            "patient"=>$patient,
            "diseases"=>$diseases
        ]);
    }
    public function edit(Request $request,$id){
        $validation=$request->validate([
            "firstname"=>"required|min:3",
            "lastname"=>"required|min:3",
            "age"=>"required|integer",
            "disease_id"=>"integer"
        ]);
        $firstname=request("firstname");
        $lastname=request("lastname");
        $age=request("age");
        $disease=request("disease");
        $patient=Patient::find($id);
        $patient->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "age"=>$age,
            "disease_id"=>$disease
        ]);
        return redirect('/admin/patient');
    }
}
