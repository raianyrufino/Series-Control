<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Serie;

    
class SeriesController extends Controller
{
    public function index() {
        $series = Serie::all();

        return view ('series.index', [
            'series' => $series
        ]);

    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){

        $serie = Serie::create($request->all());
        echo "Série com id ($serie->id) criada: ($serie->nome)";
    }

}