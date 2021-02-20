<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="ml-auto navbar-nav me-auto">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
        <ul class="mr-auto navbar-nav">
           <a href="#"><span class="fas fa-user rounded bg-blue-700 text-white fa-2x"></span></a>
        </ul>
    </div>
</nav>
