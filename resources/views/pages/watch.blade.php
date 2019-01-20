@extends('layout/index')

@section('content')
{{-- Category --}}

<section id="feature_category_section" class="feature_category_section section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <iframe width="480" height="270" src="http://video.bongdaplus.vn/{{$video->link}}" frameborder="0" scrolling="no" allowfullscreen></iframe>
                <br>
                <h2>{{$video->title}}</h2>
                <p>{{$video->created_at}}</p>
                <h2>Realte videos</h2>
                <div class="row">

                    @foreach ($realte_video as $vid)
                        <div class="col-md-3">
                            <a href="watch/{{$vid->id}}">
                                <img class="img-responsive" src="storage\upload\videos_image\{{$vid->image}}" alt="">
                                    <h4><a href="watch">{{$vid->title}}</a></h4>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>


            @include('pages/right_sidebar')
        </div>


    </div>

</section>

@endsection


