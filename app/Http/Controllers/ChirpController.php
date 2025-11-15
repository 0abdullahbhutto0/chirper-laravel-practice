<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $chirps = [
            [
                'author'=> 'Abdullah Bhutto',
                'message' => 'Just created my first Laravel App',
                'time' => '5 minutes ago'
            ],[
                'author'=> 'Elon Musk',
                'message' => 'Bro Zohran sucks, vote Cuomo',
                'time' => '23 minutes ago'
            ],[
                'author'=> 'Bernie Sanders',
                'message' => 'I am once again asking for your financial support',
                'time' => '15 minutes ago'
            ]
        ];

        return view('home', ['chirps' => $chirps]);
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
