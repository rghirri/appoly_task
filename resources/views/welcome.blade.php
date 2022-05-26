@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-3"></div>
 <div class="col-6 mt-3">
  <h1 class="text-center my-3">Appoly Task</h1>
  <div class="card card-default">
   <div class="card-header">
    Fruit List
   </div>
   <div class="card-body">
    <ul style="list-style-type:circle;" class="list-group">
     @foreach ($fruits as $fruit)
     <li class="list-group-item">
      <x-fruit-item :fruit="$fruit" />
     </li>
     @endforeach
     <a href="/update"><button class="btn btn-primary mt-3">Update List</button></a>
   </div>
  </div>
 </div>
 <div class="col-3"></div>
</div>
@endsection