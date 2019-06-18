<?php

namespace App\Http\Controllers;

use App\queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cruds/queues/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruds/queues/create');
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
     * @param  \App\queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function show(queue $queue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function edit(queue $queue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, queue $queue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function destroy(queue $queue)
    {
        //
    }
}
