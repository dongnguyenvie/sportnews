@extends('admin/layout/index')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-5 col-lg-offset-2 main">
        <h2>Add Video</h2>

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

        <form action="admin/video/edit/{{$video->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$video->title}}">
            </div>
            <div class="form-group ">
                <label for="body">Link</label>
                <input type="text" class="form-control " id="link" name="link" value="{{$video->link}}">
            </div>
            <div class="form-group ">
                <label for="categories_id">Categories</label>
                <select name="categories_id" class="form-control">
                    @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group ">
                <hr>
                <img src="storage/upload/videos_image/{{$video->image}}" alt="" width="300px">
                <hr>
                <input class="form-control" type="file" name="image" id="image">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>

</div>



@endsection
