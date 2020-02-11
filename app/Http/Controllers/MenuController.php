<?php

namespace App\Http\Controllers;

use App\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::latest()->get();
        return view ('menu', ['menu'=>$menu]);
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view ('menu');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//        request()->validate([
//            'Name'=>'required',
//            'picture'=>'required',
//            'price'=>'required',
//            ]);
//
//        $menu = new Events();
//        $menu->picture = request('Name');
//        $menu->name = request('name');
//        $menu->price = request('price ');
//        $menu->save();
//        return redirect('events');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\menu  $menu
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $menu = Menu::findOrFail($id);
//        return view('menu', ['menu'=>$menu]);
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\menu  $menu
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        $menu = Menu::findOrFail($id);
//        return view ('menu' ,['menu'=>$menu]);
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\menu  $menu
//     * @return \Illuminate\Http\Response
//     */
//    public function update($id)
//    {
//        $menu = Menu::findOrFail($id);
//
//        request()->validate([
//            'Picture'=>'required',
//            'Name'=>'required',
//            'Price'=>'required',
//            ]);
//
//        $menu->picture = request('Name');
//        $menu->name = request('name');
//        $menu->price = request('price ');
//        $menu->save();
//        return redirect('menu');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\menu  $menu
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        menu::destroy($id);
//        return redirect('menu');
//    }
}
