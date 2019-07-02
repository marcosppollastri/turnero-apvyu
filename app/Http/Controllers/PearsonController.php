<?php

namespace App\Http\Controllers;
use App\Pearson;
use Carbon;

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
        // $pearson->birth_date = null;
        $pearson->email = "unmail@dominio.com.ar";
        dd($pearson);
        // $pearson->save();

        

        // return redirect('/people');

    }
}
