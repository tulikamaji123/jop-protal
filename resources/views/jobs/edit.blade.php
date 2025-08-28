 @extends ('layout')
@section('content')
<h2>Edit Job</h2>
<form action="{{route('jobs.update',$job->id)}}"  method="POST" enctype="multipart/form-data">
    @csrf  @method('PUT')
    <div class="mb-2">
        <label for="" >Title</label>
        <input type="text" name="title" class="form-control" 
        value=" {{$job->title}} ">
    </div>
     <div class="mb-2">
        <label for="">Description</label>
        <textarea  name="description" class="form-control">
            {{$job->description}}
        </textarea>
    </div>
    <div class="mb-2">
        <label for="">Company</label>
        <input type="text" name="company" class="form-control" 
        value="{{$job->company}}">
    </div>
    <div class="mb-2">
        <label for="">Location</label>
        <input type="text" name="location" class="form-control"
        value="{{$job->location}}">
    </div>
     <div class="mb-2">
        <label for="">Salary</label>
        <input type="number" name="salary" class="form-control"
        value="{{$job->salary}}">
    </div>
     <div class="mb-2">
        <label for="">Current Image</label>
      @if($job->image)
    <img src="{{ asset('uploads/jobs/'.$job->image) }}" alt="" width="100">
@else
    <p>no image</p>
@endif
<input type="file" name="image" class="form-control">

       
    </div>
    <br>
<button type="submit" class="btn btn-primary"
>Update Job</button>

</form>
@endsection 






