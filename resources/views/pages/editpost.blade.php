@extends('layout/index')

@section('content')

<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
        <div class="row">
                <div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
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


                        <form action="edit-post/{{$collect->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group ">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$collect->title}}">
                            </div>
                            <div class="form-group ">
                                <label for="summary">Summary</label>
                                <input class="form-control myeditor" id="summary" name="summary" value="{{$collect->summary}}"/>
                            </div>
                            <div class="form-group ">
                                <label for="body">Body</label>
                                <input class="form-control myeditor" name="body" id="body" value="{{$collect->body}}"/>
                            </div>
                            <div class="form-group ">
                            <img width="150px" height="150px" src="storage\upload\collector_image\{{$collect->image}}" alt="">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                </div>
        </div>



    </section><!--feature_category_section-->
    @endsection
