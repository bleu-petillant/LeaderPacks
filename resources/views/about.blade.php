@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('meta')
    
@endsection
@section('about')
    <header class="h-32 bg-blue-600" id="header_about_us">
        <h1>About Us</h1>
    </header>
    <section id="spirit">
        <div class="col-lg-10 m-auto flex justify-between">
            <div class="col-md-4">
                <p>{{$aboutpage->spirit_text}}</p>
            </div>
            <div class="col-md-4">
                <img src="{{asset($aboutpage->image)}}" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <section id="factory">
        <h2>Factory</h2>
        <div class="col-lg-12">
            <div class="flex justify-between items-center">
                <img src="https://picsum.photos/400/400?random=1" class="img-fluid" alt="">
                <img src="https://picsum.photos/400/400?random=2" class="img-fluid" alt="">
                <img src="https://picsum.photos/400/400?random=3" class="img-fluid" alt="">
                <img src="https://picsum.photos/400/400?random=4" class="img-fluid" alt="">
            </div>
            <div>
                <p>{{$aboutpage->factory_text}}</p>
            </div>
        </div>
    </section>
    <section id="research">
        <div>
            <h2>Research and Development</h2>
            <div class="flex">
                <div class="col-lg-4">
                    <p>{{$aboutpage->research_text}}</p>
                </div>
                <div class="col-lg-4">
                    <img src="https://picsum.photos/400/400?random=1" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <h2>Team</h2>
        @if ($teams ?? '')
        <div class="flex">
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