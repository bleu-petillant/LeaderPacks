@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('meta')
    
@endsection
@section('about')
    <header class="about-header relative">
        <h1 class="about-h1 uppercase" data-sal-duration="1000" data-sal="slide-left" data-sal-delay="300" data-sal-easing="ease-out-bounce"><span class="title-blue font-bold">About</span> us </h1>
        <div class="icon-content-header-home">
            <!-- <a href=""><i class="icon-header-home fas fa-phone-alt"></i></a>
            <a href=""><i class="icon-header-home fas fa-envelope"></i></a> -->
        </div>
    </header>
    <section id="spirit" >
        <div class="flex">
            <div class="col-lg-8 relative spirit-txt-container">
                <h2 class=" spirit-title about-h2 text-right"><span class="skinny-h2">Our</span> Spirit</h2>
                <p class="spirit-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.<br><br>

                neque arcu ut dictumst enim. Et vulputate purus, erat interdum. Gravida et eget sed sit.
                Mollis eu id lacus, eu porttitor diam sagittis. Pellentesque urna bibendum augue hendrerit risus et arcu ipsum. Urna, eget justo pretium non feugiat laoreet vitae. Morbi dictum sed proin eu. Accumsan consequat ut praesent viverra risus aliquet. Sed id tincidunt nullam pulvinar donec lorem. At ut urna neque velit in ultrices mattis. Imperdiet viverra porttitor sapien, a adipiscing tempus, </p>
            </div>
            
            <div class="col-lg-4 relative ourspirit-img-container">
                    <div class=" relative ourspirit-img">
                        <img class="w-full spirit-image relative" src="{{asset('img/aboutus.png')}}" alt="">
                    </div>
                    <div id="horizontale-spirit-circles" class="horizontale-point-content">
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
        <!-- --------------------------------------------------------------mobile -->
        <div class="col-lg-8 relative spirit-txt-container-mobile">
            <h2 class=" spirit-title about-h2 text-right"><span class="skinny-h2">Our</span> Spirit</h2>
            <p class="spirit-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.<br><br>

            neque arcu ut dictumst enim. Et vulputate purus, erat interdum. Gravida et eget sed sit.
            Mollis eu id lacus, eu porttitor diam sagittis. Pellentesque urna bibendum augue hendrerit risus et arcu ipsum. Urna, eget justo pretium non feugiat laoreet vitae. Morbi dictum sed proin eu. Accumsan consequat ut praesent viverra risus aliquet. Sed id tincidunt nullam pulvinar donec lorem. At ut urna neque velit in ultrices mattis. Imperdiet viverra porttitor sapien, a adipiscing tempus, </p>
        </div>
        <!-- -------------------------------------------------------------- -->

    </section>
<div class="container-about">
    <section id="factory">
        <h2 class="factory-title about-h2 "> factory</h2>
        <div class="col-lg-12 justify-center">
            <div class=" flex images-factory-container">
                <!-- <img class="col-lg-3 factory-image" src="{{asset('img/factory1.png')}}" alt="" data-sal-duration="1000" data-sal="slide-down" data-sal-delay="200" data-sal-easing="ease-out-bounce">
                <img class="col-lg-3 factory-image" src="{{asset('img/factory2.png')}}" alt="" data-sal-duration="1000" data-sal="slide-down" data-sal-delay="400" data-sal-easing="ease-out-bounce">
                <img class="col-lg-3 factory-image" src="{{asset('img/factory3.png')}}" alt="" data-sal-duration="1000" data-sal="slide-down" data-sal-delay="600" data-sal-easing="ease-out-bounce">
                <img class="col-lg-3 factory-image" src="{{asset('img/factory4.png')}}" alt="" data-sal-duration="1000" data-sal="slide-down" data-sal-delay="800" data-sal-easing="ease-out-bounce"> -->
                <div class=" factory-img2" style="background: url('{{asset('img/factory1.png')}}'); background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center center;"></div>
                <div class=" factory-img2" style="background: url('{{asset('img/factory2.png')}}'); background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center center;"></div>
                <div class=" factory-img2" style="background: url('{{asset('img/factory3.png')}}'); background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center center;"></div>
                <div class=" factory-img2" style="background: url('{{asset('img/factory4.png')}}'); background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center center;"></div>
            </div>
            <!-- --------------------------------------------------------------mobile -->
            <div class="images-factory-container-mobile">
                <div class="flex">
                    <div class=" factory-img2" style="background: url('{{asset('img/factory1.png')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;"></div>
                    <div class=" factory-img2" style="background: url('{{asset('img/factory2.png')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;"></div>
                </div>
                <div class="flex">
                    <div class=" factory-img2" style="background: url('{{asset('img/factory3.png')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;"></div>
                    <div class=" factory-img2" style="background: url('{{asset('img/factory4.png')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;"></div>
                </div>
            </div>
            <!-- -------------------------------------------------------------- -->
        </div>
        <div class="flex">
            <div class="col-lg-6 w-full empty-factory-col">

            </div>
            <div class="col-lg-6 col-sm-12 w-full factory-text-container">
                <p class="factory-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.<br><br>

