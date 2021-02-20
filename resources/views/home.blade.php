@extends('layouts.app')
@section('title')
    LeaderPacks
@endsection
@section('meta')
    
@endsection

@section('home')
    <header>
        <h1>home page</h1>
    </header>
    <section id="header_homepage" class="flex justify-around">
        <iframe width="560" height="315"  src="{{$homepage->header_video}}" frameborder="0 " allowfullscreen></iframe>
        <p>{{$homepage->header_text}}</p>
    </section>
    <section id="inovation_homepage">
        <h2>Innovation</h2>
        <p>{{$homepage->inovation_text}}</p>
    </section>
    <section id="number_homepage">
        <div class="col-lg-8 ml-auto">
            <div class="flex">
                <div class="col-md-4">
                    <span>{{$homepage->first_number}}</span>
                </div>
                <div class="col-md-4">
                    <span>{{$homepage->second_number}}</span>
                </div>
                <div class="col-md-4">
                    <span>{{$homepage->third_number}}</span>
                </div>
            </div>
        </div>
    </section>
    <section id="about_homepage">
        <h3>About Us</h3>
        <p>{{$homepage->about_text}}</p>
    </section>
    <section id="product_homepage">
        <div class="col-lg-12 flex">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset($homepage->product_image)}}" class="img-fluid"  alt="">
            </div>
            <div>
                <h3>Products</h3>
                <p>{{$homepage->product_text}}</p>
            </div>
        </div>
        
    </section>
@endsection