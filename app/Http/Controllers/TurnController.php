<?php

namespace App\Http\Controllers;

use App\Turn;
use App\Pearson;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turns = Turn::all();
    
        //dd($turns);
        $view = view('cruds/turns/index');

       return $view->with('turns', $turns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people = Pearson::all();
        return view('cruds/turns/create')->with('people', $people);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pearsonId = intval($request->pearson);
        $pearson = Pearson::find($pearsonId);
        
        $turns = Turn::all();
        $turn = new Turn;
        if(sizeof($turns) === 0){
            $turn->order = 1;
        } else {
            $turn->order = (Turn::latest()->first()->order) + 1;
        }

        

        
        $turn->people_id = $pearson->id;
        $turn->user_id = 0;
        $turn->queue_id = 0;
        $turn->reason = $request->reason;
        $turn->save();

        return redirect('/turns');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function show(Turn $turn)
    {
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function edit(Turn $turn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turn $turn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turn $turn)
    {
        //
    }
}
