@extends('layout/index')

@section('content')


<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-9">




                    <div class="single_content_layout">
                        <div class="item feature_news_item">
                            <div class="item_img">
                                <img  class="img-responsive" src="storage\upload\news_image\{{$post->image}}" alt="Chania">
                            </div><!--item_img-->
                                <div class="item_wrapper">
                                    <div class="news_item_title">
                                        <h2><a href="#"></a></h2>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#"></a>{{$post->created_at}} by:<a href="#">Admin</a></div>

                                        <div class="single_social_icon">
                                            <a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <!--Google +-->
                                            <a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

                                        </div> <!--social_icon1-->


                                            <h2 style="font-size:3em">{!!$post->title!!}</h2>


                                        <div class="item_content">
                                                {!!$post->body!!}
                                        </div><!--item_content-->
                                </div><!--item_wrapper-->
                        </div><!--feature_news_item-->



                        <h2>Relate Post</h2>
                        @foreach ($relate_post as $relate)
                        <div class="single_related_news">
                            <div class="media_wrapper">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" width="80px" height="100px" src="storage\upload\news_image\{{$relate->image}}" alt="Generic placeholder image"></a>
                                    </div><!--media-left-->
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="single/{{$relate->id}}">{{$relate->title}}
                                        </a></h4>
                                        <div class="media_meta"><a href="#">{{$relate->created_at}}</a> by:<a href="#">Admin</a></div>
                                        <div class="media_content"><p>{!!$relate->summary!!}</p>
                                        </div><!--media_content-->
                                    </div><!--media-body-->
                                </div><!--media-->

                            </div><!--media_wrapper-->
                        </div><!--single_related_news-->
                        @endforeach


                    </div><!--single_content_layout-->


                    </div>

                    @include('pages/right_sidebar')
            </div>
    </section><!--feature_category_section-->

@endsection
