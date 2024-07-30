<?php

namespace App\Http\Controllers;

use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;


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

    public function edit_doctor(Request $request , $id){
        $doctor=doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $image=$request->file;
        $imageName=time() .".". $image->getClientOriginalExtension();
        $image->move(public_path("imagename"), $imageName);

        $doctor->image= $imageName;

        $doctor->save();

        return redirect ()->back()->with('message' , 'Doctor Updated Successfully.....');


    }

    public function email_view($id){

        $data=appointment::find($id);
        return view('admins.email_view', compact('data'));
    }

    public function email_send(Request $request , $id){

        $data=appointment::find($id);

        $details =[

            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart


        ];

        Notification::send($data ,new SendEmailNotification($details));

        return redirect()->back();

    }
}
