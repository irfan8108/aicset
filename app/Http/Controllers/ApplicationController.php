<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;
use Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.application_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
          'name'  => 'required',
          'aadhaar'  => 'required',
          'dob'  => 'required',
          'category'  => 'required',
          'father_name'  => 'required',
          'mother_name'  => 'required',
          'pwd'  => 'required',
          
          'address_1'  => 'required',
          'state'  => 'required',
          'district'  => 'required',
          'pincode'  => 'required',
          
          'intermediate_qualification_status'  => 'required',
          'intermediate_board_name'  => 'required',
          'intermediate_school_name'  => 'required',
          'intermediate_passing_year'  => 'required',
          'intermediate_total_marks'  => 'required',
          'intermediate_obtained_marks'  => 'required',
          'intermediate_percentage_mark'  => 'required',
          'matric_board_name'  => 'required',
          'matric_school_name'  => 'required',
          'matric_passing_year'  => 'required',
          'matric_total_marks'  => 'required',
          'matric_obtained_marks'  => 'required',
          'matric_percentage_mark'  => 'required',
          
          'monthly_income'  => 'required',

          // 'is_govt_department'  => 'required',
          // 'photo'  => 'required|image|max:2048',
          // 'signature' => 'required|mimes:jpeg,jpg|max:2048',
        ]);
        
        // dd($request->all());

        // dd(strtotime($request->dob));
        // dd($request->dob);

        // CALCULATE FEE
        if($request->gender == 'Female'){
            $fee = 1150;
        }
        else{
            if($request->category == 'General' || $request->category == 'OBC')
                $fee = 1250;
            else
                $fee = 1150;
        }

        $application = new Application; 
        $application->name = $request->name;
        $application->user_id = \Auth::user()->id;
        $application->app_no = 12345;
        $application->fee = $fee;

        $application->aadhaar = $request->aadhaar;
        $application->dob = $request->dob;
        $application->gender = $request->gender;
        $application->category = $request->category;
        $application->father_name = $request->father_name;
        $application->mother_name = $request->mother_name;
        $application->pwd = $request->pwd;
        $application->residence = $request->residence;

        $application->address_1 = $request->address_1;
        $application->address_2 = $request->address_2;
        $application->state = $request->state;
        $application->district = $request->district;
        $application->pincode = $request->pincode;
        $application->alternate_contact = $request->alternate_contact;
        $application->whatsapp = $request->whatsapp;
        $application->intermediate_qualification_status = $request->intermediate_qualification_status;
        $application->intermediate_board_name = $request->intermediate_board_name;
        $application->intermediate_school_name = $request->intermediate_school_name;
        $application->intermediate_passing_year = $request->intermediate_passing_year;
        $application->intermediate_total_marks = $request->intermediate_total_marks;
        $application->intermediate_obtained_marks = $request->intermediate_obtained_marks;
        $application->intermediate_percentage_mark = $request->intermediate_percentage_mark;
        $application->matric_board_name = $request->matric_board_name;
        $application->matric_school_name = $request->matric_school_name;
        $application->matric_passing_year = $request->matric_passing_year;
        $application->matric_total_marks = $request->matric_total_marks;
        $application->matric_obtained_marks = $request->matric_obtained_marks;
        $application->matric_percentage_mark = $request->matric_percentage_mark;

        $application->father_occupation = $request->father_occupation;
        $application->mother_occupation = $request->mother_occupation;
        $application->family_members = $request->family_members;
        $application->monthly_income = $request->monthly_income;
        $application->is_govt_department = $request->is_govt_department;
        $application->how_hear_about = $request->how_hear_about;

        if($application->save())
            // return back()->with('success','Form Submit successfully');
            return view('front.upload_documents');
        
        return back()->with('error', 'Something went Wrong !');

    }

    public function uploadDocuments(Request $request){
        if($request->file('photo')){
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $file_name = time().rand(11111, 55555).'.'.$extention;
            $file->move('uploads/documents',$file_name);
            $photo = $file_name;
        }
        if($request->file('signature')){
            $file = $request->file('signature');
            $extention = $file->getClientOriginalExtension();
            $file_name = time().rand(11111, 55555).'.'.$extention;
            $file->move('uploads/documents',$file_name);
            $signature = $file_name;
        }

        $user = \App\Models\User::find(\Auth::user()->id);
        $user->photo = $photo;
        $user->signature = $signature;
        if($user->save()){
            // return back()->with('success','Form Submit successfully');
            // dd('Proceed To Payment');
            $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
            return view('front.application_preview', $data);
        }
        
        return back()->with('error', 'Something went Wrong !');
    }

    public function appInstructions(){
        $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        return view('front.application_instructions', $data);
    }

    public function applicationFee(){
        $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        return view('front.application_fee', $data);
    }
    public function applicationStatus(){
        $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        return view('front.application_status', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
