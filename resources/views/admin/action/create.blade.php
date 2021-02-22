@extends('layouts.admin')

@section('admin.create')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">dashboard admin</a></li>
                        <li class="breadcrumb-item active">créer un super admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="container card">
        <form method="POST" action="{{ route('admin.store') }}">
            @csrf
            @include('includes.errors')
            <div>
                <label for="name" value="" >{{ __('Name of the super admin') }}</label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Super-Admin" />
            </div>
            <div class="mt-4">
                <label for="email" value="" >{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="admin@super-admin.fr"/>
            </div>
            <div class="mt-4">
                <label for="password" value="" >{{ __('Password') }}</label>
                <span class="muted text-cool-gray-600">8 character min</span>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password1234"/>
            </div>
            <div class="mt-4">
                <label for="password_confirmation" value="" >{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <button class=" btn btn-success">{{ __('Create this super admin') }}</button>
            </div>
        </form>
    </div>
    </div>
@endsection
