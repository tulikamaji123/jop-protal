@extends ('layout')
@section('content')
<h2>Add Job</h2>
<form action="{{route('jobs.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
     <div class="mb-2">
        <label for="">Description</label>
        <textarea  name="description" class="form-control"></textarea>
    </div>
    <div class="mb-2">
        <label for="">Company</label>
        <input type="text" name="company" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Location</label>
        <input type="text" name="location" class="form-control">
    </div>
     <div class="mb-2">
        <label for="">Salary</label>
        <input type="number" name="salary" class="form-control">
    </div>
      <div class="mb-2">
        <label for="">Student Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <br>
<button type="submit" class="btn btn-success">Add Job</button>

</form>
@endsection