<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;
use App\Models\Payment;
use Auth;
use PDF;
use \App\Models\Link;

class ApplicationController extends Controller
{
    private $data = [];
    public function __construct(){
        $this->data['links'] = Link::where('parent_id', null)->with('child')->get()->groupBy('type');
        $this->data['announcements'] = \App\Models\News::orderBy('priority')->get();
    }

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
        return view('front.application_form', $this->data);
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
          'gender'  => 'required',
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
            return view('front.upload_documents', $this->data);
        
        return back()->with('error', 'Something went Wrong !');

    }

    public function uploadDocuments(Request $request){
        // dd('working');
        // dd($request->all());

        if($request->has('is_edit')){
            $request->validate([
            'photo'  => 'image|mimes:jpeg,jpg,png',
            'signature' => 'image|mimes:jpeg,jpg,png',
            ]);
        }else{
            $request->validate([
            'photo'  => 'required',
            'signature' => 'required|image|mimes:jpeg,jpg,png',
            ]);
        }

        $user = \App\Models\User::find(\Auth::user()->id);
        if($request->file('photo')){
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $file_name = time().rand(11111, 55555).'.'.$extention;
            $file->move('uploads/documents',$file_name);
            $user->photo = $file_name;
        }
        if($request->file('signature')){
            $file = $request->file('signature');
            $extention = $file->getClientOriginalExtension();
            $file_name = time().rand(11111, 55555).'.'.$extention;
            $file->move('uploads/documents',$file_name);
            $user->signature = $file_name;
        }

        if($user->save()){
            // return back()->with('success','Form Submit successfully');
            // dd('Proceed To Payment');
            $this->data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
            return view('front.application_preview', $this->data);
        }
        
        return back()->with('error', 'Something went Wrong !');
    }

    public function appInstructions(){
        $this->data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();

        if($this->isApplicationAlreadyFilled($this->data['user']->registration->app_no))
            return redirect()->route('dashboard')->with('error', 'Application already filled');

        return view('front.application_instructions', $this->data);
    }

    public function applicationFee(){
        $user = User::where('id', Auth::user()->id)->with('application','registration')->first();
        $payment = Payment::where('user_id', $user->id)->where('app_no', $user->application->app_no)->first();

        if(!$payment){
            $payment = new Payment();
            $payment->user_id = $user->id;
            $payment->app_no = $user->application->app_no;
            $payment->amount = $user->application->fee * 118/100;
            if(!$payment->save())
                return back()->with('error', 'Whoops, something went wrong? Please try after sometime');
        }

        $this->data['user'] = $user;
        $this->data['payment'] = $payment;

        return view('front.application_fee', $this->data);
    }
    public function applicationStatus(){
        $this->data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        return view('front.application_status', $this->data);
    }

    private function isApplicationAlreadyFilled($app_no){
        if(Application::where('app_no', $app_no)->whereStatus(true)->first())
            return true;
        return false;
    }

    public function generatePDF(){
        // dd('working');
        $this->data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();        
        $pdf = PDF::loadView('front.application_print', $this->data);
        return $pdf->stream();
        // return $pdf->download('Application.pdf');
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
    public function edit(Application $application)
    {
        // dd('working');
        return view('front.application_form_edit')->with(compact('application'));
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
        $request->validate([
          'name'  => 'required',
          'aadhaar'  => 'required',
          'dob'  => 'required',
          'gender'  => 'required',
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

        $application = Application::find($id); 
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
            $this->data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
            return view('front.upload_documents', $this->data);
        
        return back()->with('error', 'Something went Wrong !');

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
