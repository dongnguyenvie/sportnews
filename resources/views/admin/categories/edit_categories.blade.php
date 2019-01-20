@extends('admin/layout/index')

@section('content')
    <h2>Edit Categories</h2>
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

        <form action="admin/categories/edit/{{$categorie->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
            <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$categorie->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>

@endsection
