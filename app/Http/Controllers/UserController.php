<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{

    private $objUser;

    public function __construct()
    {
        $this->objUser= new User();
        $this->middleware('web');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=$this->objUser->all();

        return view('layouts.users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->role == "Admin")
        {
            $role=1;
        }
        elseif ($request->role == "Regular") {
            $role=2;
        }

        $user = User::where('email', '=', $request->email)->first();
        
        if($user == null)

        {

            $remember=str_random(10);

            $cad=$this->objUser->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'department'=>$request->department,
                'password'=>bcrypt($request->password),
                'remember_token'=> $remember,
                'role_id'=>$role,            
            ]);

            if($cad)
            {
                $user=$this->objUser->all();
                return view('layouts.users.index',compact('user'));
            }

        }
        else
        {
            $error_email="Esse e-mail já está cadastrado!!";
            return view('layouts.users.createUser',compact('error_email'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=$this->objUser->find($id);
        return view('layouts.users.createUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->role == "Admin")
        {
            $role=1;
        }
        elseif ($request->role == "Regular") {
            $role=2;
        }

        $this->objUser->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'department'=>$request->department,
            'password'=>bcrypt($request->password),
            'role_id'=>$role,  
        ]);
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUser->destroy($id);
        return ($del) ?"sim":"não";
    }
}
