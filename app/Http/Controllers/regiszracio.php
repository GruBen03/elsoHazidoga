<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomersekletRogzites extends Controller
{
    public function getContent(){

        $termek = DB::select("SELECT * FROM termek ORDER BY nev ASC");

        return view("homersekletRogzites",["termek" => $termek]);
    }
    public function rogzites(Request $req){
        $req->validate(
            [
                "vezetek" => "required|text",
                "kereszt" => "required|text",
                "szulev" => "required|numeric"
            ],
            //////////////////////////////////////
            [
                "vezetek.required" => "Add meg a vezetékneved!",
                "vezetek.text" => "Csak szöveget írhatsz",
                "kereszt.required" => "Add meg a keresztneved!",
                "kereszt.text" => "Csak szöveget írhatsz",
                "szulev.required" => "Add meg a születési éved!",
                "szulev.numeric" => "Csak számot írhatsz"
                    
            ]
        );
        DB::insert("INSERT INTO Rogzites(`vezeteknev`, `kereszt`, `szulev`) VALUES (?,?,?)", 
        [
        $req->get('vezeteknev'),
        $req->get('kereszt'),
        $req->get('szulev'),
        ]);

        return redirect("/rogzites")->with("success","Az adatokat sikeresen rögzítettük!");
    }
}
