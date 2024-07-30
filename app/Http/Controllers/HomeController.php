<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->userType === 'user'){

                $doctor = doctor::all();
                return view('user.home' , compact('doctor'));
            }else{
                return view('admins.home');
            }

        }
        else{
            return redirect()->back();
        }
    }
    public function index(){

        if(Auth::id()){
            return redirect('/home');
        }

        else{

            $doctor = doctor::all();
            return view("user.home" , compact("doctor"));
        }

    }

    public function appointment(Request $request){

        $appointment = new appointment;
        
        $appointment->name= $request->name;
        $appointment->email= $request->email;
        $appointment->date= $request->date;
        $appointment->doctor= $request->doctor;
        $appointment->phone= $request->phone;
        $appointment->message= $request->message;
        $appointment->status= "In Progress";

        if(Auth::id()){
            $appointment->user_id= Auth::user()->id;
        }

        $appointment->save();

        return redirect()->back()->with("message" , "Your Appointment Request has Successful.
        We will contact you soon.");
        

    }

    public function myappointment(){

        if(Auth::id()){

            $userId = Auth::id();
            $appoint = appointment::where("user_id", $userId)->get();
            return view("user.my_appointment" , compact("appoint"));
        }else{
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id){

        $dataAppoint = Appointment::find($id);
        $dataAppoint->delete();
        return redirect()->back();

    }

        
}
