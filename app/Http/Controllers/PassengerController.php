<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;
use App\Models\passenger;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\store_passenger;
class passengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$passengers=passenger::paginate(10);
        $passengers = passenger::all();
        return view('passenger.tables')->with('passengers', $passengers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bill_ids = DB::table('bills')
        ->select(DB::raw('id'))
        ->get();
        return view('passenger.create')->with('bill_ids', $bill_ids);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(store_passenger $request)
    {

        passenger::create($request->all());
        return redirect()->route('passenger.index')->with('msg', 'sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passengers = passenger::find($id);
        return view('passenger.detail')->with('passengers', $passengers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill_ids=DB::table('bills')
        ->select(DB::raw('id'))
        ->get();
        $passengers = passenger::find($id);
        return view('passenger.edit')->with('passengers', $passengers)->with('bill_ids', $bill_ids);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(store_passenger $request, $id)
    {
        $passengers = passenger::find($id);
        $passengers->name = $request->name;
        $passengers->phone = $request->phone;
        $passengers->id_card = $request->id_card;
        $passengers->save();
        return redirect()->route('passenger.index')->with('msg', 'sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passengers = passenger::find($id);
        $passengers->delete();
        return redirect()->route('passenger.index')->with('msg', 'sucess');
    }
}
