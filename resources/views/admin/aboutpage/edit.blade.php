@extends('layouts.admin')

@section('admin.about.edit')
    <div class="content-header">
    <div class="container-fluid mb-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">About Us page builder</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid">
        <div class="col-lg-12">
            @include('includes.errors')
            <form class="text-center" action="{{ route('aboutpage.update',$aboutpage->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <section id="our_spirit" class="card my-4">
                    <h2 class=" font-bold text-4xl text-center">Our Spirit</h2>
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
                                <img src="{{ asset($aboutpage->image) }}" class="figure-img img-fluid" alt="">
                            </figure>
                        </div>
                        <div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea class="tiny" name="spirit_text" id="spirit_text" cols="150"  minlength="100" maxlength="255">{{$aboutpage->spirit_text}}</textarea>
                        <span id="compt_spirit" class="text-right">max 255 signs</span>
                    </div>
                </section>
                <section class="card my-4" id="factory_aboutpage">
                    <h2 class=" font-bold text-4xl text-center card-text"> Factory</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea class="tiny" name="factory_text" id="factory_text" cols="150"  minlength="100" maxlength="255">{{$aboutpage->factory_text}}</textarea>
                        <span id="compt_factory" class="text-right">max 255 signs</span>
                    </div>
                </section>
                <section id="research_aboutpage" class="card my-4">
                      <h2 class=" font-bold text-4xl text-center card-text">Research & Development</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="research_text" class="tiny" id="research_text" cols="150" required>{{$aboutpage->research_text}}</textarea>
                        <span id="compt_research" class="text-right">max 255 signs</span>
                    </div>
                </section>
                    <button class="btn btn-success btn-md" type="submit"><span class="fas fa-pen pr-2"></span>Update the About us page</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $('#alert').html("");
        let compteur_spirit = $('#compt_spirit');
        $('#spirit_text').keyup(function() {
                    
            var nombreCaractere2 = $(this).val().length;
            var nombreCaractere2 = 255 - nombreCaractere2;
            
            var nombreMots2 = jQuery.trim($(this).val()).split(' ').length;
            if($(this).val() === '') {
                nombreMots2 = 0;
            }
            var msg2 = ' ' + nombreMots2 + ' mot(s) | ' + nombreCaractere2 + ' Caractere(s) restant';
            $('#compt_spirit').text(msg2);


        }); 
     
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

</script>
    
@endsection
