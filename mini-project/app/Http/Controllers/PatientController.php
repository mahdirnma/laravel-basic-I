<?php

namespace App\Http\Controllers;

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
        return view('admin.patient.add');
    }
    public function create()
    {
        $firstname=request("firstname");
        $lastname=request("lastname");
        $age=request("age");
        Patient::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "age"=>$age,
            "disease_id"=>1
        ]);
        return redirect("/admin/patient");
    }
    public function delete($id){
        $patient=Patient::find($id);
        $patient->delete();
        return redirect('/admin/patient');
    }
    public function update($id){
        $patient=Patient::find($id);
        return view('admin.patient.update',[
            "patient"=>$patient
        ]);
    }
    public function edit($id){
        $firstname=request("firstname");
        $lastname=request("lastname");
        $age=request("age");
        $patient=Patient::find($id);
        $patient->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "age"=>$age,
            "disease_id"=>1
        ]);
        return redirect('/admin/patient');
    }
}
