<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
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
        $homepage = HomePage::first();
        return redirect()->route('homepage.edit',
        [
            'homepage'=>$homepage
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homepage)
    {

        $homepage = HomePage::where('id',$homepage->id)->first(); 

        return view('admin.homepage.edit',compact(['homepage']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homepage)
    {
        $this->validate($request,
        [
            'header_text'=>'required',
            'about_text'=>'required',
            'product_text'=>'required',
            'inovation_text'=>'required',
            // 'header_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            // 'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);
           
            if($homepage->isClean('header_text'))
            {
                
                $homepage->header_text  = $homepage->header_text;
            }
            if($homepage->isClean('about_text'))
            {
                
                $homepage->about_text  = $homepage->about_text;
            }
            if($homepage->isClean('product_text'))
            {
                
                $homepage->product_text  = $homepage->product_text;
            }
            if($homepage->isClean('header_video'))
            {
                
                $homepage->header_video  = $homepage->header_video;
            }
            if($homepage->isClean('header_image'))
            {
                
                $homepage->header_image  = $homepage->header_image;
            }
            if($homepage->isClean('product_image'))
            {
                
                $homepage->product_image  = $homepage->product_image;
            }
            if($homepage->isClean('inovation_text'))
            {
                
                $homepage->inovation_text  = $homepage->inovation_text;
            }
             if($homepage->isClean('first_number'))
            {
                
                $homepage->first_number  = $homepage->first_number;
            }
            if($homepage->isClean('second_number'))
            {
                
                $homepage->second_number  = $homepage->second_number;
            }
            if($homepage->isClean('third_number'))
            {
                
                $homepage->third_number  = $homepage->third_number;
            }




            $homepage->header_text  = $request->header_text;
            $homepage->about_text = $request->about_text;
            $homepage->product_text =$request->product_text;
            $homepage->header_video = $request->header_video;
            // $homepage->header_image = $request->header_image;
            // $homepage->product_image = $request->product_image;
            $homepage->inovation_text =$request->inovation_text;
            $homepage->first_number =$request->first_number;
            $homepage->second_number =$request->second_number;
            $homepage->third_number =$request->third_number;


        if($request->hasFile('header_video'))
        {
            $homepage->header_image = '';
            // if(file_exists(public_path($homepage->header_video)))
            // {
            //     unlink(public_path($homepage->header_video));
            // }
            $file = $request->file('header_video');
     
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

            $file->move('storage/homepage/video/',$fileNameToStore);
            $homepage->header_video = 'storage/homepage/video/' .$fileNameToStore;

            
        }

        if($request->hasFile('header_image') )
        {
            $homepage->header_video = '';
            // if(file_exists(public_path($homepage->header_image)))
            // {
            //     unlink(public_path($homepage->header_image));
            // }
            $file = $request->file('header_image');
     
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

            $file->move('storage/homepage/thumb/',$fileNameToStore);
            $homepage->header_image = 'storage/homepage/thumb/' .$fileNameToStore;

            
            
        }
         if($request->hasFile('product_image'))
        {

            $file = $request->file('product_image');
     
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

            $file->move('storage/homepage/thumb/product/',$fileNameToStore);
            $homepage->product_image = 'storage/homepage/thumb/product/' .$fileNameToStore;

            
        }


        $homepage->save();

        $request->session()->flash('success', 'Congratulations ! The homepage has been modified successfully');
        return redirect()->route('home');
    }

}
