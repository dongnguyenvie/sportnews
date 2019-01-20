@extends('admin/layout/index')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-5 col-lg-offset-2 main">
        <h2>Add User</h2>

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


        <form action="admin/user/add" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group ">
                <label for="body">Email</label>
                <input type="email" class="form-control " id="email" name="email">
            </div>
            <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="password" class="form-control " id="password" name="password">
            </div>
            <div class="form-group ">
                <label for="re-password">Re-Password</label>
                <input type="password" class="form-control " id="re-password" name="re-password">
            </div>
            <div class="form-group ">
                <label for="level">Level</label>
                <select name="level" id="level">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                    <option value="2">Advertisor</option>
                </select>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>

</div>



@endsection
