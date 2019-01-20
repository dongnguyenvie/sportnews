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
                                    <th>Date</th>
                                    <th></th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>

                                @foreach ($data as $fixtures)
                                @for ($i = 0; $i <count($fixtures); $i++)
                                <tr>
                                    <td style="padding:10px">{{$fixtures[$i]['date']}}</td>
                                    <td style="padding:10px">{{$fixtures[$i]['team1']}}</td>
                                    <td style="padding:10px">{{$fixtures[$i]['time']}}</td>
                                    <td style="padding:10px">{{$fixtures[$i]['team2']}}</td>
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
