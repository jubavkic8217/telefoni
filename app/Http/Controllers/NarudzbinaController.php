<?php

namespace App\Http\Controllers;

use App\Models\Narudzbina;
use App\Models\Stavkanarudzbine;
use Illuminate\Http\Request;

class NarudzbinaController extends Controller
{
    public function create(Request $request)
    {
        $narudzbina = new Narudzbina();
        $narudzbina->ime = $request->ime;
        $narudzbina->prezime = $request->prezime;
        $narudzbina->adresa = $request->adresa;
        $narudzbina->broj_telefona = $request->broj_telefona;
        $narudzbina->save();
        $korpa = [];
        if ($request->session()->has('korpa')) {
            $korpa = $request->session()->get('korpa');
        }
        foreach ($korpa as $elements) {
            foreach ($elements as $element) {
                $stavkanarudzbine = new Stavkanarudzbine();
                $stavkanarudzbine->narudzbina_id = $narudzbina->id;
                $stavkanarudzbine->telefon_id = $element->id;
                $stavkanarudzbine->save();
            }
        }
        $request->session()->forget('korpa');
        return redirect('/');
    }
}
