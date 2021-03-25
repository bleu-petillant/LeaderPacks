@extends('layouts.admin')

@section('admin.team.create')
<style>
  [x-cloak=""] { display: none; }
</style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add a new teammate</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row justify-content-center">
            <div class="col-md-6 card">
                <form class="text-center" action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('includes.errors')
                    <label for="teammates">teammates</label>
                    <input type="text" id="teammates" name="teammates" class="form-control my-4" autofocus placeholder="Tom" required>
                    <label class="label" for="job_title">Job Title</label>
                        <input type="text" name="job_title" id="job_title" class="form-control my-4" required placeholder="Actor (Loki)">
                        <div class="container my-2">
                            <label for="desc">Enter a little description here: (max 255 character)</label> <br>
                            <textarea name="desc" id="desc" cols="50"></textarea>
                        </div>

                    <div class="container my-5">
                         <div class="col-lg-4">
                         <h3 class="text-2xl">Add your image profil :</h3>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input my-2" name="image" id="image" lang="fr"
                                onchange="return fileValidation()">
                            <label class="custom-file-label" for="image"></label>
                            <div id="alert"></div>
                        </div>
                    </div>
                    <div id="imagePreview" class="col-lg-6">
                        <div class="col-lg-4">
                            <img src="https://akns-images.eonline.com/eol_images/Entire_Site/2016520/rs_600x600-160620064301-600.Tom-Hiddleston.jpg?fit=around%7C1080:1080&output-quality=90&crop=1080:1080;center,top" class="img-fluid" alt="avatar">
                        </div>
                    <div>
                     </div>
                    </div>
                    </div>
                    <button class="btn btn-outline-pink raleway my-4" type="submit"><span class="fas fa-plus pr-2"></span>Add this teammate ?</button>
                </form>
            </div>
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
