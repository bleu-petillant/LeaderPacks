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
                <h2 class=" spirit-title about-h2 text-right"><span class="skinny-h2">Our</span> Values </h2>
                <div class="spirit-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">
                    {!!$aboutpage->spirit_text!!}
                </div>
            </div>  
            
            <div class="col-lg-4 relative ourspirit-img-container">
                    <div class="flex relative ourspirit-img">

                        <div class="image-about" aria-label="ceci est un label" title="{{ $aboutpage->image_alt }}" style="background: url('{{asset($aboutpage->image)}}')"></div>
                        <!-- <img class="w-full spirit-image relative" src="{{$aboutpage->image}}" alt="">     -->
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
        </div>
        <!-- --------------------------------------------------------------mobile -->
        <div class="col-lg-8 col-sm-12 relative spirit-txt-container-mobile">
            <h2 class=" spirit-title about-h2 text-right"><span class="skinny-h2">Our</span> Values</h2>
            <div class="spirit-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">
                {!!$aboutpage->spirit_text!!}
            </div>
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
                    <div class=" factory-img2" style="background: url('{{asset('img/factory1.jpg')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;" title=""></div>
                    <div class=" factory-img2" style="background: url('{{asset('img/factory2.jpg')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;" title=""></div>
                    <div class=" factory-img2" style="background: url('{{asset('img/factory3.jpg')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;" title=""></div>
                    <div class=" factory-img2" style="background: url('{{asset('img/factory4.jpg')}}'); background-repeat: no-repeat;
                                        background-size: cover;
                                        background-position: center center;" title=""></div>
                </div>
                <!-- --------------------------------------------------------------mobile -->
                <div class="images-factory-container-mobile">
                    <div class="flex">
                        <div class=" factory-img2" style="background: url('{{asset('img/factory1.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;" title=""></div>
                        <div class=" factory-img2" style="background: url('{{asset('img/factory2.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;" title=""></div>
                    </div>
                    <div class="flex">
                        <div class=" factory-img2" style="background: url('{{asset('img/factory3.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;" title=""></div>
                        <div class=" factory-img2" style="background: url('{{asset('img/factory4.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;" title=""></div>
                    </div>
                </div>
                <!-- -------------------------------------------------------------- -->
            </div>

        <!-- -------------------------------------------------------------- small-mobile -->
            <div class="images-factory-container-small-mobile">
                        <div class=" factory-img-sm" style="background: url('{{asset('img/factory1.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;"></div>
                        <div class="factory-img-sm" style="background: url('{{asset('img/factory2.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;"></div>
                        <div class=" factory-img-sm" style="background: url('{{asset('img/factory3.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;"></div>
                        <div class="factory-img-sm" style="background: url('{{asset('img/factory4.jpg')}}'); background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;"></div> 
                </div>
        <!-- -------------------------------------------------------------- -->
            <div class="flex">
                <div class="col-lg-6 w-full empty-factory-col">

                </div>
                <div class="col-lg-6 col-sm-12 w-full factory-text-container">
                    <div class="factory-text">{!!$aboutpage->factory_text!!}</div>

                </div>
            </div>
    </section>

    <section id="recherche">
        <h2 class="uppercase about-h2 recherche-title">Worldwide commercial organization</h2>
        <div class="row mt-3">
            <div class="col-lg-6 col-sm-12">
                <div class="recherche-text" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease-out-bounce">
                    {!!$aboutpage->research_text!!} 
                </div>
                

            </div>
            <div class="col-lg-6 col-sm-12 relative" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="400" data-sal-easing="ease-out-bounce">
                <img class="frame-recherche" src="{{asset('img/mapmonde.svg')}}" alt="">
                <!-- --------------------------------------------------------------mobile -->
                <img class="frame-recherche-mobile" src="{{asset('img/mapmonde.svg')}}" alt="">
                <!-- -------------------------------------------------------------- -->
            </div>
        </div>

    </section>
