@extends('layouts.admin')

@section('admin.product.edit')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit the Product page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

            <div class="container">
                    @include('includes.errors')
                    <form class="text-center" action="{{ route('productpage.update',$productpage->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                      @include('includes.errors')
                    <div class=" card my-4 ">
                        <h2 class=" font-bold text-4xl text-center card-text">Header</h2>
                        <p class="label">Add video or Image</p>
                        
                        <div class="flex justify-center">
                            <input type="radio" name="color" value="product-image"> image
                            <input type="radio" name="color" value="product-video"> video
                        </div>
                        
                        <div class="product-image msg">
                        <label for="image_alt">Change the description for your picture</label>
                            <input type="text" id="image_alt" name="image_alt" value="{{$productpage->image_alt}}" placeholder="Add picture description">
                            <input type="file" class="form-control my-2" value="{{$productpage->image}}" name="image"
                            id="image" onchange="return fileValidation() ">
                            <label  for="image">Sélectionner une image</label>
                            <div id="alertheaderimage"></div>
                            <div id="header_image_preview" class="col-lg-2"></div> 
                        </div>
                        <div class="product-video msg">
                        
                            <input type="file" class="form-control my-2" value="{{$productpage->video}}" name="video"
                            id="video" onchange="return videoValidation() "> 
                            <label  for="video">Sélectionner une video</label>
                            <div id="alertvideo"></div>
                        </div>
                        
                        <div id="current_video_preview" class="col-lg-4">
                            <iframe width="560" height="315" src="{{$productpage->video}}" frameborder="0"
                                allowfullscreen></iframe> 
                        </div>
                        <div id="header_video_preview"></div>
                    </div>
                <section class="card my-4" id="Technology">
                    <h2 class=" font-bold text-4xl text-center card-text">Technology</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="technologie_text" class="tiny" id="technologie_text" cols="150"  minlength="100" maxlength="255">{{$productpage->technologie_text}}</textarea>
                        <p id="compt_factory" class="text-center">Max 550 signs</p>
                    </div>
                </section>
                <section id="innovation" class="card my-4">
                    <h2 class=" font-bold text-4xl text-center card-text">RESEARCH & DEVELOPMENT </h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="innovation_text" class="tiny" id="innovation_text" cols="150" required>{{$productpage->innovation_text}}</textarea>
                        <p id="compt_research" class="text-center">Max 450 signs</p>
                    </div>
                </section>
                    <button class="btn btn-success my-3" type="submit"><span class="pr-2 fas fa-pen"></span>Update modification</button>
                </form>
        </div>
    </div>


<script>
        $(document).ready(function () {
            
        $('#video').val("");
        $('#image').val("");
        $('input[type="radio"]').click(function(){
            var val = $(this).attr("value");
            var target = $("." + val);
            console.log(target)
            $(".msg").not(target).hide();
            $(target).show();

        });

        $('#alertheaderimage').html("");
        $('#alertvideo').html("");
        $('#product_alert').html("");

            $('#alert').html("");
        });


        $('#product_text').keyup(function(){
                    
            var nombreCaractere0 = $(this).val().length;
            var nombreCaractere0 = 180 - nombreCaractere0;
            console.log("entrer");
            
            var nombreMots0 = jQuery.trim($(this).val()).split(' ').length;
            if($(this).val() === '') {
                nombreMots = 0;
                console.log(' nombre 0');
            }
            
            var msg0 = ' ' + nombreMots0 + ' word(s) | ' + nombreCaractere0 + ' sign(s) left';
            $('#compt_spirit').text(msg0);

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
  
            var fileInput =  document.getElementById('video'); 
                    
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
    }
</script>
@endsection
