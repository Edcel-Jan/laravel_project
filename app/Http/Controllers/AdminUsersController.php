<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\User;
class AdminUsersController extends Controller
{ 
    /**
     * Display a listing of the resourc e.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }
   
    /**  
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(UserRequest $request)
    {      
        
        $user = new User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password =bcrypt($request->password);
        $user->role_id = $request->role_id;
        
        $user->save();
        

         return redirect()->action('AdminUsersController@create')->with('success',"Record Has Been Saved");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);

        return view('admin.user.update')->with('user',$user);
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
        $this->validate($request,[
            'name' => 'required',
            'email' =>'required',
            'role_id' => 'required'
        ]);

        $user = User::findOrfail($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->save();
        
        return redirect()->action('AdminUsersController@index')->with('success','User Has Been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
