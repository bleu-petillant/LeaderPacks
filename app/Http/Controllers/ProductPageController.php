<?php

namespace App\Http\Controllers;

use App\Models\ProductPage;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPage $productPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductPage $productPage)
    {
        //
    }


}
