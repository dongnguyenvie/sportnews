@extends('admin/layout/index')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-2 main">
        <h2>Add Live Match</h2>

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


        <form action="admin/live-match/add" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter name" name="title">
            </div>
            <div class="form-group ">
                <label for="name">Summary</label>
                <input type="text" class="form-control myeditor" id="summary" name="summary">
            </div>
            <div class="form-group ">
                <label for="body">Body</label>
                <input type="text" class=" myeditor" id="body" name="body">
            </div>
            <div class="form-group ">
                <label for="status">Status</label>
                <select name="status" id="">
                    <option value="0">End</option>
                    <option value="1">Live</option>
                </select>
            </div>
            <div class="form-group ">
                <input type="file" class="form-control" id="image" name="image">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>

</div>



@endsection
