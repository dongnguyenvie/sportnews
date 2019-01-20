@extends('layout/index')

@section('content')

<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
        <div class="container">
            <div class="row">
            <h2>{{$lg->name}}</h2>
                <div class="col-md-12">
                    <div class="row">
                        <table border="1">
                            <tbody>
                                <tr>
                                    <th>Week</th>
                                    <th></th>
                                    <th>Goals</th>
                                    <th></th>
                                    <th>Status</th>
                                </tr>

                                @foreach ($data as $scores)
                                @for ($i = 0; $i <count($scores); $i++)
                                <tr>
                                    <td style="padding:10px">{{$scores[$i]['week']}}</td>
                                    <td style="padding:10px">{{$scores[$i]['team1']}}</td>
                                    <td style="padding:10px">{{$scores[$i]['goals']}}</td>
                                    <td style="padding:10px">{{$scores[$i]['team2']}}</td>

                                    @if ($scores[$i]['status'] != 'FT')
                                    <td style="padding-left:20px"><img class="center" src="storage\upload\admin\flash.gif" alt=""></td>
                                    @else
                                    <td style="padding:10px;color:red">END</td>
                                    @endif

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
