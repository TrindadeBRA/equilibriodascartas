<?php

namespace App\Http\Controllers;

use App\Models\Tiragem;
use Illuminate\Http\Request;

class TiragemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args = ['type' => 'nova-tiragem'];
        return view('admin.dashboard', $args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiragem  $tiragem
     * @return \Illuminate\Http\Response
     */
    public function show(Tiragem $tiragem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiragem  $tiragem
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiragem $tiragem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiragem  $tiragem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiragem $tiragem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiragem  $tiragem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiragem $tiragem)
    {
        //
    }
}
