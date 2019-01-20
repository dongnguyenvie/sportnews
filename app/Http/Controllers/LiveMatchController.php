<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveMatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
class LiveMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $live_matches = LiveMatch::Paginate(5);
        return view('admin/live_match/list',['live_matches'=>$live_matches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        return view('admin/live_match/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|unique:live_matches',
            'summary'=>'required',
            'body'=>'required',
            'status'=>'required',
            'image'=>'required',
        ]);

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
            $path = $request->file('image')->storeAs('public/upload/live_match',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //
        $live_match = new LiveMatch;
        $live_match->title = $request->title;
        $live_match->summary = $request->summary;
        $live_match->body = $request->body;
        $live_match->status = $request->status;
        $live_match->image = $fileNameToStore;
        $live_match->save();

        return redirect('admin/live-match/add')->with('alert','Add success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $live_match = LiveMatch::find($id);
        return view('admin/live_match/edit',['live_match'=>$live_match]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $live_match = LiveMatch::find($id);

        $this->validate($request,[
            'title'=>'required',
            'summary'=>'required',
            'body'=>'required',
            'status'=>'required',
        ]);

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
            $path = $request->file('image')->storeAs('public/upload/live_match',$fileNameToStore);
            Storage::delete('public/upload/live_match/'.$live_match->image);
        }else{
            $fileNameToStore = $live_match->image;
        }

        //

        $live_match->title = $request->title;
        $live_match->summary = $request->summary;
        $live_match->body = $request->body;
        $live_match->status = $request->status;
        $live_match->image = $fileNameToStore;
        $live_match->save();

        return redirect('admin/live-match/edit/'.$id)->with('alert','Edit success');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $live_match = LiveMatch::find($id);

        if($live_match->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/live_match/'.$live_match->image);
        }

        $live_match->delete();
        return redirect('admin/live-match/list')->with('alert','Delete success');
    }
}
