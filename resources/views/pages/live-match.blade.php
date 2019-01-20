@extends('layout/index')

@section('content')


<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-9">
                    <div class="single_content_layout">
                        <div class="item feature_news_item">
                            <div class="item_img">
                                <img  class="img-responsive" src="storage\upload\live_match\{{$match->image}}" alt="Chania">
                            </div><!--item_img-->
                                <div class="item_wrapper">
                                    <div class="news_item_title">
                                        <h2><a href="#"></a></h2>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#"></a>{{$match->created_at}} by:<a href="#">Admin</a></div>

                                        <div class="single_social_icon">
                                            <a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <!--Google +-->
                                            <a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

                                        </div> <!--social_icon1-->

                                        <div class="alert alert-success">Refresh after: <span id="time"></span></div>

                                        <div id="reload">
                                            <h2 style="font-size:3em">{!!$match->title!!}</h2>


                                            <div class="item_content">
                                                    {!!$match->body!!}
                                            </div><!--item_content-->
                                        </div>

                                </div><!--item_wrapper-->
                        </div><!--feature_news_item-->
                    </div><!--single_content_layout-->


                    </div>

                    @include('pages/right_sidebar')
            </div>
    </section><!--feature_category_section-->

@endsection

<script>

    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
                $("#reload").load(location.href+" #reload>*","");
            }
        }, 1000);
    }





    window.onload = function () {
        var minutes = 30,
            display = document.querySelector('#time');

        startTimer(minutes, display);

    };
</script>
