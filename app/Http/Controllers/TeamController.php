<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'teammates'=>'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'desc'=>'required',
            'job_title'=>'required',
        ]);

        $team = Team::create([
            'teammates' => $request->teammates,

            'image' => 'image',
            'job_title'=>$request->job_title,
            'desc'=>$request->desc,
            'page_id'=>1
  
        ]);

 



        if($request->hasFile('image'))
        {

            $file = $request->file('image');

            // Get filename with extension
            $filenameWithExt = $file->getClientOriginalName();
 
            // Get file path
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
 
            // Remove unwanted characters
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);

            // Get the original image extension
            $extension = $file->getClientOriginalExtension();
            // Create unique file name
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $file->move('storage/team/',$fileNameToStore);
            $team->image = 'storage/team/' .$fileNameToStore;
            
        }


        $team->save();

        $request->session()->flash('success', 'the new teammate has been created successfully');

        return redirect('admin/team');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $team = Team::where('id',$team->id)->first(); 

        return view('admin.team.edit',compact(['team']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request,
        [
            'teammates'=>'required',

            'job_title'=>'required',
            'desc'=>'required',
        ]);
           
            if($team->isClean('teammates'))
            {
                
                $team->teammates = $team->teammates;
            }
           
            if($team->isClean('job_title'))
            {
                
                $team->job_title  = $team->job_title;
            }
            if($team->isClean('desc'))
            {
                
                $team->desc  = $team->desc;
            }

            $team->teammates  = $request->teammates;

            $team->job_title =$request->job_title;
            $team->desc = $request->desc;

        if($request->hasFile('image'))
        {

            $file = $request->file('image');
     
            // Get filename with extension
            $filenameWithExt = $file->getClientOriginalName();

            // Get file path
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


            // Remove unwanted characters
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);

            // Get the original image extension
            $extension = $file->getClientOriginalExtension();
           
            // Create unique file name
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $file->move('storage/team/',$fileNameToStore);
            $team->image = 'storage/team/' .$fileNameToStore;

            
        }

        $team->save();

        $request->session()->flash('success', 'congratulation! the teamate has been modified successfully');
        return redirect()->route('team.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
