<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use App\Models\Telefon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TelefonController extends Controller
{
    public function view($kategorija, $telefon){

        $pieces = explode("/", url()->current());
        $telefon= Telefon::findOrFail($pieces[count($pieces)-1]);
        return view('telefon',['telefon'=>$telefon]);

    }
    public function getAll(){

        return response()->json(Telefon::all(),200);
    }
    public function getById($id){
        $telefon=Telefon::find($id);
        if(is_null($telefon)){
            return response()->json(["message"=>"Nema datog telefona"],404);
        }
        return response()->json($telefon,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'model'=>'required|min:2',
            'baterija'=>'required|min:2',
            'slika'=>'required|min:2',
            'cena'=>'required',
            'procesor'=>'required|min:2',
            'ram'=>'required|min:2',
            'kamera'=>'required|min:2',
            'memorija'=>'required|min:2',
            'kategorija_id'=>'required|min:2',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $telefon= Telefon::create($request->all());
        return response()->json($telefon, 201);
    }
    public function delete(Request $request, $id){
        $telefon=Telefon::find($id);

        if(is_null($telefon)){
            return response()->json(["message"=>"Ne postoji telefon"],404);
        }
        $telefon->delete();
        return response()->json(null,204);
    }
}
