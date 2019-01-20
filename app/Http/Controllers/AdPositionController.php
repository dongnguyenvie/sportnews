<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdPosition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
class AdPositionController extends Controller
{
    public function list(){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $ad_position = AdPosition::all();
        return view('admin/ad_position/list',['ad_position'=>$ad_position]);
    }

    public function add(){
        if(!Gate::allows('admin')){
            abort(404);
        }
        return view('admin/ad_position/add');
    }

    public function store(Request $request){
        $this->validate($request,[
            'position'=>'required|unique:ad_positions',
            'price'=>'required'
        ]);

        $ad_position = new AdPosition;
        $ad_position->position = $request->position;
        $ad_position->price = $request->price;
        $ad_position->save();
        return redirect('admin/ad-position/add')->with('alert','Add success');
    }

    public function show($id){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $ad = AdPosition::find($id);
        return view('admin/ad_position/edit',['ad'=>$ad]);
    }

    public function edit(Request $request,$id){
        $ad = AdPosition::find($id);

        $this->validate($request,[
            'position'=>'required',
            'price'=>'required'
        ]);

        $ad->position = $request->position;
        $ad->price = $request->price;
        $ad->save();
        return redirect('admin/ad-position/edit/'.$id)->with('alert','Edit success');
    }

    public function delete($id){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $ad = AdPosition::find($id);
        $ad->delete();
        return redirect('admin/ad-position/list')->with('alert','Delete success');
    }
}
