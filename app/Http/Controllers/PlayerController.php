<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Player;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();

        return view('player.index', [
            'players' => $players,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$teams = Team::all();
        //$coachs = Coach::all();
        $tournaments=Tournament::all();
        return view('player.create', [
            // 'teams' => $teams,
            // 'coachs' => $coachs,
            'tournaments' => $tournaments,
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Player();
        $player->name = $request->name;
        $player->coach_id = $request->coach_id;
        $player->team_id = $request->team_id;
        $player->birthday = $request->birthday;
        $player->phone = $request->phone;
        $player->address = $request->address;
        $photo = $request->file('photo')->store('public'); 
        $player->photo = substr($photo,strlen('public/'));
        $player->save();
        $player->tournaments() -> attach($request->tournament);
        return redirect('/players');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::find($id);
        return view('player.show', [
            'player' => $player,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::find($id);
        //$coachs = Coach::all();
        //$teams = Team::All();
        $tournaments=Tournament::all();
        return view('player.edit', [
            'player' => $player,
            //'coachs' => $coachs,
            //'teams' =>$teams,
            'tournament' => $tournaments,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $player = Player::find($id);
        $player->name = $request->name;
        $player->coach_id = $request->coach_id;
        $player->team_id = $request->team_id;
        $player->birthday = $request->birthday;
        $player->phone = $request->phone;
        $player->address = $request->address;
        $player->tournaments() -> sync($request->tournaments);
        $player->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::find($id);

        $player->delete();

        return redirect('/players')->with('delete','Delete successfull!!!');
    }
}
