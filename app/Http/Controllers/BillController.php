<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bill;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\store_bill;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = bill::all();
        return view('bill.tables')->with('bills', $bills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=DB::table('users')
            ->select(DB::raw('id'))
            ->get();
        return view('bill.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(store_bill $request)
    {
        bill::create($request->all());
        return redirect()->route('bill.index')->with('msg', 'sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bills = bill::find($id);
        return view('bill.detail')->with('bills', $bills);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bills = bill::find($id);
        return view('bill.edit')->with('bills', $bills);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(store_bill $request, $id)
    {
        $bills = bill::find($id);
        $bills->name = $request->name;
        $bills->phone = $request->phone;
        $bills->id_card = $request->id_card;
        $bills->save();
        return redirect()->route('bill.index')->with('msg', 'sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bills = bill::find($id);
        $bills->delete();
        return redirect()->route('bill.index')->with('msg', 'sucess');
    }
}
