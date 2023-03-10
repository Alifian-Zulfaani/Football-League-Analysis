<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\Managers;
use App\Models\Players;
use App\Models\Stadiums;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.landing-page.index');
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

    public function clubs()
    {
        $clubs = Clubs::orderBy('thropy', 'desc')->get();

        return view('pages.landing-page.clubs', [
            'clubs' => $clubs
        ]);
    }

    public function players()
    {
        $players = Players::all();

        return view('pages.landing-page.players', [
            'players' => $players
        ]);
    }

    public function managers()
    {
        $managers = Managers::all();

        return view('pages.landing-page.managers', [
            'managers' => $managers
        ]);
    }

    public function stadiums()
    {
        $stadiums = Stadiums::all();

        return view('pages.landing-page.stadiums', [
            'stadiums' => $stadiums
        ]);
    }
}