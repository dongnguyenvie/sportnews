<div class="col-md-3">

        <div class="tab sitebar">
            <ul class="nav nav-tabs">
                <li class="active"><a  href="#1" data-toggle="tab">Hot News</a></li>
                <li><a href="#2" data-toggle="tab">Latest</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="1">

                    @foreach ($hot_post as $post)
                    <div class="media">
                            <div class="media-left">
                                <a href="#"><img width="50px" height="50px" class="media-object" src="storage\upload\news_image\{{$post->image}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                            <h4 class="media-heading"><a href="single/{{$post->id}}">{{$post->title}}</a></h4>
                            </div><!--media-body-->
                    </div><!--media-->
                    @endforeach



                </div><!--tab-pane-->

                <div class="tab-pane" id="2">
                    @foreach ($latest_post as $post)
                    <div class="media">
                            <div class="media-left">
                                <a href="#"><img width="50px" height="50px" class="media-object" src="storage\upload\news_image\{{$post->image}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="single/{{$post->id}}">{{$post->title}}</a></h3>
                            </div><!--media-body-->
                    </div><!--media-->
                    @endforeach

                </div><!--tab-pane-->
            </div><!--tab-content-->
        </div><!--tab-->
        <div class="ad">
            <div class="tab sitebar">
                <ul class="nav nav-tabs">
                    <li class="active"><a  href="#3" data-toggle="tab">Most views</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="3">

                        @foreach ($most_views as $post)
                        <div class="media">
                                <div class="media-left">
                                    <a href="#"><img width="50px" height="50px" class="media-object" src="storage\upload\news_image\{{$post->image}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                <h4 class="media-heading"><a href="single/{{$post->id}}">{{$post->title}}</a></h4>
                                </div><!--media-body-->
                        </div><!--media-->
                        @endforeach
                </div><!--tab-content-->
            </div><!--tab-->
        </div>
    </div>

    @foreach ($side_ad as $ad)
    <div class="ad">
    <img class="img-responsive" src="storage/upload/advertisement/{{$ad->image}}" alt="img">
    </div>
    @endforeach
</div>
