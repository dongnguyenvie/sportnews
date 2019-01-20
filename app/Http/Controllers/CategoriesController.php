<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
class CategoriesController extends Controller
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

        $categories = Categories::Paginate(5);
        return view('admin\categories\list_categories',['categories'=>$categories]);
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
        return view('admin\categories\add_categories');
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
            'name'=>'required|min:3|max:100|unique:categories',
        ],[
            'name.required'=>'Enter a name',
            'name.min'=>'Name is too short',
            'name.max'=>'Name is too long',
            'name.unique'=>'Name is already available',
        ]);

        //create categories
        $categorie = new Categories;
        $categorie->name = $request->name;
        $categorie->alias = changeTitle($request->name);
        $categorie->save();

        return redirect('admin/categories/add')->with('alert','Add success');

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
        $categorie = Categories::find($id);
        return view('admin\categories\edit_categories',['categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        if(!Gate::allows('admin')){
            abort(404);
        }
        $this->validate($request,[
            'name'=>'required|min:3|max:100|unique:categories',
        ],[
            'name.required'=>'Enter a name',
            'name.min'=>'Name is too short',
            'name.max'=>'Name is too long',
            'name.unique'=>'Name is already available',
        ]);

        //edit categories
        $categorie =  Categories::find($id);
        $categorie->name = $request->name;
        $categorie->alias = changeTitle($request->name);
        $categorie->save();

        return redirect('admin/categories/edit/'.$id)->with('alert','Edit success');
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
        $categorie = Categories::find($id);
        $categorie->delete();
        return redirect('admin\categories\list')->with('alert','Delete success');

    }
}
