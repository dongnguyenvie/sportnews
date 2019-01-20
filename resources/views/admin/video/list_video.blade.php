@extends('admin/layout/index');

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Videos</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Videos</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Videos
					</div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
										<th>ID</th>
										<th>Title</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Categories</th>
                                        <th>Author</th>
                                        <th>Created_at</th>
                                        <th>Update_at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
										<td>{{$video->id}}</td>
										<td>{{$video->title}}</td>
                                        <td><img width="100" src="storage/upload/videos_image/{{$video->image}}" alt=""></td>
                                        <td>{{$video->link}}</td>
                                        <td>{{$video->categories->name}}</td>


                                        <td>{{$video->user->name}}</td>

                                        <td>{{$video->created_at}}</td>
                                        <td>{{$video->update_at}}</td>

										<td><a href="admin/video/edit/{{$video->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a></td>
                                        <td><a href="admin/video/delete/{{$video->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                        {{ $videos->links() }}
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


