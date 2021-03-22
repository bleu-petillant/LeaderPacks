
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Leader Packs Admin</title>
    <!-- Font Awesome Icons -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css'/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @livewireStyles
    <!-- Scripts -->
	
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    
</head>
<body class="hold-transition sidebar-mini">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
</head>
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar  elevation-4" style="background-color: #6d7aea;">

    <div class="sidebar">
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item my-2 bg-white hover:bg-black hover:text-white ">
                <a href="{{route('homepage.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-building"></i>Build Home page
                </a>
            </li>
            <li class="nav-item my-2 bg-white hover:bg-black hover:text-white ">
                <a href="{{route('aboutpage.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>Build About page
                </a>
            </li>
            <li class="nav-item my-2 bg-white">
                <a href="{{route('productpage.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>Build Product page
                </a>
            </li>
            <li class="nav-item my-2 bg-white">
                <a href="{{route('contactpage.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>Build Contact page
                </a>
            </li>
            <li class="nav-item my-2 bg-white">
                <a href="{{ route('team.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-plus"></i>Manage the Team
                </a>
            </li>
            <li class="nav-item my-2 bg-white">
                <a href="{{ route('home') }}" class="nav-link" target="_blank">
                    <i class="nav-icon fas fa-eye"></i>See the website
                </a>
            </li>
            <div class="divide-y ">
                {{-- <li class="nav-item my-2 bg-white mt-5">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        <i class="nav-icon fas fa-cog px-2"></i>Settings
                    </a>
                </li> --}}
                <li class="nav-item my-2 bg-white">
                    <a class="nav-link" href="{{ route('admin.list') }}" :active="request()->routeIs('admin.list')">
                        <i class="nav-icon fas fa-key px-2"></i>Manage Admins
                    </a>
                </li>
            <li class="nav-item my-2 bg-gradient-dark mt-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt px-2"></i>{{ __('Logout') }}
                    </a>
                </form>
            </li>
        </ul>
        
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
    <div class="elegant-color content-wrapper">
        {{ $slot ?? '' }}
        @yield('admin.dashboard')
        @yield('admin.index')
        @yield('admin.create')
        @yield('admin.homepage.edit')
        @yield('admin.about.edit')
        @yield('admin.product.edit')
        @yield('admin.team.create')
        @yield('admin.team.edit')
        @yield('admin.contact.edit')
        @yield('admin.team')
    </div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer elegant-color">

</footer>
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.js'></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>


<!-- AdminLTE App -->
<script src="{{ asset ('admin/js/adminlte.min.js') }}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js"></script>

@stack('modals')

    @livewireScripts
    <script>
        //var  validate = new ValidateCourseQuestion();
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        
        $(function () {
            window.scrollTo(0, 0);
            tinymce.init({
                selector : ".tiny",
                plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            bsCustomFileInput.init();
            
    });
    </script>
</body>
</html>
