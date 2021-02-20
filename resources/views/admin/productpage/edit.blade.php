@extends('layouts.admin')

@section('admin.product.edit')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">acceuil du site</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">liste des produits</a></li>
                        <li class="breadcrumb-item active">modifier le produit <span class="text-danger font-perso font-italic">{{ $product->name }}</span></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                    @include('includes.errors')
                    <form class="text-center" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                      @include('includes.errors')
                    <label for="category">changer la catégorie</label>
                    <select name="category" id="category" class="custom-select custom-select-sm my-2" required>
                        <option value=""selected style="display: none">changer la catégorie pour ce produit</option>
                        @foreach ($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    <hr class="hr-light my-2">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input my-2" name="image" id="image" lang="fr">
                      <label class="custom-file-label" for="image">Modifier l' image</label>
                      <label for="alt" class="label"> ajouter une description pour l'image (ALT)</label>
                      <input type="text" id="alt" name="alt" value="{{ $product->alt}}" class="form-control my-2" placeholder="Description de l'image" required>
                        <div class="col-6">
                            <p>image actuelle</p>
                            <div style="max-width: 150px;max-height:150px;overflow:hidden">
                                <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <hr class="hr-light">
                    <label for="name">donner un nom à votre produit</label>
                    <input type="text" id="name" name="name" value="{{ $product->name}}" class="form-control my-2" placeholder="Nom du produit" required>

                    <hr class="hr-light">
                    <label for="meta">ajouter une metadescription (SEO) qui apparaitra dans les pages google<small class="text-danger">(max 255 caractères)</small></label>
                    <input type="text" id="meta" name="meta" value="{{ $product->meta}}" class="form-control my-2" placeholder="Metadescription" required>
                    <hr class="hr-light">
                    <label for="detail">petite description du produit  <small class="text-danger">(max 255 caractères)</small></label>
                    <input type="text" id="detail" name="detail" class="form-control my-5 editor" value="{{ $product->detail}}" placeholder="Détaillez votre produit... ">
                    <hr class="hr-light">
                    <label for="desc">Grande description du produit</label>
                    <textarea type="text" id="desc" name="desc" class="form-control my-5 editor">{{$product->desc}}</textarea>
                    <div class="my-2"></div>
                    <div class="flex">
                        <div class="col-lg-4">
                            <label for="price">Le prix du produit actuelle en chiffre <br> <small class="text-danger">exemples: pour 20 €  écrire 20</small></label>
                            <input type="number" name="price" id="price" value="{{ $product->price}}" class="form-controll" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="price_promos">montant de la remise en chiffre <br> <small class="text-danger">exemples: pour 20 €  écrire 20</small></label>
                            <input type="number" name="price_promos" id="price_promos" value="{{ $product->price_promos}} " class="form-controll">
                        </div>
                        <div class="col-lg-4">
                            <label for="stock">Stock du produit pour l'inventaire <br><small class="text-danger">important pour la mise à jour des stocks</small></label>
                            <input type="number" name="stock" id="stock" class="form-controll" value="{{ $product->stock}}" required>
                        </div>
                    </div>
                    <div class="my-4">
                    </div>
                    <button class="btn btn-success my-3" type="submit"><span class="pr-2"></span>modifier le produit</button>
                </form>
            </div>
        </div>
    </div>

<script>



        $(document).ready(function () {
                $('#image').val("");
                $('#alert').html("");
            });
         function fileValidation() { 
            var fileInput =  document.getElementById('image'); 
              
            var filePath = fileInput.value; 
          var alert = document.getElementById('alert');
            // Allowing file type 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                
                alert.innerHTML = "";
                alert.innerHTML = '<span class="text-danger font-bold">ceci n"est pas une image valide seul les images extensions (gif, png, jpeg et jpg) sont autoriser merci !</span>';
                fileInput.value = ''; 
                 document.getElementById( 'imagePreview').innerHTML ="";
                return false; 
            }  
            else  
            { 
               alert.innerHTML = "";
               document.getElementById( 'imagePreview').innerHTML ="";
                // Image preview 
                if (fileInput.files && fileInput.files[0]) { 
                    var reader = new FileReader(); 
                    reader.onload = function(e) { 
                        document.getElementById( 
                            'imagePreview').innerHTML =  
                            '<img src="' + e.target.result 
                            + '"/>'; 
                    }; 
                      
                    reader.readAsDataURL(fileInput.files[0]); 
                } 
            } 

                
        }

</script>
@endsection
