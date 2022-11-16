<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['links'] = Link::get();
        return view('admin.links', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['links'] = Link::whereNull('parent_id')->get();
        return view('admin.addLink', $data);
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
            'type'=> 'required',
            'title'=> 'required|max:500',
            'slug'=> 'required|unique:links',
        ]);
        // dd($request->all());
        $link = new Link();
        $link->type = $request->type;
        $link->title = $request->title;
        $link->slug = $request->slug;
        $link->priority = $request->priority ?? 0;

        if($request->has('parent_id')){
          $link->parent_id = $request->parent_id;
        }
        // dd($link);
        if($link->save()){
            return back()->with('success', 'Link Save successfully');
        }
        else{
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
    public function edit(Link $link)
    {
        $data['links'] = Link::whereNull('parent_id')->get();
        return view('admin.addLink', $data)->with(compact('link'));
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
            'type'=> 'required',
            'title'=> 'required|max:500',
            'slug'=> 'required',
        ]);
        // dd($request->all());
        $link = Link::find($id);
        $link->type = $request->type;
        $link->title = $request->title;
        $link->slug = $request->slug;
        $link->priority = $request->priority ?? 0;

        if($request->has('parent_id')){
          $link->parent_id = $request->parent_id;
        }
        // dd($link);
        if($link->save()){
            return back()->with('success', 'Link Updated successfully');
        }
        else{
            return back()->with('error', 'Something went wrong !');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $link)
    {
        if($link!==null){          
            $link->delete();
            return back()->with('success', 'Link Deleted successfully');
        }else{
            return back()->with('error', 'Something went wrong !');
        }
    }
}
