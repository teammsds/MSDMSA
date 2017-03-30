<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Player;
use App\School;
use App\Team;
class Playercontroller extends Controller

{
    public function index()
    {
        //
        $players=Player::all();
        return view('players.index',compact('players'));
    }

    public function show($id)
    {

        $player = Player::findOrFail($id);

        return view('players.show',compact('player'));
    }


    public function create()
    {
        $schools = School::pluck('s_name','id');
         $teams = Team::lists('tm_name','id');
         return view('players.create', compact('schools','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $team= new Player($request->all());
        $team->save();

        return redirect('players');
    }

    public function edit($id)
    {
        $team=Player::find($id);
        return view('players.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $team= new Player($request->all());
        $team=Player::find($id);
        $team->update($request->all());
        return redirect('players');
    }

    public function destroy($id)
    {
        Player::find($id)->delete();
        return redirect('players');
    }
}
