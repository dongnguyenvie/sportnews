
@extends('admin/layout/index')

@section('content')
    <h2>Edit Post</h2>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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

        <form action="admin/collect/edit/{{$collect->id}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$collect->title}}">
            </div>
            <div class="form-group ">
                <label for="summary">Summary</label>
                <textarea class="form-control myeditor" id="summary" name="summary" >{{$collect->summary}}</textarea>
            </div>
            <div class="form-group ">
                <label for="body">Body</label>
                <textarea class="form-control myeditor" name="body" id="body" >{{$collect->body}}</textarea>
            </div>
            <div class="form-group ">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="0">pendding</option>
                        <option value="1">accept</option>
                        <option value="2">Fail</option>
                    </select>
                </div>
            <div class="form-group ">
                <hr>
                <img src="storage/upload/collector_image/{{$collect->image}}" alt="" width="300px">
                <hr>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>

@endsection

