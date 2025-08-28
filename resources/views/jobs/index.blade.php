@extends ('layout')
@section('content')
<h2>Job List</h2>
<a href="{{route('jobs.create')}}" class="btn btn-danger
">Add Job</a>
@if(session('success'))
<div class="alert alert-success">{{session('success')}} </div>
@endif

<table class="table table-dark">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Company</th>
    <th>Location</th>
    <th>Salary</th>
    <th>Image</th>
    <th>Action</th>
</tr>

@foreach($jobdata as $x)
<tr>
    <td> {{$x->id}} </td>
    <td> {{$x->title}} </td>
    <td> {{$x->description}} </td>
    <td> {{$x->company}} </td>
    <td> {{$x->location}} </td>
    <td> {{$x->salary}} </td>
    <td>
      @if($x->image)
    <img src="{{ asset('uploads/jobs/'.$x->image) }}" alt="" width="100">
@else
    <p>no image</p>
@endif

    </td>
   <td>
    <a href="{{ route('jobs.show', $x->id) }}" class="btn btn-info btn-sm">Show</a>
    <a href="{{ route('jobs.edit', $x->id) }}" class="btn btn-primary btn-sm">Edit</a>

    <form action="{{ route('jobs.destroy', $x->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
            Delete
        </button>
    </form>
</td>

</tr>
@endforeach
</table>


@endsection