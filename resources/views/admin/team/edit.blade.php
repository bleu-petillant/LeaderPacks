@extends('layouts.admin')

@section('admin.team.edit')
<style>
  [x-cloak=""] { display: none; }
</style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item  text-red-500">Edit {{$team->teammates}} {{$team->lastname}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row justify-content-center">
            <div class="col-md-6 card">
                <form class="text-center" action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    @include('includes.errors')
                    <label for="teammates">Change teammates</label>
                    <input type="text" id="teammates" name="teammates" class="form-control my-4" value="{{$team->teammates}}" autofocus placeholder="{{$team->teammates}}">
                    <label class="label" for="job_title">Change Job Title</label>
                        <input type="text" name="job_title" id="job_title" class="form-control my-4" value="{{$team->job_title}}" placeholder="{{$team->job_title}}">
                        <div class="container my-2">
                            <label for="desc">Change description : (max 255 character)</label> <br>
                            <textarea name="desc" id="desc" cols="50">{{$team->desc}}</textarea>
                        </div>

                    <div class="container my-5">
                         <div class="col-lg-4">
                         <h3 class="text-2xl">Change image profil :</h3>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input my-2" name="image" id="image" lang="fr"
                                onchange="return fileValidation()">
                            <label class="custom-file-label" for="image"></label>
                            <div id="alert"></div>
                        </div>
                    </div>
                    <div id="imagePreview" class="col-lg-6">
                        <div class="col-lg-4">
                            <img src="{{asset($team->image)}}" class="img-fluid" alt="avatar">
                        </div>
                    <div>
                     </div>
                    </div>
                    </div>
                    <button class="btn btn-outline-dark my-4" type="submit"><span class="fas fa-pen pr-2"></span>Apply change to this teammate</button>
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
