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
                    <div class="col-lg-10 my-4 ">
                        <label class="label" for="header_video">Add video or Image</label>
                        
                        <div class="flex">
                            <input type="radio" name="color" value="yellow"> image
                            <input type="radio" name="color" value="red"> video
                        </div>
                        
                        <div class="yellow msg">
                            <p>Image</p>
                            <input type="url" class="form-control my-2" value="{{$homepage->header_video}}" name="header_video"
                            id="header_video" onchange="return videoValidation() " required>
                        </div>
                        <div class="red msg">
                            <p>video</p>
                            <input type="url" class="form-control my-2" value="{{$homepage->header_video}}" name="header_video"
                            id="header_video" onchange="return videoValidation() " required>
                        </div>
                        <div id="alertvideo"></div>
                        <div id="videoPreview" class="col-lg-4">
                            <iframe width="560" height="315" src="{{$homepage->header_video}}" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-2xl">Change header :</h3>
                        <textarea name="header_text" id="header_text" cols="150" required minlength="100" maxlength="255">{{$homepage->header_text}}</textarea>
                        <span id="compt_header" class="text-right">max 255 signs</span>
                    </div>
                </section>
                <section class="card my-4" id="inovation_homepage">
                    <h2 class=" font-bold text-4xl text-center card-text"> Our Vision </h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="inovation_text" class="tiny" id="inovation_text" cols="150" required minlength="100" maxlength="255">{{$homepage->inovation_text}}</textarea>
                        <span id="compt_innovation" class="text-right">max 255 signs</span>
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
                        <textarea name="about_text" class="tiny" id="about_text" cols="150" required minlength="100" maxlength="255">{{$homepage->about_text}}</textarea>
                        <span id="compt_about" class="text-right">max 255 signs</span>
                    </div>
                </section>
                <section class="card my-4" id="product_homepage">
                    <h2 class=" font-bold text-4xl text-center card-text">Products</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="product_text" class="tiny" id="product_text" cols="150" required minlength="100" maxlength="255">{{$homepage->product_text}}</textarea>
                        <span id="compt_product" class="text-right">max 255 signs</span>
                    </div>
                    <div class="card-footer">
                    <div class="d-flex">
                    <div class="col-lg-4">
                        <h3 class="text-2xl">Change image :</h3>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input my-2" name="image" id="image" lang="fr"
                                onchange="return fileValidation()">
                            <label class="custom-file-label" for="image"></label>
                            <div id="alert"></div>
                        </div>
                    </div>
                    <div id="imagePreview" class="col-lg-6">
                        <div style="max-width:100%;max-height:250px;">
                            <figure class="figure">
                                <figcaption class="figure-caption text-right">Your current image</figcaption>
                                <img src="{{ asset($homepage->product_image) }}" class="figure-img img-fluid" alt="">
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


        $('input[type="radio"]').click(function(){
            var val = $(this).attr("value");
            var target = $("." + val);
            $(".msg").not(target).hide();
            $(target).show();
        });

        //
        
        $('#alert').html("");
        $('#alertvideo').html("");

        let compteur = $('textarea');

        for (let i = 0; i < compteur.length; i++) {
            
        $(compteur[i]).keyup(function() {
            
            var nombreCaractere2 = $(this).val().length;
            var nombreCaractere2 = 255 - nombreCaractere2;
            
            var nombreMots2 = jQuery.trim($(this).val()).split(' ').length;
            if($(this).val() === '') {
                nombreMots2 = 0;
            }
            var msg2 = ' ' + nombreMots2 + ' mot(s) | ' + nombreCaractere2 + ' Caractere(s) restant';
           //compteur[i].after('<span class="text-right">'+msg2+'</span>');


        }); 
        }

    });

    function fileValidation() {
        var fileInput = document.getElementById('image');

        var filePath = fileInput.value;
        var alert = document.getElementById('alert');
        // Allowing file type 
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {

            alert.innerHTML = "";
            alert.innerHTML =
                '<span class="text-danger font-bold">ceci n"est pas une image valide seul les images extensions (gif, png, jpeg et jpg) sont autoriser merci !</span>';
            fileInput.value = '';
            document.getElementById('imagePreview').innerHTML = "";
            return false;
        } else {
            alert.innerHTML = "";
            // Image preview 
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(
                            'imagePreview').innerHTML =
                        '<img src="' + e.target.result +
                        '"/>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    function videoValidation() {
        console.log('try change video');
        var videolink = document.getElementById('header_video');
        let link_src = videolink.value;

        var alertvideo = document.getElementById('alertvideo');
        alertvideo.innerHTML = "";
        // Video preview 
        document.getElementById('videoPreview').innerHTML =
            '<iframe width="560" height="315"  src="' + link_src +' " frameborder="0 " allowfullscreen></iframe>'; 
    };

</script>
@endsection
