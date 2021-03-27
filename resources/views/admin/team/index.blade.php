@extends('layouts.admin')

@section('admin.team')
<style>
  [x-cloak=""] { display: none; }
</style>
   <div class="elegant-color">
       <div class="jumbotron text-center">
           <h1 class="text-info display-2">Departments list</h1>
       </div>
   </div>

   <div class="row">
      <div class="col-12">
      	<div class="card card-list">
        <div class="card-header bg-dark py-3 d-flex justify-content-center my-4">
            <a href="{{route('team.create')}}" class="btn btn-outline-danger btn-md px-3 my-0 mr-0 white-text"><i class="fas fa-plus pr-2"></i>Add a new department</a>
        </div>
          <div class="card-body">
            <livewire:team-table searchable="lastname,firstname,job_title" />
          </div>
        </div>
      </div>
    </div>
@endsection