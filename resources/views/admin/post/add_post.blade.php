@extends('admin/layout/index')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-5 col-lg-offset-2 main">
        <h2>Add Post</h2>

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


        <form action="admin/post/add" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group ">
                <label for="summary">Summary</label>
                <textarea class="form-control myeditor" id="summary" name="summary"></textarea>
            </div>
            <div class="form-group ">
                <label for="body">Body</label>
                <textarea class="form-control myeditor" name="body" id="body"></textarea>
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
                <label for="breaking_news">Breaking_news</label>
                <select class="form-control" name="breaking_news">
                        <option value="1">Yes</option>
                        <option value="0" selected="selected">No</option>
                </select>
            </div>
            <div class="form-group ">
                <input class="form-control" type="file" name="image" id="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>



@endsection
