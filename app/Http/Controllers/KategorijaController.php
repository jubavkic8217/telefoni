<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Pol;
use App\Models\Proizvod;
use App\Models\Telefon;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    public function all(){
        $kategorije=Kategorija::all();
        $telefoni=Telefon::all();
        foreach ($kategorije as $kategorija) {
            $modeli=[];
            foreach ($telefoni as $telefon) {
                if ($telefon->kategorija_id == $kategorija->id){
                    $modeli[count($modeli)]=$telefon;
                }
            }
            $kategorija->telefoni=$modeli;
        }

        return view('pocetna', [
            'kategorije'=>$kategorije
        ]);

    }
    public function view($kategorija){
        $kategorija= Kategorija::findOrFail($kategorija);
        $telefoni=Telefon::all();
        $odeca=[];
        $modeli=[];
        foreach ($telefoni as $telefon) {
            if ($telefon->kategorija_id == $kategorija->id){
                $modeli[count($modeli)]=$telefon;
            }
        }
        $kategorija->telefoni=$modeli;
        return view('kategorije',['kategorija'=>$kategorija]);

    }
    public function getAll(){
        $kategorije=Kategorija::all();
        $telefoni=Telefon::all();
        foreach ($kategorije as $kategorija) {
            $modeli=[];
            foreach ($telefoni as $telefon) {
                if ($telefon->kategorija_id == $kategorija->id){
                    $modeli[count($modeli)]=$telefon;
                }
            }
            $kategorija->telefoni=$modeli;
        }

        return response()->json($kategorije,200);
    }
    public function getById($id){
        $kategorija=Kategorija::find($id);
        $telefoni=Telefon::all();
        if(is_null($kategorija)){
            return response()->json(["message"=>"Ne postoji kategorija"],404);
        }
        $modeli=[];
        foreach ($telefoni as $telefon) {
            if ($telefon->kategorija_id == $kategorija->id){
                $modeli[count($modeli)]=$telefon;
            }
        }
        $kategorija->telefoni=$modeli;
        return response()->json($kategorija,200);
    }
}
