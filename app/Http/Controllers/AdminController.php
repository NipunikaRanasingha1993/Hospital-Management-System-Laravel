<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function admins(){
        return view("admins.home");
    }

    public function addview(){
        return view("admins.add_doctor");
    }

    public function upload(Request $request){
        $doctor = new doctor;

        $image = $request->file;
        $imagename = time() .".". $image->getClientOriginalExtension();
        $image->move(public_path("imagename"), $imagename);
        $doctor->image=$imagename;

        $doctor->name= $request->name;
        $doctor->phone= $request->phone;
        $doctor->speciality= $request->speciality;
        $doctor->room= $request->room;

        $doctor->save();
        return redirect()->back()->with("message","Doctor Added Successfully..");

    }

    public function show_appointment(){

        $appData = appointment::all();
        return view("admins.show_appointment" , compact("appData"));
    }

    public function approved($id){
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();

        return redirect()->back();
    }

    public function canceled($id){
        $data=appointment::find($id);
        $data->status= 'canceled';
        $data->save();

        return redirect()->back();
    }

    public function show_doctor(){
        $docData = Doctor::all();
        return view ('admins.show_doctor' , compact('docData'));
    }

    public function delete_doctor($id){
        $oneDoctor=doctor::find($id);
        $oneDoctor->delete();

        return redirect()->back();
    }

    public function update_doctor($id){

        $data=doctor::find($id);
        return view('admins.update_doctor' , compact('data'));
    }
}
