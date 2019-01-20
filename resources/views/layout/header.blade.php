<header>
	    <div class="container">
            <div class="top_ber">
				<div class="row">
		    		<div class="col-md-6">
						<div class="top_ber_left">
                                {{ date('D.d-M-Y') }}
						</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    		<div class="col-md-6">
		    			<div class="top_ber_right">
		    				<div class="top-menu">
                                @if (Auth::guard('collector')->check())
		    					<ul>
                                    <li class="dropdown" >
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::guard('collector')->user()->name}}<b class="caret"></b></a>
                                        <ul class="dropdown-menu" style="position: absolute;z-index: 999;">
                                            <li><a href="profile/{{Auth::guard('collector')->user()->id}}"><i class="fas fa-user"></i> Profile</a></li>
                                            <li><a href="new-post"><i class="fas fa-plus-square"></i> New Post</a></li>
                                            <li><a href="logout"><i class="fas fa-sign-out-alt"></i> LogOut</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                @else
                                <ul class="nav navbar-nav">
                                        <li><a href="login">Login</a></li>
                                        <li><a href="register">Register</a></li>
                                </ul>
                                @endif
		    				</div><!--top-menu-->
		    			</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    	</div><!--row-->
	     	</div><!--top_ber-->

	     	<div class="header-section">
				<div class="row">
		    	 	<div class="col-md-4">
						<div class="logo">
						<a  href=""><img class="img-responsive" src="web_asset/img/logo.png" alt=""></a>
						</div><!--logo-->
                     </div><!--col-md-3-->

                    @foreach ($header_ad as $ad)
                        <div class="col-md-4">
                            <div class="logo">
                            <a  href=""><img class="img-responsive" src="storage/upload/advertisement/{{$ad->image}}" alt=""></a>
                            </div><!--logo-->
                        </div><!--col-md-3-->
                    @endforeach


		    	</div> <!--row-->
	     	</div><!--header-section-->
	    </div><!-- /.container -->

		<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation" style="z-index:1">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
				<ul class="nav navbar-nav">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a href="" class="page-scroll">Home</a></li>
                    @foreach ($categories as $categorie)
                    <li><a class="page-scroll" href="categories/{{$categorie->id}}/{{ $categorie->alias}}">{{ $categorie->name}}</a></li>
                    @endforeach
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BXH <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              @foreach ($league as $lg)
                              <li><a href="standing/{{$lg->id}}">{{$lg->name}}</a></li>
                              @endforeach
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lịch Thi Đấu <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              @foreach ($league as $lg)
                              <li><a href="fixtures/{{$lg->id}}">{{$lg->name}}</a></li>
                              @endforeach
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Live <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          @foreach ($league as $lg)
                          <li><a href="live/{{$lg->id}}">{{$lg->name}}</a></li>
                          @endforeach
                        </ul>
                </li>
                    <li><a href="videos" class="page-scroll">Video</a></li>
                    <li><a href="collect">Collect</a></li>
                </ul>
				<div class="pull-right">
					<form action="search" method="POST" class="navbar-form" role="search">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="input-group">
							<input class="form-control" placeholder="Search" name="search_key" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
        </nav>
        <!-- .navbar -->
        @if (count($live_match)>0)
        <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <marquee width="300px" loop>
                            @foreach ($live_match as $match)
                            <li><i class="fas fa-video" style="color:red"></i> <a href="live-match/{{$match->id}}">{{$match->title}}</a></li>
                            @endforeach

                        </marquee>
                    </div>
                </div>
        </div>
        @endif



        <style>
            li{
                list-style-type:none;
                display: inline;
                padding-left: 10px
            }

        </style>






	</header>


