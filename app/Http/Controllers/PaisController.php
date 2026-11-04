<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PaisController extends Controller
{
    public function index(Request $request){
        $continente = $request->query('continente');
        $paises = DB::select("SELECT Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, LocalName, GNP, GovernmentForm FROM COUNTRY where Continent = ?", [$continente]);

        return view('pais', compact('paises'));

    }
}
