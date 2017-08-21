<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function store(Requests\FlyerRequest $request)
    {
        // persist the flyer
        // redirect the landing page
        return view('home');
    }

}
