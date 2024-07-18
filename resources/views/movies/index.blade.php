@extends('mainLayout')
@section('content')
<div class="row justify-content-center mt-3">
 <div class="col-md-12">
 @session('success')
 <div class="alert"></div>
 @endsession
 <div class="card">
 <div class="card-header">Movie List</div>
 <div class="card-body">
 <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Select Movie by ID Number</a>
 <table class="table table-striped table-bordered">
 <thead>
 <tr>
 <th scope="col">ID#</th>
 <th scope="col">Movie ID</th>
 <th scope="col">Movie Title</th>
 <th scope="col">Movie Year</th>
 <th scope="col">Movie Time</th>
 <th scope="col">Movie Language</th>
 <th scope="col">Movie Date Release</th>
 <th scope="col">Movie Release Country</th>
 </tr>
 </thead>
<tbody>
 @forelse ($movies as $movie)
<tr>
 <th scope="row">{{ $loop->iteration}}</th>
 <td>{{ $movie->mov_id }}</td>
 <td>{{ $movie->mov_title }}</td>
 <td>{{ $movie->mov_year }}</td>
 <td>{{ $movie->mov_time }}</td>
 <td>{{ $movie->mov_lang }}</td>
 <td>{{ $movie->mov_dr_rel }}</td>
 <td>{{ $movie->mov_rel_country }}</td>
 <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
 @csrf
    @method('DELETE')
 <a href="{{ route('movies.show',$movie->id) }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i> Show</a>
 <a href="{{ route('movies.edit',$movie->id) }}" class="btn btn-primary btn-sm"><i class="bi bipencil-square"></i> Edit</a>
 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this movie?');"><i class="bi bi-trash"></i> Delete</button>