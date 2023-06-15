<?php

namespace App\Http\Controllers;

use App\Models\Coach as ModelsCoach;
use Illuminate\Http\Request;

class Coach extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachs = ModelsCoach::all();

        return view('coach.index', [
            'coachs' => $coachs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