neque arcu ut dictumst enim. Et vulputate purus, erat interdum. Gravida et eget sed sit.
Mollis eu id lacus, eu porttitor diam sagittis. Pellentesque urna bibendum augue hendrerit risus et arcu ipsum. Urna, eget justo pretium non feugiat laoreet vitae. Morbi dictum sed proin eu. Accumsan consequat ut praesent viverra risus aliquet. Sed id tincidunt nullam pulvinar donec lorem. At ut urna </p>

            </div>
        </div>

    </section>

    <section id="recherche">
        <h2 class="uppercase about-h2 recherche-title">research <span class="skinny-h2">and</span> development</h2>
        <div class="row mt-3">
            <div class="col-lg-6 col-sm-12">
                <p class="recherche-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.<br><br>

neque arcu ut dictumst enim. Et vulputate purus, erat interdum. Gravida et eget sed sit.
Mollis eu id lacus, eu porttitor diam sagittis. Pellentesque urna bibendum augue hendrerit risus et arcu ipsum. Urna, eget justo pretium non feugiat laoreet vitae. Morbi dictum sed proin eu. Accumsan consequat ut praesent viverra risus aliquet. </p>

            </div>
            <div class="col-lg-6 col-sm-12 relative" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="400" data-sal-easing="ease-out-bounce">
                <img class="frame-recherche" src="{{asset('img/mapmonde.svg')}}" alt="">
                <!-- --------------------------------------------------------------mobile -->
                <img class="frame-recherche-mobile" src="{{asset('img/mapmonde.svg')}}" alt="">
                <!-- --------------------------------------------------------------mobile -->
            </div>
        </div>

    </section>
</div>
    
    <section id="team">
        <h2 class="about-h2 team-title uppercase" >Team</h2>
        <div class="flex relative">
            <div class="col-lg-8 relative">
                <div class="member-bio-container">
                    <h3 class="name-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce">Jean Leroy</h3>
                    <p class="fonction-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="800" data-sal-easing="ease-out-bounce"> Lorem ipsum dolor </p>
                    <p class="description-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.
                    aucibus morbi amet mauris eu. Non morbi tristique mauris eget. Faucibus auctor dictum penatibus consectetur accumsan in. Venenatis, imperdiet urna ipsum, adipiscing netus aliquet tellus.
                    </p>
                </div>
                <div class="team-arrow-container flex justify-between">
                    <i class="team-arrow fas fa-chevron-left"></i>
                    <i class="team-arrow fas fa-chevron-right"></i>
                </div>
                <div class="flex justify-around w-full absolute members-image-container">
                    <img class="membre-img" src="{{asset('img/membre1.png')}}" alt="">
                    <img class="membre-img" src="{{asset('img/membre2.png')}}" alt="">
                    <img class="membre-img" src="{{asset('img/membre4.png')}}" alt="">
                    <img class="membre-img" src="{{asset('img/membre5.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class=" relative">
                    <img class="w-full team-image relative" src="{{asset('img/johndoe.png')}}" alt="">
                </div>
                <div class=" team-image-mobile" style="background: url('{{asset('img/johndoe.png')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;">
                </div>
                
            </div>


        </div>
            
        @if ($teams ?? '')
            @foreach ($teams as $team)
                <div class="card">
                    <div class="card-top">
                        <img src="{{asset($team->image)}}" class="img-fluid " alt="">
                    </div>
                    <div class="card-body">
                        <p>{{$team->firstname}} {{$team->lastname}} </p>
                        <p>{{$team->job_title}}</p> 
                        <p>{{$team->desc}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        @else
            <div>
                <p>No Teammate for the moment</p>
            </div>
        @endif
    </section>
@endsection