<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\route;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$routes = route::paginate(10);
        $routes = route::all();
        return view('route.tables')->with('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        route::create($request->all());
        return redirect()->route('route.index')->with('msg', 'sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $routes = route::find($id);
        return view('route.detail')->with('routes', $routes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routes = route::find($id);
        return view('route.edit')->with('routes', $routes);
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
        $routes  =  route::find($id);
        $routes->name = $request->name;
        $routes->phone = $request->phone;
        $routes->id_card = $request->id_card;
        $routes->save();
        return redirect()->route('route.index')->with('msg', 'sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $routes = route::find($id);
        $routes->delete();
        return redirect()->route('route.index')->with('msg', 'sucess');
    }
}
