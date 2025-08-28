@extends('layout')

@section('content')
<h1 class="text-center mb-4">Job Details</h1>

<div class="card shadow-lg">
    <div class="card-header text-center bg-dark text-white">
        <h4>{{ $job->title }}</h4>
    </div>

    <div class="card-body">
        <div class="row align-items-center">
            
            <!-- Left Side: Job Details -->
            <div class="col-md-7 ">
                <p><strong>Description:</strong> {{ $job->description }}</p>
                <p><strong>Company:</strong> {{ $job->company }}</p>
                <p><strong>Location:</strong> {{ $job->location }}</p>
                <p><strong>Salary:</strong> ₹{{ number_format($job->salary, 2) }}</p>
            </div>

            <div class="col-md-5 text-center">
                @if($job->image)
                    <img src="{{ asset('uploads/jobs/'.$job->image) }}" 
                         alt="Job Image" class="img-fluid rounded shadow" style="max-width: 150px;">
                @else
                    <p class="text-muted">No Image</p>
                @endif
            </div>

        </div>
    </div>

    <div class="card-footer text-center">
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>
@endsection
