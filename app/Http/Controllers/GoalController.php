<?php

namespace App\Http\Controllers;

use App\Models\FootballMatch;
use App\Models\Goal;
use App\Models\Player;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goals = Goal::all();

        return view('goal.index', [
            'goals' => $goals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all();
        $football_matchs = FootballMatch::all();
        return view('goal.create', [
            'players' => $players,
            'football_matchs' => $football_matchs,
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Player();
        $player->count = $request->count;
        $player->player_id = $request->player_id;
        $player->football_match_id = $request->football_match_id;
        $player->save();
        return redirect('/goals');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $goal = Goal::find($id);
        return view('goal.show', [
            'goal' => $goal,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $goal = Goal::find($id);
        $players = Player::all();
        $football_matchs = FootballMatch::all();
        return view('goal.edit', [
            'goal' => $goal,
            'players' => $players,
            'football_matchs' =>$football_matchs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $player = Player::find($id);
        $player->count = $request->count;
        $player->player_id = $request->player_id;
        $player->football_match_id = $request->football_match_id;
        $player->save();
        return redirect('/goals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $goal = Goal::find($id);

        $goal->delete();

        return redirect('/goals')->with('delete','Delete successfull!!!');
    }
}
