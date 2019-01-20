@extends('admin/layout/index');

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tin Tức</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tin Tức</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
                        Latest News

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
										<th>Title</th>
                                        <th>Summary</th>
                                        <th>Image</th>
                                        <th>Views</th>
                                        <th>Categories</th>
                                        <th>Author</th>
										<th>Breaking_news</th>
										<th>Created_at</th>
                                        <th>Update_at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>

                                    <tbody>

                                    @foreach ($posts as $post)

                                        <tr>
										<td>{{$post->id}}</td>
										<td>{{$post->title}}</td>
										<td>{!!$post->summary!!}</td>
                                        <td><img src="storage/upload/news_image/{{$post->image}}" alt="" width="50px" height="50px"></td>
                                        <td>{{$post->views}}</td>
                                        <td>{{$post->categories->name}}</td>
                                        <td>{{$post->user->name}}</td>


                                        @if ($post->Breaking_news == 1)
                                            <td>Có</td>
                                        @else
                                            <td>Không</td>
                                        @endif


                                        <td>{{$post->created_at}}</td>
                                        <td>{{$post->updated_at}}</td>

										<td><a href="admin/post/edit/{{$post->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a></td>
                                        <td><a href="admin/post/delete/{{$post->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                    {{-- phan trang --}}
                                    {{ $posts->links() }}
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


