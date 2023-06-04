<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Illuminate\Support\Str;
class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view('campaigns.index')->with('campaigns',Campaign::orderBy('startdate','DESC')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaigns.create');
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
            'title' => 'required',
            'goalamount'=>'required',
            'description'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $slug = Str::slug($request->title, '-');
        $newImageName=uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('img'),$newImageName);
        


        Campaign::create([
            'title'=>$request->input('title'),
            'goalAmount'=>$request->input('goalamount'),
            'imgurl'=>$newImageName,
            'slug'=>$slug,
            'startdate'=>$request->input('startdate'),
            'description'=>$request->input('description'),
            'enddate'=>$request->input('enddate'),
        ]);
        return redirect('/campaigns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('campaigns.show')->with('campaign',Campaign::where('slug',$slug)->first());
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
