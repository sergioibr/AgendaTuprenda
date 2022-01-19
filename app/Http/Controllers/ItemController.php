<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Item;
use App\Http\Requests\ItemStoreRequest;
use App\Http\Requests\ItemUpdateRequest;
use App\Models\User;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $items = Item::all();
   
        return view('item.index', ['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Pagina::contarPagina(\request()->path());
        $items = Item::all();
        return view('item.create', ['items'=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item($request->all());
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $item = Item::findOrFail($id);
        return view('item.show', ['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $item = Item::findOrFail($id);
      
        return view('item.edit', ['item'=>$item]);
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
        $item = Item::findOrFail($id);
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index');
    }
}
