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


                        <form action="new-post" method="POST" enctype="multipart/form-data">
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
                                <input class="form-control" type="file" name="image" id="image">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                </div>
        </div>



    </section><!--feature_category_section-->
    @endsection
