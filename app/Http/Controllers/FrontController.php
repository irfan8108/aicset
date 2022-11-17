<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use \App\Models\Link;

class FrontController extends Controller
{
    private $data = [];

    public function __construct(){
        $this->data['links'] = Link::where('parent_id', null)->with('child')->get()->groupBy('type');
        $this->data['announcements'] = \App\Models\News::orderBy('priority')->get();
    }

    public function register(){
        return app('App\Http\Controllers\Auth\RegisteredUserController')->create($this->data);
    }
    public function login(){
        return app('App\Http\Controllers\Auth\AuthenticatedSessionController')->create($this->data);
    }

    public function page($slug){
        $this->data['page'] = Link::with('content')->whereSlug($slug)->first();
        $this->data['slug'] = $slug;
        return view('front.page', $this->data);
    }

    public function detail()
    {
        return view('front.detail');
    }

    public function home()
    {
        return view('welcome')->with($this->data);
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
