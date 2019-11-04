<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PassoUm;

class PassoUmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passoUm = new PassoUm([
            'completeName' => $request->get('complete_name'),
            'birthDate'=> $request->get('birth_date')
        ]);
        $passoUm->save();
        return redirect('/')->with('success', 'First Step Done');
    }
}
