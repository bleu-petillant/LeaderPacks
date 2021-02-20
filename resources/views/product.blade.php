@extends('layouts.app')
@section('title')
    Products
@endsection
@section('meta')
    
@endsection

@section('product')
    <header class=" bg-blue-600 mb-5" id="header_product">
        <h1>Products</h1>
        <div class="flex">
            <div class="col-lg-4 z-depth-2">
                <img src="{{asset($productpage->image)}}" class="z-depth-2" alt="">
            </div>
            <div class="col-lg-4">
                <p>{{$productpage->product_text}}</p>
            </div>
        </div>
    </header>
    <section id="technologie">
        <h2>Technology</h2>
        <p>{{$productpage->technologie_text}}</p>
    </section>
        <section id="innovation">
        <h2>Innovation</h2>
        <p>{{$productpage->innovation_text}}</p>
    </section>
@endsection