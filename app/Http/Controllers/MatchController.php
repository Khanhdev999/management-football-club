<?php

namespace App\Http\Controllers;

use App\Models\FootballMatch;
use App\Models\Tournament;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs = FootballMatch::all();

        return view('match.index', [
            'matchs' => $matchs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matchs =  FootballMatch::all();
        $tournaments = Tournament::all();

        return view('match.create', [
            'matchs' => $matchs,
            'tournaments'=>$tournaments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $match = new FootballMatch();
        $match->name = $request->name;
        $match->tournament_id = $request->tournament_id;
        $match->time = $request->time;

        $match->save();
        return redirect('/matchs')->with('mes','Add successfull!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $match = FootballMatch::find($id);
        $tournaments = Tournament::all();
        return view('match.show', [
            'match' => $match,
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $match = FootballMatch::find($id);
        $tournaments = Tournament::all();
        return view('match.edit', [
            'match' => $match,
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $match = FootballMatch::find($id);
        $match->name = $request->name;
        $match->time = $request->time;
        $match->tournament_id=$request->tournament_id;
        $match->save();

        return redirect('/matchs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $match = FootballMatch::find($id);
        $match->delete();
        return redirect('/matchs')->with('delete','Delete successfull!!!');
    }
}
