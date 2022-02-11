<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassengerRequest;
use App\Models\bill;
use Illuminate\Http\Request;
use App\Models\passenger;
use Illuminate\Support\Facades\DB;
class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(StorePassengerRequest $request)
    {
        passenger::create($request->all());
        return redirect()->route('passenger.create')->with('msg', 'sucess');
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
    public function update(StorePassengerRequest $request, $id)
    {
        $passengers = passenger::find($id);
        $passengers1 = passenger::find($id);
        $passengers->bill_id = $request->bill_id;
        $passengers->name_passenger = $request->name_passenger;
        $passengers->CMND = $request->CMND;
        $passengers->phone = $request->phone;
        $passengers->age = $request->age;
        $passengers->gender = $request->gender;
        $passengers->nationality = $request->nationality;
        $passengers->save();
        if ($passengers != $passengers1) {
            return redirect()->route('passenger.index')->with('msg', 'sucess');
        } else {
            return back();
        }
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
