<?php

namespace App\Http\Controllers;

use App\Models\ProductPage;
use Illuminate\Http\Request;

class ProductPageController extends Controller
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
        $productpage = ProductPage::first();
        return redirect()->route('productpage.edit',
        [
            'productpage'=>$productpage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPage $productpage)
    {
        $productpage = ProductPage::where('id',$productpage->id)->first(); 

        return view('admin.productpage.edit',compact(['productpage']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductPage $productpage)
    {
        $this->validate($request,
        [
            'product_text'=>'required',
            'technologie_text'=>'required',
            'innovation_text'=>'required',
            // 'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            // 'video' => 'mimetypes:video/mp4/avi/mov',
        ]);
           
            if($productpage->isClean('product_text'))
            {
                
                $productpage->product_text  = $productpage->product_text;
            }
            if($productpage->isClean('technologie_text'))
            {
                
                $productpage->technologie_text  = $productpage->technologie_text;
            }
            if($productpage->isClean('innovation_text'))
            {
                
                $productpage->innovation_text  = $productpage->innovation_text;
            }
            if($productpage->isClean('image_alt'))
            {
                
                $productpage->image_alt  = $productpage->image_alt;
            }


            $productpage->product_text  = $request->product_text;
            $productpage->technologie_text = $request->technologie_text;
            $productpage->innovation_text =$request->innovation_text;
            $productpage->image_alt =$request->image_alt;



        if($request->hasFile('image'))
        {
            $productpage->video = '';
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

            $file->move('storage/product/thumb/',$fileNameToStore);
            $productpage->image = 'storage/product/thumb/' .$fileNameToStore;

            
        }

        if($request->hasFile('video'))
        {
            $productpage->image = '';
            $file = $request->file('video');
     
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

            $file->move('storage/product/video/',$fileNameToStore);
            $productpage->video = 'storage/product/video/' .$fileNameToStore;

            
        }

        $productpage->save();

        $request->session()->flash('success', 'Congratulations ! The product page has been modified successfully.');
        return redirect()->route('products');
    }


}
