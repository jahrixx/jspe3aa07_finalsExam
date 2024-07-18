@extends('mainLayout')
@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">Movie Information</div>
<div class="float-end">
    <a href="{{ route('movies.index') }}" class="btn btn-primary btn-sm">&larr; Back </a>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <label for="code" class="col-md-4 col-formlabel text-md-end text-start"><strong>Movie ID:</strong></label>
        <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_id }}</div>
    </div>
<div class="row">
    <label for="name" class="col-md-4 col-formlabel text-md-end text-start"><strong>Movie Title:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_title }}</div>
    </div>
<div class="row">
    <label for="quantity" class="col-md-4 colform-label text-md-end text-start"><strong>Movie Year:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_year }}</div>
</div>
<div class="row">
    <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>Movie Time:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_time }}</div>
</div>
<div class="row">
    <label for="description" class="col-md-4 colform-label text-md-end textstart"><strong>Movie Language:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_lang }}</div>
</div>
<div class="row">
    <label for="description" class="col-md-4 colform-label text-md-end textstart"><strong>Movie Date Release:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_dt_rel }}</div>
</div>
<div class="row">
    <label for="description" class="col-md-4 colform-label text-md-end textstart"><strong>Movie Release Country:</strong></label>
    <div class="col-md-6" style="line-height:35px;">{{ $movie->mov_rel_country }}</div>
</div>
            </div>
        </div>
    </div> 
</div>

@endsection
