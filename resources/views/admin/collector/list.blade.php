@extends('admin/layout/index');

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Collector</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Collector</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
                       Collector

                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{session('alert')}}
                        </div>
                    @endif
					</div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
                                <table id="mytable" class="table table-bordred table-striped">

                                    <thead>
										<th>Id</th>
										<th>Name</th>
                                        <th>Email</th>
										<th>Created_at</th>
                                        <th>Update_at</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($collectors as $collector)

                                        <tr>
										<td>{{$collector->id}}</td>
										<td>{{$collector->name}}</td>
										<td>{!!$collector->email!!}</td>
                                        <td>{{$collector->created_at}}</td>
                                        <td>{{$collector->updated_at}}</td>

                                        <td><a href="admin/collector/delete/{{$collector->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                    {{-- phan trang --}}
                                    {{ $collectors->links() }}
                                </table>

								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->

					</div>
				</div><!--End .articles-->
			</div><!--/.col-->

			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->


@endsection


