<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $datas = People::orderBy('id', 'DESC')->get();
    return view('people.index', [
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
    return view('people.create');
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
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'title' => 'required',
      'departmen' => 'required',
    ]);

    $people = People::create([
      'first_name' => $request["first_name"],
      'last_name' => $request["last_name"],
      'email' => $request["email"],
      'phone' => $request["phone"],
      'title' => $request["title"],
      'departmen' => $request["departmen"],
    ]);

    return redirect('/people');
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
    People::destroy($id);
    return redirect('/people');
  }
}
