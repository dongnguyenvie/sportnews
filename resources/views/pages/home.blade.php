@extends('layout/index')

@section('content')
{{-- Category --}}


        <section id="feature_category_section" class="feature_category_section section_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            @foreach ($categories as $categorie)
                               @if(count($categorie->post) >0)
                                    <div class="category_layout">
                                        <div class="item_caregory red"><h2><a href="categories/{{$categorie->id}}/{{$categorie->alias}}">{{$categorie->name}}</a></h2></div>
                                        <div class="row">
                                    <?php
                                        $data = $categorie->post->sortByDesc('created_at')->take(5);

                                        $post1 = $data->shift();//lay 1 tin
                                    ?>
                                                <div class="col-md-7">
                                                <div class="item feature_news_item">
                                                    <div class="item_wrapper">
                                                        <div class="item_img">
                                                        <img class="" width="470px" height="280px" src="storage\upload\news_image\{{$post1['image']}}" alt="Chania">
                                                        </div><!--item_img-->
                                                        <div class="item_title_date">
                                                            <div class="news_item_title">
                                                            <h2><a href="single/{{$post1['id']}}">{{$post1['title']}}</a></h2>

                                                            </div><!--news_item_title-->
                                                            <div class="item_meta"><a href="#">{{$post1['created_at']}}</a> by:<a href="#">Admin</a></div>
                                                        </div><!--item_title_date-->
                                                    </div><!--item_wrapper-->
                                                    <div class="item_content">{!!$post1['summary']!!}
                                                    </div><!--item_content-->

                                                </div><!--feature_news_item-->
                                                </div><!--col-md-7-->

                                                <div class="col-md-5">
                                                @foreach ($data->all() as $post)
                                                    <div class="media_wrapper">
                                                        <div class="media" >
                                                            <div class="media-left">
                                                                <a href="#"><img width="50px" height="50px" class="media-object" src="storage\upload\news_image\{{$post['image']}}" alt="Generic placeholder image"></a>
                                                            </div><!--media-left-->
                                                            <div class="media-body">
                                                                <h3 class="media-heading"><a href="single/{{$post->id}}">{{$post['title']}}
                                                                </a></h3>

                                                                <p style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">{!!$post['summary']!!}</p>

                                                            </div><!--media-body-->
                                                        </div><!--media-->


                                                    </div><!--media_wrapper-->
                                                @endforeach


                                                </div><!--col-md-5-->
                                                </div><!--row-->
                                    </div><!--category_layout-->
                                @endif
                            @endforeach




                            </div><!--col-md-9-->


                           @include('pages/right_sidebar')
                    </div>
        </section>
@endsection



