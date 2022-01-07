<?php

namespace App\Http\Controllers;
use App\Models\hocsinh;

use Illuminate\Http\Request;
use App\Http\Requests\StoreHocsinhRequest;

class hocsinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$hocsinhs=hocsinh::paginate(10);
        $hocsinhs=hocsinh::all();
        return view('hocsinh.tables')->with('hocsinhs',$hocsinhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocsinh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHocsinhRequest $request)
    {
        hocsinh::create($request->all());
        return redirect()->route('hocsinh.index')->with('msg','sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hocsinhs=hocsinh::find($id);
        return view('hocsinh.detail')->with('hocsinhs',$hocsinhs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hocsinhs=hocsinh::find($id);
        return view('hocsinh.edit')->with('hocsinhs',$hocsinhs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHocsinhRequest $request, $id)
    {
        $hocsinhs = hocsinh::find($id);
        $hocsinhs->name=$request->name;
        $hocsinhs->phone=$request->phone;
        $hocsinhs->id_card=$request->id_card;
        $hocsinhs->save();
        return redirect()->route('hocsinh.index')->with('msg','sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hocsinhs=hocsinh::find($id);
        $hocsinhs->delete();
        return redirect()->route('hocsinh.index')->with('msg','sucess');
    }
}
