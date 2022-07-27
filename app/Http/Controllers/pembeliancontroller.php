<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pembelian;
use App\Models\menu;

class pembeliancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pembelian = pembelian::all();
        return view('page.pembelian.index', compact('pembelian','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = menu::all();
        return view('page.pembelian.form', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new pembelian;

        $pembelian->nofak = $request->nofak;
        $pembelian->tanggal = $request->tanggal;
        $pembelian->id_menu = $request->menu;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->save();

        return redirect('/pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = pembelian::find($id);
        $menu = menu::all();
        return view('page.pembelian.edit',compact('pembelian','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembelian = pembelian::find($id);

        $pembelian->nofak = $request->nofak;
        $pembelian->tanggal = $request->tanggal;
        $pembelian->id_menu = $request->menu;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->save();

        return redirect('/pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = pembelian::find($id);
        $pembelian->delete();

        return redirect('pembelian');
    }
}