</div>
    
    <section id="team" class="relative">
    @if ($teams ?? '')
        <h2 class="about-h2 team-title uppercase"> Organization</h2>
        
        <div id="team-laptop" class="flex relative">
            <div class="col-lg-8 col-sm-12 relative">
                <div id="memberBioContainer" class="member-bio-container">
                    <h3 class="name-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce">{{$firstTeam->teammates}} </h3>
                    <p class="fonction-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="800" data-sal-easing="ease-out-bounce"> {{$firstTeam->job_title}}</p>
                    <p class="description-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce">
                    {{$firstTeam->desc}}
                    </p>
                </div>

                <!-- <div id="memberBioContainer" class="member-bio-container">
                    <h3 class="name-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce"> Quality </h3>
                    <p class="fonction-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="800" data-sal-easing="ease-out-bounce"> Comprehensive high standard testing </p>
                    <p class="description-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce">
                    “Exceptional product assessment is our philosophy to achieve high-quality products and the best customer satisfaction.”<br><br>

                    Leaderpacks high-quality product is based on the understanding of our customer needs and reflects the team commitment and experience on producing with knowledge and intelligent effort. <br>
                    The whole team is driven by quality, and the quality control is established in a culture of standardized testing and knowledge of the medical packaging requirements, providing product excellency. 

                    </p>
                </div> -->
                
                <div class="team-arrow-container flex justify-between">
                    <i class="cursor-pointer prev team-arrow fas fa-chevron-left"></i>
                    <i class="cursor-pointer next team-arrow fas fa-chevron-right"></i>
                </div>

                <!-- <div class="team-miniature-container"> -->
                    <div class="flex justify-around w-full absolute members-image-container"> 
                        @foreach ($teams as $team) 
                        <form action="" method="post">
                        @csrf
                            <div id="{{$team->id}}" class="miniature-img-team cursor-pointer" style="background: url('{{asset($team->image)}}')"></div>
                            <!-- <img src="{{asset($team->image)}}" id="{{$team->id}}" class="product-miniature-img  cursor-pointer membre-img " alt=""> -->
                        </form>
                        @endforeach
                    </div>
                <!-- </div> -->

                
            </div>


            <div class="col-lg-4 col-sm-12">
                <div id="teamImage" class=" relative h-full">
                    <img d="{{$team->id}}" class="w-full team-image relative" src="{{asset($firstTeam->image)}}" alt="">
                    <!-- <div id="{{$team->id}}" class="w-full team-image relative"  style="background: url('{{asset($firstTeam->image)}}')"></div> -->
                </div>
                
            </div>
        </div>

        @else

        @endif
            

            <!-- --------------------------------------------------------------mobile -->
            <div id="team-mobile" class="w-full">
                <div class=" relative">
                    <div id="teamImageMobile" class="w-full relative">
                        <div id="{{$team->id}}" class="w-full team-image-mobile relative"  style="background: url('{{asset($firstTeam->image)}}')"></div>
                    </div>

                    <div class="slick-mobile-container">
                        
                            <i class="cursor-pointer prev-mobile team-arrow fas fa-chevron-left"></i>
                            <i class="cursor-pointer next-mobile team-arrow fas fa-chevron-right"></i>
                        
                        <div class="flex h-full w-full absolute members-image-container-mobile">
                            @foreach ($teams as $team) 
                            <form action="" method="post">
                            @csrf
                                <div id="{{$team->id}}" class="miniature-img-team-mobile mini-mobile cursor-pointer" style="background: url('{{asset($team->image)}}')"></div>
                                <!-- <img src="{{asset($team->image)}}" id="{{$team->id}}" class="product-miniature-img  cursor-pointer membre-img " alt=""> -->
                            </form>
                            @endforeach
                        </div>
                    
                    </div>

                </div>

                <div id="memberBioContainerMobile" class="member-bio-container">
                    <h3 class="name-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce">{{$firstTeam->teammates}} </h3>
                    <p class="fonction-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="800" data-sal-easing="ease-out-bounce"> {{$firstTeam->job_title}}</p>
                    <p class="description-member" data-sal-duration="1000" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce">
                    {{$firstTeam->desc}}
                    </p>
                </div>

            </div>


           
            <!-- -------------------------------------------------------------- -->
    </section>
    <script src="{{asset('js/Members.js')}}"></script>
    <script src="{{asset('js/MobileMembers.js')}}"></script>
    
    <script>
        const member_obj = new Members();
        const member_mobile_obj = new MembersMobile();
     

    </script>

@endsection