@extends('admin/layout/index');

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Advertisement</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Advertisement</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
                        Advertisement

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
										<th>Client Name</th>
                                        <th>Image</th>
                                        <th>Position</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Date Start</th>
                                        <th>Date End</th>
										<th>Created_at</th>
                                        <th>Update_at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>

                                    <tbody>

                                    @foreach ($advertisement as $ad)

                                        <tr>
										<td>{{$ad->id}}</td>
										<td>{{$ad->client_name}}</td>
                                        <td><img src="storage/upload/advertisement/{{$ad->image}}" alt="" width="100px" height="50px"></td>
                                        <td>{{$ad->position}}</td>
                                        <td>{{number_format($ad->price)}}</td>
                                        <td>{{number_format($ad->total)}}</td>
                                        <td>{{$ad->date_start}}</td>
                                        <td>{{$ad->date_end}}</td>
                                        <td>{{$ad->created_at}}</td>
                                        <td>{{$ad->updated_at}}</td>

										<td><a href="admin/advertisement/edit/{{$ad->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a></td>
                                        <td><a href="admin/advertisement/delete/{{$ad->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                    {{-- phan trang --}}
                                    {{ $advertisement->links() }}
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


