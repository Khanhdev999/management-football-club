<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachs =Coach::all();
        return view('coach.index',[
            'coachs' => $coachs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coachs = Coach::all();
        return view('coach.create', [
            'coachs' => $coachs,            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coach = new Coach();
        $coach->name = $request->name;
        $coach->birthday = $request->birthday;
        $coach->phone = $request->phone;
        $coach->address = $request->address;
        $coach->save();
        return redirect('/coachs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coach = Coach::find($id);
        return view('coach.show', [
            'coach' => $coach,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coach = Coach::find($id);
        return view('coach.edit', [
            'coach' => $coach,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coach = Coach::find($id);
        $coach->name = $request->name;
        $coach->birthday = $request->birthday;
        $coach->phone = $request->phone;
        $coach->address = $request->address;

        $coach->save();

        return redirect('/coachs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coach = Coach::find($id);

        $coach->delete();

        return redirect('/coachs');
    }
}
