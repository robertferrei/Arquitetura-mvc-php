<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){

        $series = [
            'simpsons',
            'family guy',
            'the witcher'
        ];
        return view('series.index',['series'=>$series]);
    }

    public function create(){

        return view('series.create');
    }
}
