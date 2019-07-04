<?php

namespace App\Http\Controllers;
use App\Pearson;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PearsonController extends Controller
{
    public function create()
    {
        return view('cruds/people/create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        $people = Pearson::all();
        
       return view('cruds/people/index')->with('people', $people);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pearson = new Pearson;
        $pearson->name = $request->name;
        $pearson->surname = $request->surname;
        $pearson->dni = $request->dni;
        $pearson->birth_date = Carbon::parse($request->birth_date);
        $pearson->email = $request->email;
        
        
        $pearson->save();
        dd($pearson);
        

       return redirect('/people');

    }
}
