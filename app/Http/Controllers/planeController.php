<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plane;
use Illuminate\Support\Facades\DB;

class planeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$planes=plane::paginate(10);
        $planes=plane::all();
        return view('plane.tables')->with('planes',$planes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flights=DB::table('flights')
        ->select(DB::raw('*'))
        ->get();
        $airline_companies=DB::table('airline_companies')
        ->select(DB::raw('*'))
        ->get();
        return view('plane.create')->with('flights',$flights)->with('airline_companies',$airline_companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        plane::create($request->all());
        return redirect()->route('plane.index')->with('msg','sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planes=plane::find($id);
        return view('plane.detail')->with('planes',$planes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flights=DB::table('flights')
        ->select(DB::raw('*'))
        ->get();
        $airline_companies=DB::table('airline_companies')
        ->select(DB::raw('*'))
        ->get();
        $categories=DB::table('categories')
        ->select(DB::raw('*'))
        ->get();
        $planes=plane::find($id);
        return view('plane.edit')->with('planes',$planes)->with('flights',$flights)->with('airline_companies',$airline_companies)->with('categories',$categories);
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
        $planes = plane::find($id);
        $planes->flight_id=$request->flight_id;
        $planes->airline_company_id=$request->airline_company_id;
        $planes->category_id=$request->category_id;
        $planes->name_plane=$request->name_plane;
        $planes->price=$request->price;
        $planes->image=$request->image;
        $planes->chair=$request->chair;
        $planes->status=$request->status;
        $planes->save();
        return redirect()->route('plane.index')->with('msg','sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planes=plane::find($id);
        $planes->delete();
        return redirect()->route('plane.index')->with('msg','sucess');
    }
}
