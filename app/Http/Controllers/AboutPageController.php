<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
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
        $aboutpage = AboutPage::first();

        return redirect()->route('aboutpage.edit',
        [
            'aboutpage'=>$aboutpage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutPage $aboutpage)
    {
        $aboutpage = AboutPage::where('id',$aboutpage->id)->first(); 

        return view('admin.aboutpage.edit',compact(['aboutpage']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutPage $aboutpage)
    {
        $this->validate($request,
        [
            'spirit_text'=>'required|min:100',
            'research_text'=>'required|min:100',
            'factory_text'=>'required|min:100',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
           
            if($aboutpage->isClean('spirit_text'))
            {
                
                $aboutpage->spirit_text  = $aboutpage->spirit_text;
            }
            if($aboutpage->isClean('research_text'))
            {
                
                $aboutpage->research_text  = $aboutpage->research_text;
            }
            if($aboutpage->isClean('factory_text'))
            {
                
                $aboutpage->factory_text  = $aboutpage->factory_text;
            }


            $aboutpage->spirit_text  = $request->spirit_text;
            $aboutpage->research_text = $request->research_text;
            $aboutpage->factory_text =$request->factory_text;



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

            $file->move('storage/aboutpage/',$fileNameToStore);
            $aboutpage->image = 'storage/aboutpage/' .$fileNameToStore;

            
        }

        $aboutpage->save();

        $request->session()->flash('success', 'congratulation! the aboutpage has been modified successfully');
        return redirect('/about us');
    }


}
