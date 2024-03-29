@extends('layouts.admin')

@section('admin.index')
<style>
  [x-cloak=""] { display: none; }
</style>
   <div class="space-y-4">
       <div class="block jumbotron bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 text-center">
           <h1 class="text-teal-900 text-5xl">Admin List</h1>
       </div>
   </div>
   <div class="row">
      <div class="col-12">
      	<div class="card card-list">
        <div class="card-header py-3 d-flex justify-content-center my-4">
            <a href="{{route('admin.create')}}" class="btn btn-outline-danger btn-md px-3 my-0 mr-0 white-text"><i class="fas fa-plus pr-2"></i>Create a super Admin</a>
        </div>
          <div class="card-body">
            <livewire:admintables />
          </div>
        </div>
      </div>
    </div>
@endsection
