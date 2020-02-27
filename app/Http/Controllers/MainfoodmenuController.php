<?php

namespace App\Http\Controllers;

use App\Mainfoodmenu;
use Illuminate\Http\Request;

class MainfoodmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = Mainfoodmenu::latest()->get();
        return view ('menu', ['menu'=>$menu]);
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
     * @param  \App\Mainfoodmenu  $mainfoodmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Mainfoodmenu $mainfoodmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mainfoodmenu  $mainfoodmenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainfoodmenu $mainfoodmenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mainfoodmenu  $mainfoodmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainfoodmenu $mainfoodmenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mainfoodmenu  $mainfoodmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainfoodmenu $mainfoodmenu)
    {
        //
    }
}
