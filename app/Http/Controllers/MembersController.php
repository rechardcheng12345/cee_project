<?php

namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::orderByDesc('id');
        return $members->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(){
        return view('login');
    }
    public function store(Request $request)
    {
      try {
        $members = new Members;
        $members->fill($request->all());
        $members->dateJoined = date("Y/m/d");

        $members->saveOrFail();
        $members->update(['membershipNo' => "UW".date("y").str_pad($members->id,5,'0',STR_PAD_LEFT)]);

        return view('registerSuccessMessage');
      }
      catch(QueryException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
      }
      catch(\Exception $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publics  $publics
     * @return \Illuminate\Http\Response
     */
    public function show(Publics $publics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publics  $publics
     * @return \Illuminate\Http\Response
     */
    public function edit(Publics $publics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publics  $publics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publics $publics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publics  $publics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publics $publics)
    {
        $publics->delete();
    }

    public function redirectToHome() {
       return view('home');
    }
}
