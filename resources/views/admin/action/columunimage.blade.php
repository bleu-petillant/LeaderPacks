@if (!empty($product_image))
<div class="block w-10">
    <img src="{{asset($product_image)}}" class="img-fluid">
</div>
@elseif($image)
<div class="block w-10">
    <img src="{{asset($image)}}" class="img-fluid">
</div>
@endif
