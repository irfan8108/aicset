<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Link;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::get();
        return view('admin.pages', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['links'] = Link::get();
        return view('admin.addPage', $data);
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
            'title'=> 'required',
            'link_id'=> 'required'
        ]);
        // dd($request->all());
        $page = new Page();
        if ($request->hasfile('banner')) {
            $file = $request->file('banner');
            $extention = $file->getClientOriginalExtension();
            $file_name = rand(1000,5000).time().'.'.$extention;
            $file->move('uploads/page',$file_name);
            $page->banner = $file_name;
        }
        $page->title = $request->title;
        $page->link_id = $request->link_id;
        $page->sub_title = $request->sub_title;
        $page->description = $request->description;
        $page->long_description = $request->long_description;
        // dd($page);
        if($page->save()){
            return back()->with('success', 'Data Saved successfully');
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
    public function edit(Page $page)
    {
        $data['links'] = Link::get();
        return view('admin.addPage', $data)->with(compact('page'));
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
            'title'=> 'required',
            'link_id'=> 'required'
        ]);
        $page = Page::find($id);
        if ($request->hasfile('banner') && $request->banner != '') {
            $page = Page::where('id',$id)->first();
            $file_path = public_path('/uploads/page/'.$page->banner);
            //You can also check existance of the file in storage.
            if(Page::exists($file_path)) {
               unlink($file_path); //delete from storage
            }
            $file = $request->file('banner');
            $extention = $file->getClientOriginalExtension();
            $file_name = rand(1000,5000).time().'.'.$extention;
            $file->move('uploads/page',$file_name);
            $page->banner = $file_name;
        }
        $page->title = $request->title;
        $page->link_id = $request->link_id;
        $page->sub_title = $request->sub_title;
        $page->description = $request->description;
        $page->long_description = $request->long_description;
        // dd($page);
        if($page->save()){
            return redirect()->route('page.index')->with('success', 'Data Updated successfully');
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
    public function destroy($id)
    {
        $page = Page::find($id);
        if($page!==null){
            if ($page->banner!==null) {
                unlink(public_path("uploads/page/$page->banner"));
            }            
            $page->delete();
            return back()->with('success', 'Data Deleted successfully');
        }else{
            return back()->with('error', 'Something went wrong !');
        }
    }
}
