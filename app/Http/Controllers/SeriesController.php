<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listaSeries(){

        $series = [
            'simpsons',
            'family guy',
            'the witcher'
        ];

        $html = '<ul>';
        foreach($series as $serie){
            $html.="<li>$serie </li>";
        }
        $html.= '</ul>';

        echo $html;
    }
}
