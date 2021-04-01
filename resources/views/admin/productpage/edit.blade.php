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
                    <section class="card my-4" id="product_text">
                        <h2 class=" font-bold text-4xl text-center card-text">Header</h2>
                        <div class="card-body">
                            <h2 class="text-2xl text-center">Change text : </h2>
                            <textarea name="product_text" id="product_text" cols="150"  minlength="100" maxlength="255">{{$productpage->product_text}}</textarea>
                            <span id="compt_spirit" class="text-right">max 255 signs</span>
                        </div>
                    </section>
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
                        <div id="imagePreview" class="col-lg-4">
                            <figure class="figure">
                                <figcaption class="figure-caption text-right">Your current image</figcaption>
                                <img src="{{ asset($productpage->image) }}" class="figure-img img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                <section class="card my-4" id="Technology">
                    <h2 class=" font-bold text-4xl text-center card-text">Technology</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="technologie_text" class="tiny" id="technologie_text" cols="150"  minlength="100" maxlength="255">{{$productpage->technologie_text}}</textarea>
                        <span id="compt_factory" class="text-right">max 255 signs</span>
                    </div>
                </section>
                <section id="innovation" class="card my-4">
                      <h2 class=" font-bold text-4xl text-center card-text">RESEARCH & DEVELOPMENT </h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="innovation_text" class="tiny" id="innovation_text" cols="150" required>{{$productpage->innovation_text}}</textarea>
                        <span id="compt_research" class="text-right">max 255 signs</span>
                    </div>
                </section>
                    <button class="btn btn-success my-3" type="submit"><span class="pr-2 fas fa-pen"></span>Update modification</button>
                </form>
        </div>
    </div>


<script>
        $(document).ready(function () {

            $('#alert').html("");
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
