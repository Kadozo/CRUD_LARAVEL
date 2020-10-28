@extends('layouts.layout')
@section('content')
<div class="title m-b-md">
    ADD A FILE
</div>
<form method="POST" action="{{route('file.store')}}">
    @csrf
    <div class="form-group">
      <label for="name" class="col-sm-3 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name = "name" id="name" placeholder="Example">
      </div>
      <div class="form-group">
        <label for="date" class="col-sm-3 col-form-label">Date</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name = "date" id="date">
        </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Add</button>
  </form>
@endsection