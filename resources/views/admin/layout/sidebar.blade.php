<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
                <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>

				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">


            <li class="active"><a href="admin/dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>



            @can('admin')
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">

				<em class="fa fa-navicon">&nbsp;</em> Catagories <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="admin/categories/list">
						<span class="fa fa-arrow-right">&nbsp;</span> List
					</a></li>
					<li><a class="" href="admin/categories/add">
						<span class="fa fa-arrow-right">&nbsp;</span> Add
					</a></li>

				</ul>
            </li>

            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
                <em class="fa fa-navicon">&nbsp;</em> User <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li><a class="" href="admin/user/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/user/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
            </li>


            <li class="parent "><a data-toggle="collapse" href="#sub-item-7">
                <em class="fa fa-navicon">&nbsp;</em> Collectors <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-7">
                    <li><a class="" href="admin/collector/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                </ul>
        </li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-6">
                <em class="fa fa-navicon">&nbsp;</em> Collects <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-6">
                    <li><a class="" href="admin/collect/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                </ul>
        </li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em> Live Match <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="admin/live-match/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/live-match/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
        </li>

        

        <li class="parent "><a data-toggle="collapse" href="#sub-item-8">
                <em class="fa fa-navicon">&nbsp;</em> Ad-Position <span data-toggle="collapse" href="#sub-item-8" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-8">
                    <li><a class="" href="admin/ad-position/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/ad-position/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
        </li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-9">
                <em class="fa fa-navicon">&nbsp;</em> Advertisement <span data-toggle="collapse" href="#sub-item-9" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-9">
                    <li><a class="" href="admin/advertisement/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/advertisement/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
        </li>

            @endcan


            @if(Gate::check('admin') || Gate::check('user'))
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> Posts <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="admin/post/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/post/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
            </li>

            <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
                <em class="fa fa-navicon">&nbsp;</em> Video <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-5">
                    <li><a class="" href="admin/video/list">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                    <li><a class="" href="admin/video/add">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add
                    </a></li>

                </ul>
            </li>
            @endif

		</ul>
    </div>
