@extends('layout')
@section('content')
<h2>Available</h2>
<form action="{{route('jobs.showjob')}}" method="GET">
<div class="input-group">
    <input type="text" name="search" class="form-control" placeholder="search by job title..."
    value="{{$search ?? ''}}">
    <button class="btn btn-dark" type="submit">Search</button>
</div>
</form>
<div class="row">
    @foreach($jobs as $x)
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">{{$x['title']}}</h4>
                <p class="card-text"><b>Company:</b>{{$x['company']}}</p>
                <p class="card-text"><b>Location:</b>{{$x['location']}}</p>
                <a href="" class="btn btn-danger">Apply</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
