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
        return view('welcome');
    }

    public function about()
    {
        return view('front.about');
    }
    public function eligibility()
    {
        return view('front.eligibility');
    }

    public function dashboard()
    {
        $data['user'] = User::where('id', Auth::user()->id)->with('application','registration')->first();
        // dd($user);

        if($data['user']->application){
            if($data['user']->application->status != true)
            {
                if($data['user']->photo && $data['user']->signature)
                    // return view('front.application_preview', $data);
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
