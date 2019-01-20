<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Response;
use Validator;
class TeamController extends Controller
{
    public function index($lg){
        $teams = Team::where('league_id',$lg)->orderBy('points','desc')->orderBy('goal_difference','desc')->get();

        return Response::json(['teams'=>$teams],200);
    }

    public function add($lg, Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:teams',
            'matches_played'=>'required',
            'win'=>'required',
            'lose'=>'required',
            'draw'=>'required',
            'goal_difference'=>'required',
            'points'=>'required'
        ]);

        // check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $team = new Team;

        $team->name = $request->name;
        $team->matches_played = $request->matches_played;
        $team->win = $request->win;
        $team->lose = $request->lose;
        $team->draw = $request->draw;
        $team->goal_difference = $request->goal_difference;
        $team->points = $request->points;
        $team->league_id = $lg;

        $team->save();

        return Response::json(['team'=>$team],200);
    }

    public function show($lg,$id){
        $teams = Team::where([['league_id',$lg],['id',$id]])->get();

        return Response::json(['teams'=>$teams],200);
    }

    public function update($lg , $id,Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'matches_played'=>'required',
            'win'=>'required',
            'lose'=>'required',
            'draw'=>'required',
            'goal_difference'=>'required',
            'points'=>'required'
        ]);

        //check validate
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        };

        $team = Team::find($id);

        $team->name = $request->name;
        $team->matches_played = $request->matches_played;
        $team->win = $request->win;
        $team->lose = $request->lose;
        $team->draw = $request->draw;
        $team->goal_difference = $request->goal_difference;
        $team->points = $request->points;
        $team->league_id = $lg;

        $team->update();

        return Response::json(['team'=>$team],200);
    }

    public function delete($lg,$id){
        $team = Team::find($id)->delete();
        return Response::json(['data'=>'Delete success'],200);

    }


}
