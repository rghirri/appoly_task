@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-3"></div>
 <div class="col-6 mt-3">
  <h1 class="text-center my-3">Appoly Task</h1>
  <div class="card card-default my-5">
   <div class="card-header">
    Fruit List
   </div>
   <div class="card-body">
    <ul style="list-style-type:circle;" class="list-group">
     @foreach($fruits as $fruit)
     <li class="list-group-item">
      <div class="d-flex justify-content-between">
       <p>{{ $fruit->label }}</p>
       <a href="/update/{{ $fruit->id }}"><button class="btn btn-primary btn-sm">View</button></a>
      </div>
     </li>
     @endforeach
    </ul>
   </div>
  </div>
 </div>
 <div class="col-3"></div>
</div>
@endsection