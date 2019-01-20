@extends('layout/index')

@section('content')

<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->

          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span>{{$collector->name}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span>{{$collector->email}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span>{{count($collects)}}</li>
        </ul>

        </div><!--/col-3-->
    	<div class="col-sm-9">
                        <div class="row">
                            <div class="col-md-12">
                                    <table class="table">
                                            <thead>
                                                <th>Title</th>
                                                <th>Summary</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th>Updated_at</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($collects as $collect)
                                                <tr>
                                                    <td>{!!$collect->title!!}</td>
                                                    <td>{!!$collect->summary!!}</td>

                                                    @if ($collect->status == 1)
                                                        <td>Accepted</td>
                                                    @elseif($collect->status == 0)
                                                        <td>Pennding</td>
                                                    @else
                                                        <td>Fail</td>
                                                    @endif


                                                    <td>{{$collect->created_at}}</td>
                                                    <td>{{$collect->updated_at}}</td>

                                                    @if ($collect->status == 0)
                                                    <td><a href="edit-post/{{$collect->id}}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a></td>
                                                        <td><a href="collects-delete/{{$collect->id}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a></td>
                                                    @else
                                                        <td></td>
                                                        <td></td>
                                                    @endif


                                                </tr>
                                                @endforeach

                                             </tbody>
                                             {{$collects->links()}}
                                    </table>

                            </div>

                    </div>

                    <hr>
                </div><!--/tab-pane-->
        </div><!--/col-9-->
    </div><!--/row-->
</div>
</section><!--feature_category_section-->

@endsection
