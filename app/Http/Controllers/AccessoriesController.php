<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $datas = Accessories::orderBy('id', 'DESC')->get();
    return view('accessories.index', [
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
    return view('accessories.create');
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
      'accessory_name' => 'required',
      'category' => 'required',
      'model_number' => 'required',
      'order_number' => 'required',
      'purchase_date' => 'required',
      'purchase_cost' => 'required',
      'quantity' => 'required',
    ]);

    $accessories = Accessories::create([
      'accessory_name' => $request["accessory_name"],
      'category' => $request["category"],
      'model_number' => $request["model_number"],
      'order_number' => $request["order_number"],
      'purchase_date' => $request["purchase_date"],
      'purchase_cost' => $request["purchase_cost"],
      'quantity' => $request["quantity"],
      'notes' => $request["notes"],
    ]);

    return redirect('/accessories');
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
    Accessories::destroy($id);
    return redirect('/accessories');
  }
}
