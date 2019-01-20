@extends('admin/layout/index')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-5 col-lg-offset-2 main">
        <h2>Advertisement</h2>

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


        <form action="admin/advertisement/edit/{{$ad->id}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label for="client_name">Client Name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{$ad->client_name}}">
            </div>
            <div class="form-group ">
                <label for="date_start">Date Start</label><br>
                <input data-date-format="yyyy/mm/dd" class="datepicker" id="date_start" name="date_start" value="{{$ad->date_start}}">
            </div>
            <div class="form-group ">
                <label for="date_end">Date End</label><br>
                <input data-date-format="yyyy/mm/dd" class="datepicker" id="date_end" name="date_end" value="{{$ad->date_end}}">
            </div>

            <div class="form-group ">
                <label for="position">Position</label>
                <select name="position" id="position">
                    @foreach ($ad_position as $ad)
                    <option value="{{$ad->id}}">{{$ad->position}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <img src="storage/upload/advertisement/{{$ad->image}}" alt="">
                <input class="form-control" type="file" name="image" id="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>



@endsection

