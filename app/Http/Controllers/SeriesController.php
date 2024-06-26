<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = Series::query()->orderBy('nome') ->get();        
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
       
        return view('series.index',['series'=>$series])->with('mensagemSucesso',$mensagemSucesso); //chamando nossa mensagem
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
    public function destroy($id,Request $request){
        Series::where('id',$id) ->delete();

    
        $request->session()->flash('mensagem.sucesso','Série removida com sucesso!');
        
        return redirect()->route('series.index');
    }
}


