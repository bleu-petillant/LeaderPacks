@extends('layouts.app')
@section('title')
    
@endsection
@section('meta')
    
@endsection
@section('contact')
<header class="contact-header relative">
        <h1 class="contact-h1 uppercase"><span class="title-blue font-bold">contact</span></h1>
        
        <a href=""><i class="icon-header-contact fas fa-phone-alt"></i></a>
</header>
<section>
    <div class="flex container-contact">
        <div class="col-lg-4">
            <img class="map-contact" src="{{asset('img/rectanglemap.png')}}" alt="">
            <div id="horizontale-contact-circles" class="horizontale-point-content">
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
            <div class="adress-container">
                <p class="text-white">Zona de Industria Ligeira<br>Rua Hervé Joseph Matias, Lote 10-A, 7580-250, <br>Alcácer do Sal, Portugal. </p>
            </div>
        </div>
        <div class="col-lg-8">
            <p class="text-white contact-text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in nisl convallis lacus faucibus morbi amet mauris eu. Non morbi tristique mauris eget. </p>

            <div class="contact-form">
            <form class="grid form-contact" action="{{route('message')}}" method="post" id="message">
                @csrf
                <div class=" flex justify-between">
                    <div class="required col-lg-3"><input type="text" class=" input-contact required" name="prenom" id="prenom" required autofocus placeholder="First Name"></div>
                    <div class="required col-lg-3"><input type="text" class=" input-contact required" name="name" id="name" required placeholder="Last Name"></div>
                    <input type="text" class="col-lg-3 input-contact" name="city" id="city" required placeholder="City">
                </div>

                <div class="flex justify-between">
                    <div class="required col-lg-3"><input type="text" class=" input-contact required" name="country" id="country" required autofocus placeholder="Country"></div>
                    <div class="required col-lg-3"><input type="email" class=" input-contact required" name="email" id="email" required placeholder="Email"></div>    
                    <div class="col-lg-3 empty-input"></div>

                </div>

                <textarea name="message" class="textarea-contact" id="message" required placeholder="Message"></textarea>

                <bouton type="submit" id="submit" class="bouton">Submit</bouton>

            </form>
            
            </div>
        </div>

    </div>





</section>



@endsection