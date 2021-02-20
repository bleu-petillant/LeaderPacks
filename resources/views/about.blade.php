@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('meta')
    
@endsection
@section('about')
    <header>
        
    </header>
    <section id="team">
        @if ($teams ?? '')
            @foreach ($teams as $team)
                <div class="card">
                    <div class="card-top">
                        <img src="{{asset($team->image)}}" class="img-fluid " alt="">
                    </div>
                </div>
            @endforeach
        @else
            
        @endif
    </section>
@endsection