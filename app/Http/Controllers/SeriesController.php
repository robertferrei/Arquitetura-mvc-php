<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){


        $series = Series::query()->orderBy('nome') ->get();        
        return view('series.index',['series'=>$series]);
    }

    public function create(){
        return view('series.create');
    }
    public function store(Request $request){
        
        $nomeSerie =$request->input('nome'); //cria um novo nome
        $serie = new Series();
        $serie->nome = $nomeSerie;
        $serie->save();

        //Series::create($request->input('nome'));

        return redirect('/series');

    }
}


