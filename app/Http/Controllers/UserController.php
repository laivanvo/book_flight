<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = user::paginate(10);
        $users = user::all();
        return view('user.tables')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role_ids = DB::table('roles')
        ->select(DB::raw('id'))
        ->get();
        return view('user.create')->with('role_ids', $role_ids);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        user::create($request->all());
        return redirect()->route('user.index')->with('msg', 'sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = user::find($id);
        return view('user.detail')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role_ids = DB::table('roles')
        ->select(DB::raw('id'))
        ->get();
        $users = user::find($id);
        return view('user.edit')->with('users', $users)->with('role_ids', $role_ids);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = user::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect()->route('user.index')->with('msg', 'sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = user::find($id);
        $users->delete();
        return redirect()->route('user.index')->with('msg', 'sucess');
    }
}
