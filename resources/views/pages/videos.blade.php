@extends('layout/index')

@section('content')
{{-- Category --}}


        <section id="feature_category_section" class="feature_category_section section_wrapper">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                        @foreach ($categories as $cate)
                        <?php
                            $data = $cate->video->sortByDesc('created_at')->take(4);
                        ?>
                            <div class="row" style="padding-top:80px">
                                @if (count($data)>0)
                                <h2><a href="videos-categories/{{$cate->id}}/{{$cate->alias}}">{{$cate->name}}</a></h2>
                                <hr style=" display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;} ">
                                @endif


                                @foreach ($data->all() as $video)
                                <div class="col-md-3">
                                <a href="watch/{{$video->id}}">
                                <img class="img-responsive" src="storage\upload\videos_image\{{$video->image}}" alt="">
                                    <h4><a href="watch/{{$video->id}}">{{$video->title}}</a></h4>
                                </a>
                                </div>
                                @endforeach

                            </div>
                        @endforeach
                                <div class="clearfix"></div>

                        </div><!--col-md-9-->


                           @include('pages/right_sidebar')
                    </div>
                </div>
        </section>
@endsection



