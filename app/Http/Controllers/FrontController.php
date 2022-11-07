<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FrontController extends Controller
{
    public function detail()
    {
        return view('front.detail');
    }

    public function home()
    {
        return view('front.home');
    }

    public function dashboard()
    {
        $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        // dd($user);

        if($data['user']->application){
            if($data['user']->application->status == true){
                dd('Application Completed');
            }
            else{
                if($data['user']->photo && $data['user']->signature)
                    return redirect()->route('application.fee');
                else
                    return redirect()->route('application.upload_docs');
            }
        }

        return view('dashboard', $data);
    }

    public function test(){
        echo 'ENG/'.date('ym')."0";
    }
}