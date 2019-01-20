<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collects;
use \App\Mail\PostAccept;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
class CollectController extends Controller
{

    public function list()
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $collects = Collects::paginate(5);
        return view('admin\collect\list',['collects'=>$collects]);
    }

    public function show($id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $collect = Collects::find($id);
        return view('admin\collect\edit',['collect'=>$collect]);
    }

    public function edit(Request $request,$id)
    {

        $collect =  Collects::find($id);

        $this->validate($request,[
            'title'=>'required',
            'summary'=>'required',
            'body'=>'required',
            'status'=>'required',
        ]);

        //edit post

        $collect->title = $request->title;
        $collect->summary = $request->summary;
        $collect->body = $request->body;
        $collect->status = $request->status;
        $collect->save();

        if($request->status == 1){
            \Mail::to($collect->collector->email)->send(new PostAccept);
        }

        return redirect('admin/collect/edit/'.$id)->with('alert','Edit success');
    }


    public function delete($id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $collect = Collects::find($id);

        if($collect->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/collector_image/'.$collect->image);
        }

        $collect->delete();
        return redirect('admin\collect\list')->with('alert','Delete success');
    }



}
