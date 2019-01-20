<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use Response;
use Validator;
class ScoreController extends Controller
{
    public function index($lg){
        $scores  = Score::where('league_id',$lg)->get();

        return Response::json(['scores'=>$scores],200);
    }

    public function add($lg, Request $request){
        $validator = Validator::make($request->all(),[
            'week'=>'required',
            'team1'=>'required',
            'team2'=>'required',
            'goals'=>'required',
            'status'=>'required',
        ]);

        // check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $scores = new Score;

        $scores->week = $request->week;
        $scores->team1 = $request->team1;
        $scores->team2 = $request->team2;
        $scores->goals = $request->goals;
        $scores->status = $request->status;
        $scores->league_id = $lg;

        $scores->save();

        return Response::json(['scores'=>$scores],200);
    }

    public function show($lg,$id){
        $scores = Score::where([['league_id',$lg],['id',$id]])->get();

        return Response::json(['scores'=>$scores],200);
    }

    public function update($lg , $id,Request $request){
        $validator = Validator::make($request->all(),[
            'week'=>'required',
            'team1'=>'required',
            'team2'=>'required',
            'goals'=>'required',
            'status'=>'required',
        ]);

        //check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $scores = Score::find($id);

        $scores->week = $request->week;
        $scores->team1 = $request->team1;
        $scores->team2 = $request->team2;
        $scores->goals = $request->goals;
        $scores->status = $request->status;
        $scores->league_id = $lg;

        $scores->update();

        return Response::json(['scores'=>$scores],200);
    }


    public function delete($lg,$id){
        $scores = Score::find($id)->delete();
        return Response::json(['data'=>'Delete success'],200);

    }

}
