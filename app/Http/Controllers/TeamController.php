<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('team.index',[
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('team.create', [
            'teams' => $teams,            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->save();
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::find($id);
        return view('team.show', [
            'team' => $team,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('team.edit', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->save();

        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/teams');
    }
}
