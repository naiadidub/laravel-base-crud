<?php

namespace App\Http\Controllers;

use App\Comic;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $fumetti = Comic::all();
        return view('comics.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        @dump($request);
        $data = $request->all();
        $nuovoComic = new Comic();
        $nuovoComic->title=$data['title'];//nel []devi mettere il name che hai dato all'input nel form, in questo caso è 'title' ed è uguale ma potrebbe essere diverso da quello invece che hai nel seeder che rirpende i nomi dell'array iniziale dei comics
        if(!empty($data['description'])){
            $nuovoComic->description=$data['description'];
        }//se $data['description'] è nullable allora fai un controllo
        $nuovoComic->thumb=$data['thumb'];
        $nuovoComic->price=$data['price'];
        $nuovoComic->series=$data['series'];
        $nuovoComic->sale_date=$data['sale_date'];
        $nuovoComic->type=$data['type'];
        $nuovoComic->save();
        return redirect()->route('comics.show', $nuovoComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Comic::findOrFail($id);
        return view('comics.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Comic::findOrFail($id);
        return view('comics.edit', compact('fumetto'));
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
        $data = $request->all();
        $fumetto = Comic::findOrFail($id);
        //$fumetto->title=$data['title'];
        //if(!empty($data['description'])){
            //$fumetto->description=$data['description'];
        //}
        //$fumetto->thumb=$data['thumb'];
        //$fumetto->price=$data['price'];
        //$fumetto->series=$data['series'];
        //$fumetto->sale_date=$data['sale_date'];
        //$fumetto->type=$data['type'];
        //$fumetto->save();
        $fumetto->update($data);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fumetto = Comic::findOrFail($id);
        $fumetto->delete();
        return redirect()->route('comics.index');
    }
}
