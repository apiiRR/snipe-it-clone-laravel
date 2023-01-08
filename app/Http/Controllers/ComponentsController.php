<?php

namespace App\Http\Controllers;

use App\Models\Components;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $datas = Components::orderBy('id', 'DESC')->get();
    return view('components.index', [
      'datas' => $datas
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('components.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'component_name' => 'required',
      'category' => 'required',
      'quantity' => 'required',
      'serial' => 'required',
      'order_number' => 'required',
      'purchase_date' => 'required',
      'purchase_cost' => 'required',
    ]);

    $components = Components::create([
      'component_name' => $request["component_name"],
      'category' => $request["category"],
      'quantity' => $request["quantity"],
      'serial' => $request["serial"],
      'order_number' => $request["order_number"],
      'purchase_date' => $request["purchase_date"],
      'purchase_cost' => $request["purchase_cost"],
      'notes' => $request["notes"]
    ]);

    return redirect('/components');
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
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Components::destroy($id);
    return redirect('/components');
  }
}
