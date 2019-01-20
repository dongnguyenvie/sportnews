@extends('layout/index')

@section('content')


<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-9">
                    <div class="single_content_layout">
                        <div class="item feature_news_item">
                            <div class="item_img">
                                <img  class="img-responsive" src="storage\upload\collector_image\{{$collect->image}}" alt="Chania">
                            </div><!--item_img-->
                                <div class="item_wrapper">
                                    <div class="news_item_title">
                                        <h2><a href="#"></a></h2>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#"></a>{{$collect->created_at}} by:<a href="#">Admin</a></div>

                                        <div class="single_social_icon">
                                            <a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <!--Google +-->
                                            <a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

                                        </div> <!--social_icon1-->


                                            <h2 style="font-size:3em">{!!$collect->title!!}</h2>


                                        <div class="item_content">
                                                {!!$collect->body!!}
                                        </div><!--item_content-->
                                </div><!--item_wrapper-->
                        </div><!--feature_news_item-->
                    </div><!--single_content_layout-->
                    </div>
                    @include('pages/right_sidebar')
            </div>
    </section><!--feature_category_section-->

@endsection
