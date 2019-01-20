<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Categories;
use Auth;
use Storage;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        if(Auth::user()->level == 1){
            $videos = Video::paginate(5);
        }else{
            $videos = Video::where('user_id',Auth::user()->id)->paginate(5);
        }

        return view('admin/video/list_video',['videos'=>$videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories = Categories::all();
        return view('admin/video/add_video',['categories'=>$categories]);
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
            'title'=>'required|unique:videos',
            'link'=>'required',
            'image'=>'required',
            'categories_id'=>'required',
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
            $path = $request->file('image')->storeAs('public/upload/videos_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        //create Video
        $video = new Video;
        $video->title = $request->title;
        $video->link = $request->link;
        $video->image = $fileNameToStore;
        $video->categories_id = $request->categories_id;
        $video->user_id = Auth::user()->id;
        $video->save();

        return redirect('admin/video/add')->with('alert','Add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::all();
        $video = Video::find($id);
        return view('admin/video/edit_video',['categories'=>$categories,'video'=>$video]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $video = Video::find($id);
        $this->validate($request,[
            'title'=>'required',
            'link'=>'required',
            'categories_id'=>'required',
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
            $path = $request->file('image')->storeAs('public/upload/videos_image',$fileNameToStore);
            Storage::delete('public/upload/videos_image/'.$video->image);
        }else{
            $fileNameToStore = $video->image;
        }


        //create Video

        $video->title = $request->title;
        $video->link = $request->link;
        $video->image = $fileNameToStore;
        $video->categories_id = $request->categories_id;
        $video->user_id = Auth::user()->id;
        $video->save();

        return redirect('admin/video/edit/'.$video->id)->with('alert','Edit success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $video = Video::find($id);

        if($video->image !== 'noimage.jgp'){
            //delete image
            Storage::delete('public/upload/videos_image/'.$video->image);
        }
        $video->delete();
        return redirect('admin\video\list')->with('alert','Delete success');
    }
}
