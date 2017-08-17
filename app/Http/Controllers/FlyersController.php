<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FlyersController extends Controller
{

    /**
     * Show the form for creating a new resource
     * 
     * @return Response  
    */
    public function create()
    {
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage
     * 
     * @param Request $request
     * @return Response
    */
    public function store(Request $request)
    {
        // create the flyer
        // $request->all
    }

}
