@extends('admin/layout/index')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-blue"></em>
							<div class="large">{{count($collects)}}</div>
							<div class="text-muted">Collector Post</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">{{count($posts)}}</div>
							<div class="text-muted">Posts</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">{{count($users)}}</div>
							<div class="text-muted"> Admintrator</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
                        <div class="large">{{count($collectors)}}</div>
							<div class="text-muted">Collectors</div>
						</div>
					</div>
                </div>
			</div><!--/.row-->
        </div>




        <div class="row">
			<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Latest Posts
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
                        @foreach ($latest_post as $post)
                        <div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">{{ date("d",strtotime($post->created_at)) }}</div>
										<div class="text-muted">{{ date("M",strtotime($post->created_at)) }}</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4>{{$post->title}}</h4>
                                        <p>{!!$post->summary!!}</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
                        @endforeach
					</div>
				</div><!--End .articles-->

            </div><!--/.col-->

            <div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Latest collect
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
                        @foreach ($latest_collects as $collect)
                        <div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">{{ date("d",strtotime($collect->created_at)) }}</div>
										<div class="text-muted">{{ date("M",strtotime($collect->created_at)) }}</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4>{{$collect->title}}</h4>
                                        <p>{!!$collect->summary!!}</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
                        @endforeach
					</div>
				</div><!--End .articles-->
            </div>
		</div><!--/.col-->

        <div class="row">
                <div class="col-md-6">
                        <div class="panel panel-default articles">
                            <div class="panel-heading">
                                Collectors
                                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                            <div class="panel-body articles-container">
                                    <table id="mytable" class="table table-bordred table-striped">

                                            <thead>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Created_at</th>
                                                <th>Update_at</th>
                                            </thead>
                                            <tbody>
                                            @foreach ($collectors as $collector)

                                            <tr>
                                                <td>{{$collector->name}}</td>
                                                <td>{!!$collector->email!!}</td>
                                                <td>{{$collector->created_at}}</td>
                                                <td>{{$collector->updated_at}}</td>
                                            </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                            </div>
                        </div><!--End .articles-->
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default articles">
                        <div class="panel-heading">
                            Categories Posts
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body articles-container">
                            {!! $chart->container() !!}
                        </div>
                            {!! $chart->script() !!}
                    </div><!--End .articles-->
            </div>

        </div>




</div>
<script>

</script>
@endsection

