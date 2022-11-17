<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::get();
        return view('admin.news', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:250',
        ]);
        // dd($request->all());
        $new = new News();
        $new->title = $request->title; 
        $new->description = $request->description; 
        $new->is_new = $request->is_new ?? false; 
        $new->status = $request->status ?? true; 

        if ($new->save()) {
            return back()->with('success', 'Your News Data Saved Successfully');
        }else{
            return back()->with('error', 'Something went wrong !');
        }

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
    public function edit(News $news)
    {
        return view('admin.addNews')->with(compact('news'));
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
            'title' => 'required|max:200',
            'description' => 'required|max:250',
        ]);
        // dd($request->all());
        $new = News::find($id);
        $new->title = $request->title; 
        $new->description = $request->description; 
        $new->is_new = $request->is_new ?? false; 
        $new->status = $request->status ?? true; 

        if ($new->save()) {
            return redirect()->route('news.index')->with('success', 'News Data Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if($news!==null){
           $news->delete();
           return back()->with('success', "News Deleted Successfully");
        }else{
            return back()->with('error', 'Data Already Deleted !');
        }
    }
}
