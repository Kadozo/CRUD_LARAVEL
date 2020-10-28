@extends('layouts.layout')
@section('content')
<div class="title m-b-md">
    ADDED FILES
</div>
<a type="button" class="btn btn-outline-dark" href="{{ route('file.add') }}">Add Files</a>
<br><br>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach ($files as $file)
    <tbody>
        <tr>
        <th scope="row">{{ $file->id }}</th>
        <td>{{ $file->name }}</td>
          <td>{{$file->date}}</td>
          <td></td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection