@extends('layouts.admin')

@section('admin.homepage')
<style>
  [x-cloak=""] { display: none; }
</style>
   <div class="elegant-color">
       <div class="jumbotron text-center">
           <h1 class="text-info display-2">Homepage management</h1>
       </div>
   </div>

   <div class="row">
      <div class="col-12">
      	<div class="card card-list">
          <div class="card-body">
           <livewire:homepage-table />
          </div>
        </div>
      </div>
    </div>
@endsection
