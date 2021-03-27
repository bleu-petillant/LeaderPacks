@extends('layouts.admin')

@section('admin.contact.edit')
    <div class="content-header">
    <div class="container-fluid mb-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact page builder</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid">
        <div class="col-lg-12">
            @include('includes.errors')
            <form class="text-center" action="{{ route('contactpage.update',$contactpage->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <section id="contact_page" class="card my-4">
                    <h2 class=" font-bold text-4xl text-center"> Contact</h2>
                    <div class="card-body">
                        <h3 class="text-2xl">Change text :</h3>
                        <textarea name="contact_text" id="contact_text" cols="150"  minlength="100" maxlength="255">{{$contactpage->contact_text}}</textarea>
                        <span id="compt_spirit" class="text-right">max 255 signs</span>
                    </div>
                </section>
                    <button class="btn btn-success btn-md" type="submit"><span class="fas fa-pen pr-2"></span>Update contact page</button>
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
