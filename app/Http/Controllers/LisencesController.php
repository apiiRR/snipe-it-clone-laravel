<?php

namespace App\Http\Controllers;

use App\Models\Lisence;
use Illuminate\Http\Request;

class LisencesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $datas = Lisence::orderBy('id', 'DESC')->get();
    return view('lisences.index', [
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
    return view('lisences.create');
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
      'software_name' => 'required',
      'category' => 'required',
      'product_key' => 'required',
      'licensed_to_name' => 'required',
      'licensed_to_email' => 'required|email',
      'supplier' => 'required',
      'order_number' => 'required',
      'purchase_cost' => 'required',
      'purchase_date' => 'required',
      'expiration_date' => 'required',
      'termination_date' => 'required',
      'purchase_order_number' => 'required',
    ]);

    $lisences = Lisence::create([
      'software_name' => $request["software_name"],
      'category' => $request["category"],
      'product_key' => $request["product_key"],
      'licensed_to_name' => $request["licensed_to_name"],
      'licensed_to_email' => $request["licensed_to_email"],
      'supplier' => $request["supplier"],
      'order_number' => $request["order_number"],
      'purchase_cost' => $request["purchase_cost"],
      'purchase_date' => $request["purchase_date"],
      'expiration_date' => $request["expiration_date"],
      'termination_date' => $request["termination_date"],
      'purchase_order_number' => $request["purchase_order_number"],
      'notes' => $request["notes"]
    ]);

    return redirect('/lisences');
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
    Lisence::destroy($id);
    return redirect('/lisences');
  }
}
