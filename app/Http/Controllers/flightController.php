<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flight;
use App\Models\route;
use Illuminate\Support\Facades\DB;

class flightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$flights=flight::paginate(10);
        $flights=flight::all();
       
        return view('flight.tables')->with('flights',$flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route_ids=DB::table('routes')
        ->select(DB::raw('id'))
        ->get();
        return view('flight.create')->with('route_ids',$route_ids);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        flight::create($request->all());
        return redirect()->route('flight.index')->with('msg','sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flights=flight::find($id);
        return view('flight.detail')->with('flights',$flights);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flights=flight::find($id);
        return view('flight.edit')->with('flights',$flights);
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
        $flights = flight::find($id);
        $flights->route_id=$request->route_id;
        $flights->dateDeparturee=$request->dateDeparture;
        $flights->dateArrival=$request->dateArrival;
        $flights->save();
        return redirect()->route('flight.index')->with('msg','sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flights=flight::find($id);
        $flights->delete();
        return redirect()->route('flight.index')->with('msg','sucess');
    }
}
