@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-3"></div>
 <div class="col-6 mt-3">
  <h1 class="text-center my-3">Appoly Task</h1>
  <div class="card card-default">
   <div class="card-header">
    Create Item
   </div>
   <div class="card-body">

    @if($errors->any())
    <div class="alert alert-danger">
     <ul class="list-group">
      @foreach($errors->all() as $error)
      <li class="list-group-item">
       {{ $error }}
      </li>
      @endforeach
     </ul>
    </div>
    @endif

    <form action="/store" method="POST">
     @csrf
     <div class="form-group">
      <label for="label">Item</label>
      <input type="text" class="form-control" name="label">
     </div>
     <div class="form-group">
      <button type="submit" class="btn btn-primary mt-3">Create Item</button>
     </div>
    </form>
   </div>
  </div>
 </div>
 <div class="col-3"></div>
</div>
@endsection('content')