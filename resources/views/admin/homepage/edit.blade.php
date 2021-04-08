@extends('layouts.admin')

@section('admin.homepage.edit')

<div class="content-header">
    <div class="container-fluid mb-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home page builder</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid">
        <div class="col-lg-12">
            @include('includes.errors')
            <form class="text-center" action="{{ route('homepage.update',$homepage->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <section id="header_homepage" class="card my-4">
                    <h2 class=" font-bold text-4xl text-center">Header</h2>
                    <div class="col-lg-12 my-4 ">
                        <p class="label">Add video or Image</p>
                        
                        <div class="flex justify-center">
                            <input type="radio" name="color" value="image"> image
                            <input type="radio" name="color" value="video"> video
                        </div>
                        
                        <div class="image msg">
                            <label for="header_image_alt">Change the description for your picture</label>
                            <input type="text" id="header_image_alt" name="header_image_alt" value="{{$homepage->header_image_alt}}" placeholder="Add picture description"> <br>
                            <input type="file" class="form-control my-2" value="{{$homepage->header_image}}" name="header_image"
                            id="header_image" onchange="return fileValidation() ">
                               <label  for="header_image">Select new picture</label>
                            <div id="alertheaderimage"></div>
                            <div id="header_image_preview" class="col-lg-2"></div> 
                        </div>
                        <div class="video msg">
                           
                            <input type="file" class="form-control my-2" value="{{$homepage->header_video}}" name="header_video"
                            id="header_video" onchange="return videoValidation() "> 
                            <label  for="header_video">Select new video</label>
                            <div id="alertvideo"></div>
                        </div>
                        
                        <div id="current_video_preview" class="col-lg-4 my-0 mx-auto" >
                            <iframe width="560" height="315" src="{{$homepage->header_video}}" frameborder="0"
                                allowfullscreen></iframe> 
                        </div>
                        <div id="header_video_preview"></div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-2xl">Change header :</h3>
                        <textarea name="header_text" id="header_text" cols="150" required minlength="100" maxlength="180">{{$homepage->header_text}}</textarea>
                        <p id="compt_header" class="text-center">0 word(s) | 180 sign(s) left</p>
                    </div>
                </section>
                <section class="card my-4" id="inovation_homepage">
                    <h2 class=" font-bold text-4xl text-center card-text"> Our Vision </h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="inovation_text" class="tiny" id="inovation_text" cols="150" required minlength="100" maxlength="775">{{$homepage->inovation_text}}</textarea>
                        <p id="compt_innovation" class="text-center">Max 775 signs</p>
                    </div>
                </section>
                <section id="number" class="card my-4">
                      <h2 class=" font-bold text-4xl text-center card-text"> Numbers</h2>
                    <div class="card-body">
                        <div class="flex">
                            <div class="col-lg-4">
                                <label for="first_number">Modify the first number if needed</label>
                                    <input type="number" class="form-control" id="first_number" name="first_number" value="{{$homepage->first_number}}" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="second_number">Modify the second number if needed</label>
                                    <input type="number" class="form-control" id="second_number" name="second_number" value="{{$homepage->second_number}}" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="third_number">Modify the third number if needed</label>
                                    <input type="number" class="form-control" id="third_number" name="third_number" value="{{$homepage->third_number}}" required>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card my-4" id="about_homepage">
                    <h2 class=" font-bold text-4xl text-center card-text"> About us</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text : </h3>
                        <textarea name="about_text" class="tiny" id="about_text" cols="150" required minlength="100" maxlength="600">{{$homepage->about_text}}</textarea>
                        <p id="compt_about" class="text-center">Max 600 signs</p>
                    </div>
                </section>
                <section class="card my-4" id="product_homepage">
                    <h2 class=" font-bold text-4xl text-center card-text">Products</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="product_text" class="tiny" id="product_text" cols="150" required minlength="100" maxlength="450">{{$homepage->product_text}}</textarea>
                        <p id="compt_about" class="text-center">Max 450 signs</p>
                    </div>
                    <div class="card-footer">
                    <div class="d-flex">
                    <div class="col-lg-4">
                        <h3 class="text-2xl">Change image :</h3>
                        <label for="product_image_alt">Change the description for your picture</label>
                        <input type="text" name="product_image_alt" id="product_image_alt" value="{{ $homepage->product_image_alt }}" placeholder="Add picture description">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input my-2" value="{{ $homepage->product_image }}" name="product_image" id="product_image" lang="fr"
                                onchange="return ProductImageValidation()">
                            <label class="custom-file-label" for="product_image"></label>
                            <div id="product_alert"></div>
                        </div>
                    </div>
                    <div id="product_image_preview" class="col-lg-6">
                        <div style="max-width:100%;max-height:250px;">
                            <figure class="figure">
                                <figcaption class="figure-caption text-right">Your current image</figcaption>
                                <img src="{{ asset($homepage->product_image) }}" class="figure-img w-1/2 img-fluid" alt="">
                            </figure>
                        </div>
                        <div>
                        </div>
                        <div>
                    </div>
                </section>
                            <button class="btn btn-success btn-md" type="submit"><span
                                    class="fas fa-pen pr-2"></span>Update homepage</button>
                        </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $('#header_video').val("");
        $('#header_image').val("");
        $('input[type="radio"]').click(function(){
            $('#header_video').val("");
            $('#header_image').val("");
            var val = $(this).attr("value");
            var target = $("." + val);
            $(".msg").not(target).hide();
            $(target).show();

        });

        $('#alertheaderimage').html("");
        $('#alertvideo').html("");
        $('#product_alert').html("");

        $('#header_text').keyup(function(){
                    
                    var nombreCaractere0 = $(this).val().length;
                    var nombreCaractere0 = 180 - nombreCaractere0;
                    console.log("entrer");
                    
                    var nombreMots0 = jQuery.trim($(this).val()).split(' ').length;
                    if($(this).val() === '') {
                        nombreMots = 0;
                        console.log(' nombre 0');
                    }
                    
                    var msg0 = ' ' + nombreMots0 + ' word(s) | ' + nombreCaractere0 + ' sign(s) left';
                    $('#compt_header').text(msg0);

        });  

    });

    function fileValidation() {
        var fileInput = document.getElementById('header_image');

        var filePath = fileInput.value;
        var alert = document.getElementById('alertheaderimage');
        // Allowing file type 
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {

            alert.innerHTML = "";
            alert.innerHTML =
                '<span class="text-danger font-bold">ceci n"est pas une image valide seul les images extensions (gif, png, jpeg et jpg) sont autoriser merci !</span>';
            fileInput.value = '';
            document.getElementById('header_image_preview').innerHTML = "";
            return false;
        } else {
            alert.innerHTML = "";
            // Image preview 
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(
                            'header_image_preview').innerHTML =
                        '<img src="' + e.target.result +
                        '"/>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

        function ProductImageValidation() {
        var fileInput = document.getElementById('product_image');

        var filePath = fileInput.value;
        var alert = document.getElementById('product_alert');
        // Allowing file type 
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {

            alert.innerHTML = "";
            alert.innerHTML =
                '<span class="text-danger font-bold">ceci n"est pas une image valide seul les images extensions (gif, png, jpeg et jpg) sont autoriser merci !</span>';
            fileInput.value = '';
            document.getElementById('product_image_Preview').innerHTML = "";
            return false;
        } else {
            alert.innerHTML = "";
            // Image preview 
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(
                            'product_image_Preview').innerHTML =
                        '<img src="' + e.target.result +
                        '"/>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    function videoValidation() {
  
        var fileInput =  document.getElementById('header_video'); 
              
            var filePath = fileInput.value; 
          var alert = document.getElementById('alertvideo');
            // Allowing file type 
            var allowedExtensions =  
                    /(\.mp4)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                
                alert.innerHTML = "";
                alert.innerHTML = '<span class="text-danger font-bold">Ceci n\'est pas une vidéo valide. Seules les extensions (mp4, mov, avi) sont autorisées ici.</span>';
                fileInput.value = ''; 
                 document.getElementById( 'header_video_preview').innerHTML ="";
                 document.getElementById( 'current_video_preview').innerHTML ="";
                return false; 
            }  
            else  
            { 
               alert.innerHTML = "";
                // Image preview 
                if (fileInput.files && fileInput.files[0]) { 
                    var reader = new FileReader(); 
                    reader.onload = function(e) { 
                        document.getElementById('current_video_preview').innerHTML='';
                        document.getElementById( 
                            'header_video_preview').innerHTML =  
                            '<video controls playsinline width="800" height"800"'+ ' src="' + e.target.result +'">'+'</video>'; 
                    }; 
                      
                    reader.readAsDataURL(fileInput.files[0]); 
                } 
            } 

    };

</script>
@endsection
