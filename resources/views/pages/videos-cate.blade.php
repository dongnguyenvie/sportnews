@extends('layout/index')

@section('content')

<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
        <div class="container">
            <div class="row">
                   <div class="col-md-9">
                    <div class="row">
                        @foreach ($videos as $video)
                        <div class="col-md-6" style="width:400px;height:450px;">
                                <div class="feature_news_item">
                                    <div class="item">
                                        <div class="item_wrapper">
                                            <div class="item_img">
                                            <img class="image-repsonsive" width="300px" height="320px"  src="storage\upload\videos_image\{{$video->image}}" alt="Chania">
                                            </div> <!--item_img-->
                                            <div class="item_title_date">
                                                <div class="news_item_title">
                                                <h2><a href="watch/{{$video->id}}">{{$video->title}}</a></h2>
                                                </div>
                                                <div class="item_meta"><a href="#">{{$video->created_at}}</a> by:<a href="#">Admin</a></div>
                                            </div><!--item_title_date-->
                                        </div> <!--item_wrapper-->
                                    </div><!--item-->
                                </div><!--feature_news_item-->
                            </div><!--col-md-6-->
                        @endforeach




                    </div><!--row-->
                    {{$videos->links()}}
                   </div><!--col-md-9-->

                   @include('pages/right_sidebar')
            </div>
    </section><!--feature_category_section-->











@endsection



