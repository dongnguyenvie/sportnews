<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fixture;
use Response;
use Validator;

class FixtureController extends Controller
{
    public function index($lg){
        $fixtures = Fixture::where('league_id',$lg)->get();

        return Response::json(['fixtures'=>$fixtures],200);
    }

    public function add($lg, Request $request){
        $validator = Validator::make($request->all(),[
            'date'=>'required',
            'team1'=>'required',
            'team2'=>'required',
            'time'=>'required',
        ]);

        // check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $fixtures = new Fixture;

        $fixtures->date = $request->date;
        $fixtures->team1 = $request->team1;
        $fixtures->team2 = $request->team2;
        $fixtures->time = $request->time;
        $fixtures->league_id = $lg;

        $fixtures->save();

        return Response::json(['fixtures'=>$fixtures],200);
    }

    public function show($lg,$id){
        $fixtures = Fixture::where([['league_id',$lg],['id',$id]])->get();

        return Response::json(['fixtures'=>$fixtures],200);
    }

    public function update($lg , $id,Request $request){
        $validator = Validator::make($request->all(),[
            'date'=>'required',
            'team1'=>'required',
            'team2'=>'required',
            'time'=>'required',
        ]);

        //check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $fixtures = Fixture::find($id);

        $fixtures->date = $request->date;
        $fixtures->team1 = $request->team1;
        $fixtures->team2 = $request->team2;
        $fixtures->time = $request->time;
        $fixtures->league_id = $lg;

        $fixtures->update();

        return Response::json(['fixtures'=>$fixtures],200);
    }


    public function delete($lg,$id){
        $fixtures = Fixture::find($id)->delete();
        return Response::json(['data'=>'Delete success'],200);

    }
}
