@extends('layout/index')

@section('content')

<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
        <div class="container">
            <div class="row">
            <h2>{{$lg->name}}</h2>
                <div class="col-md-12">
                    <div class="row">
                            <table class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th>Hạng</th>
                                        <th>Tên</th>
                                        <th>ST</th>
                                        <th>T</th>
                                        <th>H</th>
                                        <th>B</th>
                                        <th>HS</th>
                                        <th>Đ</th>
                                      </tr>
                                    </thead>
                                    <tbody >
                                    @foreach ($data as $teams)
                                        @for ($i = 0; $i <count($teams); $i++)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{$teams[$i]['name']}}</td>
                                                <td>{{$teams[$i]['matches_played']}}</td>
                                                <td>{{$teams[$i]['win']}}</td>
                                                <td>{{$teams[$i]['draw']}}</td>
                                                <td>{{$teams[$i]['lose']}}</td>
                                                <td>{{$teams[$i]['goal_difference']}}</td>
                                                <td>{{$teams[$i]['points']}}</td>
                                              </tr>

                                        @endfor
                                    @endforeach

                                    </tbody>
                                  </table>
                    </div><!--row-->
                   </div><!--col-md-9-->
                   <div class="clearfix" ></div>


                    </div><!--row-->
                   </div><!--col-md-9-->




            </div>
    </section><!--feature_category_section-->






@endsection
