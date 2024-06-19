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

      Series::create($request->all());      
        //Series::create($request->input('nome'));

        to_route('series.index');
        return redirect('/series');

    }
    public function destroy($id){
        Series::where('id',$id) ->delete();
        return redirect()->route('series.index');
    }
}


