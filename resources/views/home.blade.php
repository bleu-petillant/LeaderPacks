@extends('layouts.app')
@section('title')
    LeaderPacks
@endsection
@section('meta')
    
@endsection

@section('home')
    <header class="home-header relative">
        <h1 class="home-h1">Leading <span class="title-blue font-bold">Medical Packaging</span><br> to the <span class="title-blue font-bold">next level </span> </h1>
        <div class="icon-content-header-home">
            <a href=""><i class="icon-header-home fas fa-phone-alt"></i></a>
            <a href=""><i class="icon-header-home fas fa-envelope"></i></a>
        </div>
    </header>
    <section id="header_homepage" class="flex ">
        <div class="col-lg-6 col-sm-12 relative ">
            <div class="flex relative">
                @if (!empty($homepage->header_video))
            <video controls>
                <source src="{{asset($homepage->header_video)}}" type="video/mp4">
                <source src="{{asset($homepage->header_video)}}" type="video/webm">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                    Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
            </video>
                <iframe class=" video-home" src="{{asset($homepage->header_video)}}" frameborder="0 " allowfullscreen></iframe>
                @endif
                @if ($homepage->header_image ?? '')
                    <img src="{{asset($homepage->header_image)}}" alt="">
                @endif
            </div>
            <div id="horizontale-video-circles" class="horizontale-point-content">
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                </div>

        </div>

        <div class="col-lg-6 col-sm-12 header-home-text-container relative">
            <div class="header-text" data-sal-duration="1200" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce">{{$homepage->header_text}}</div>
        </div>
        
    </section>
<!-- --------------------------------------------------------------mobile -->
    <div class="col-sm-12 header-home-text-container-mobile">
        <div  class="header-text">{{$homepage->header_text}}</div>
    </div>
<!-- ------------------------- -->
    <section id="inovation_homepage">
        <div class="flex">
            <div class="col-lg-6 innovation-content"  data-sal-duration="1200" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                <h2 id="home-innovation_title" class="home-h2">Our vision</h2>
                <div class="home-innovation-text">{!!$homepage->inovation_text!!}</div>
            </div>
            <div class=" blue-square-content">
                <div class="blue-square"></div>
                <div id="home-innovation-circles" class="horizontale-point-content">
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                </div>
            </div>
        </div>
        
        
    </section>
    <section id="number_homepage">
        <div class="col-lg-7 ml-auto">
            <div class="flex justify-center">
                <div class="col-md-4" data-sal-duration="1000" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease-out-bounce">
                    <p class="number">{{$homepage->first_number}}</p>
                    <p class="text-center number-text">years of cumulated experience </p>
                </div>
                <div class="col-md-4" data-sal-duration="1000" data-sal="slide-up" data-sal-delay="350" data-sal-easing="ease-out-bounce">
                    <p class="number">{{$homepage->second_number}}</p>
                    <p class="text-center number-text"> continents </p>
                </div>
                <div class="col-md-4" data-sal-duration="1000" data-sal="slide-up" data-sal-delay="450" data-sal-easing="ease-out-bounce">
                    <p class="number">{{$homepage->third_number}}</p>
                    <p class="text-center number-text">m2 build area</p>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------------mobile -->
    <section id="number_homepage_mobile">
        <div class="flex">
            <div class="col-sm-6">
                <p class="number">{{$homepage->first_number}}</p>
                <p class="text-center number-text">Lorem ipsum dolor sit <br> amet, consectetur </p>
            </div>
            <div class="col-sm-6">
                <p class="number">{{$homepage->second_number}}</p>
                <p class="text-center number-text">Lorem ipsum dolor sit <br> amet, consectetur </p>
            </div>
        </div>
        
        <div class="col-lg-6">
            <p class="number">{{$homepage->third_number}}</p>
            <p class="text-center number-text">Lorem ipsum dolor sit <br> amet, consectetur </p>
        </div>
    </section>
    <!-- ------------------------------------------------------------- -->
    <section id="about_homepage">
        <div class="flex relative">
            <div>
                <img class="aboutus-home-img" src="{{asset('img/tuyau.png')}}" alt="">
            </div>
            <div class="col-lg-6">
                <h2 id="home-aboutUs" class="home-h2">About <span class="skinny-h2">Us</span></h2>
                <div class="home-innovation-text" data-sal-duration="1200" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce">{!!$homepage->about_text!!}</div>
                <a href="" class=" bouton-aboutus-home bouton">Bouton</a>
            </div>
        </div>
        <!-- --------------------------------------------------------------mobile -->
        <div class=" bouton-aboutus-home-mobile">
            <a href="" class=" bouton">Bouton</a>
        </div>
        <!-- -------------------------------------------------------------- -->

    </section>

    <section id="product_homepage">
    <h2 id="home-product-title-mobile" class="home-h2">Products </h2>
        <div class=" flex">
            <div class="col-lg-5 col-md-6 col-sm-7 relative product-home-img-container">
                <img src="{{asset($homepage->product_image)}}" class="w-full product-home-img"  alt="">
                <div id="home-product-circles" class="horizontale-point-content">
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                    <div class="flex "><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span><span class="round-red"></span></div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 product-home-content">
                <h2 id="home-product-title" class="home-h2">Products </h2>
                <div class="flex relative home-product-content" data-sal-duration="1200" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce"> 
                    <div class="home-product-text">{!!$homepage->product_text!!}</div>
                    <img class="home-product-frame" src="{{asset('img/frame.png')}}" alt="">
                    
                </div>
                <div class="home-product-bouton">
                    <a href="" class="bouton ">bouton</a>
                </div>
            </div>
        </div>

        <!-- --------------------------------------------------------------mobile -->
        <div class=" col-sm-12 product-home-content-mobile">
            <div class="flex relative home-product-content" data-sal-duration="1200" data-sal="slide-right" data-sal-delay="300" data-sal-easing="ease-out-bounce"> 
                <div class="home-product-text">{!!$homepage->product_text!!}</div> 
                <img id="frame-mobile-home" class="home-product-frame" src="{{asset('img/frame.png')}}" alt="">
                
            </div>
            <div class="home-product-bouton">
                <a href="" class="bouton ">bouton</a>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        
    </section>
    
@endsection