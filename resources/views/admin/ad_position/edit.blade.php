
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

        <form action="admin/ad-position/edit/{{$ad->id}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{$ad->position}}">
            </div>
            <div class="form-group ">
                <label for="price">Price</label>
                <textarea class="form-control" id="price" name="price" >{{$ad->price}}</textarea>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>

@endsection

