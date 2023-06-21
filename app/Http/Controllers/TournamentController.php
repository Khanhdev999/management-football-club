<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournament.index', [
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournaments = Tournament::all();
        return view('tournament.create', [
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->daymatch = $request->daymatch;
        $tournament->prize = $request->prize;
        $tournament->save();
        return redirect('/tournaments')->with('mes','Add successfull!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tournament = Tournament::find($id);
        return view('tournament.show', [
            'tournament' => $tournament,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournament = Tournament::find($id);
        return view('tournament.edit', [
            'tournament' => $tournament,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tournament = Tournament::find($id);
        $tournament->name = $request->name;
        $tournament->daymatch = $request->daymatch;
        $tournament->prize = $request->prize;
        $tournament->save();
        return redirect('/tournaments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tournament = Tournament::find($id);
        $tournament->delete();
        return redirect('/tournaments')->with('delete','Delete successfull!!!');
    }
}
