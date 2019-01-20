<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        $users = User::Paginate(5);
        return view('admin\user\list_user',['users'=>$users]);
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
        return view('admin\user\add_user');
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
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            're-password'=>'required|same:password',
            'level'=>'required',
        ],[
            're-password.same'=>'re-password is wrong',
        ]);

        $user  = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();

        return view('admin\user\add_user')->with('alert','Add success');

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
        $user = User::find($id);
        return view('admin\user\edit_user',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $user = User::find($id);

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            're-password'=>'required|same:password',
            'level'=>'required',
        ],[
            're-password.same'=>'re-password is wrong',
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();

        return view('admin\user\edit_user',['user'=>$user])->with('alert','Edit success');
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
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('alert','Delete success');
    }

    public function getLogin(){
        return view('Admin/login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'enter Email',
            'password.required'=>'enter Password'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('alert','Login failed');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('admin/login');
    }

}
