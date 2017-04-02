<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;
use App\Match;
use App\Tournament;
use App\Field;
use App\Team;

class MatchController extends Controller
{
    //
    public function index()
    {
        //
        $matches=Match::all();
        return view('matches.index',compact('matches'));
    }

    public function show($id)
    {

        $match = Match::findOrFail($id);

        return view('matches.show',compact('match'));
    }


    public function create()
    {

        $fields = Field::lists('f_name','id');
        $tournaments = Tournament::lists('to_name','id');
        $teams = Team::lists('tm_name','id');
        return view('matches.create', compact('fields','tournaments','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $match= new Match($request->all());
        $match->save();

        return redirect('matches');
    }

    public function edit($id)
    {
        $match=Match::find($id);
        return view('matches.edit',compact('match'));
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
        $match= new Match($request->all());
        $match=Match::find($id);
        $match->update($request->all());
        return redirect('matches');
    }

    public function destroy($id)
    {
        Match::find($id)->delete();
        return redirect('matches');
    }

}
