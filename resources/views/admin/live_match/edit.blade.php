@extends('admin/layout/index')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-2 main">
        <h2>Edit Slide</h2>

        @if (count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        @if (session('alert'))
            <div class="alert alert-success">
                {{session('alert')}}
            </div>
        @endif


        <form action="admin/live-match/edit/{{$live_match->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
                <label for="name">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter name" name="title" value="{{$live_match->title}}">
            </div>
            <div class="form-group ">
                <label for="name">Summary</label>
                <input type="text" class="form-control myeditor" id="summary" name="summary" value="{{$live_match->summary}}">
            </div>
            <div class="form-group ">
                <label for="body">Body</label>
                <input width="500px" type="text" class="form-control myeditor" id="body" name="body" value="{{$live_match->body}}">
            </div>
            <div class="form-group ">
                <label for="status">Status</label>
                <select name="status" id="">
                    <option value="0">End</option>
                    <option value="1">Live</option>
                </select>
            </div>

            <div class="form-group ">
                    <hr>
                    <img src="storage/upload/live_match/{{$live_match->image}}" alt="" width="300px">
                    <hr>
                    <input class="form-control" type="file" name="image" id="image">
            </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>

</div>



@endsection
