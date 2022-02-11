<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bill_detail;
use App\Http\Requests\store_bill_detail;

class BillDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill_details = bill_detail::all();
        return view('bill_detail.tables')->with('bill_details', $bill_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bill_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(store_bill_detail $request)
    {
        bill_detail::create($request->all());
        return redirect()->route('bill_detail.index')->with('msg', 'sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill_details = bill_detail::find($id);
        return view('bill_detail.detail')->with('bill_details', $bill_details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill_details = bill_detail::find($id);
        return view('bill_detail.edit')->with('bill_details', $bill_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(store_bill_detail $request, $id)
    {
        $bill_details = bill_detail::find($id);
        $bill_details->name = $request->name;
        $bill_details->phone = $request->phone;
        $bill_details->id_card = $request->id_card;
        $bill_details->save();
        return redirect()->route('bill_detail.index')->with('msg', 'sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill_details = bill_detail::find($id);
        $bill_details->delete();
        return redirect()->route('bill_detail.index')->with('msg', 'sucess');
    }
}
