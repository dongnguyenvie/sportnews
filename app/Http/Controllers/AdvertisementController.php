<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\AdPosition;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
class AdvertisementController extends Controller
{
    public function list(){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $advertisement = Advertisement::paginate(5);
        return view('admin/advertisement/list',['advertisement'=>$advertisement]);
    }

    public function add(){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $ad_position = AdPosition::all();
        return view('admin/advertisement/add',['ad_position'=>$ad_position]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'client_name'=>'required',
            'position'=>'required',
            'date_start'=>'required',
            'date_end'=>'required',
            'image'=>'required',

        ]);

        $ad_position = AdPosition::find($request->position);

        $end = Carbon::parse($request->date_end);
        $start = Carbon::parse($request->date_start);

        $diff = $end->diffinmonths($start);

        //Handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extsion
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/upload/advertisement',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //New ad
        $ad = new Advertisement;
        $ad->client_name = $request->client_name;
        $ad->position = $request->position;

        $ad->date_start = $request->date_start;
        $ad->date_end = $request->date_end;
        $ad->price = $ad_position->price;
        $ad->total = $ad_position->price * $diff;
        $ad->image = $fileNameToStore;
        $ad->save();

        return redirect('admin/advertisement/add')->with('alert','Add success');
    }

    public function show($id){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $ad = Advertisement::find($id);
        $ad_position = AdPosition::all();
        return view('admin/advertisement/edit',['ad'=>$ad,'ad_position'=>$ad_position]);
    }

    public function edit(Request $request,$id){
        $ad = Advertisement::find($id);

        $this->validate($request,[
            'client_name'=>'required',
            'position'=>'required',
            'date_start'=>'required',
            'date_end'=>'required',
        ]);

        $ad_position = AdPosition::find($request->position);

        $end = Carbon::parse($request->date_end);
        $start = Carbon::parse($request->date_start);

        $diff = $end->diffinmonths($start);

        //Handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extsion
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/upload/advertisement',$fileNameToStore);
            Storage::delete('public/upload/advertisement/'.$ad->image);
        }else{
            $fileNameToStore = $ad->image;
        }

        //New ad

        $ad->client_name = $request->client_name;
        $ad->position = $request->position;

        $ad->date_start = $request->date_start;
        $ad->date_end = $request->date_end;
        $ad->price = $ad_position->price * $diff;
        $ad->image = $fileNameToStore;
        $ad->save();

        return redirect('admin/advertisement/add')->with('alert','Edit success');
    }


    public function delete($id){
        if(!Gate::allows('admin')){
            abort(404);
        }
        $advertisement = Advertisement::find($id);

        if($advertisement->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/advertisement/'.$advertisement->image);
        }

        $advertisement->delete();
        return redirect('admin/advertisement/list')->with('alert','Delete success');
    }
}
