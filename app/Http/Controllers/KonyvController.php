<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonyvController extends Controller
{
    public function index(){

        return view('konyvAdatlap');
    }

    public function lista(){

        return view('konyvLista');
    }

    public function rogzites(Request $req){
        $req->validate(
            [
                //Ide fel kell sorolnuk a formon található mezőket amiket validálni szeretnénk
                //A nyilacska utáni részben fel kell sorolni, hogy mi legyen a validációs szabály. Ilyen szabály pl.: a mező kitöltése kötelező
                //Ha egy mezőre több szabályt is szeretnénk alkotni, akkor a | elválasztót kell használni
                "cim" => "required|min:1|max:200", #kötelező|minimum 1 karakter| maximum 200 karater
                "szerzo" => "required|min:5|max:200",
                "isbn" => "required|regex:/^\d+$/", #ez jelenti azt, hogy csak számok kerülhetnek mezőbe. A ^ jelet a Altgr+3 -al lehet írni
                "kiadasi_ev" => "required|numeric|min:1000|max:2024",
                "oldalszam" => "required|numeric|min:1" #numeric azt jelenti, hogy csak pozitív egész szám lehet.
            ],
            [
                //Itt meg kell alkotni a hibaüzeneteket a szabályokhoz.
                "cim.required" => "A mező nem lehet üres",
                "cim.min" => "A címnek minimum 1 karaktert adj meg",
                "cim.max" => "A címnek maximum 200 karatert adj meg",
                "szerzo.required" => "A mező nem lehet üres",
                "szerzo.min" => "Minimum 5 karatert adj meg",
                "szerzo.max" => "Maximum 200 karaktert adj meg",
                "isbn.required" => "A mező kitöltése kötelező",
                "isbn.regex" => "Csak számokat adj meg",
                "kiadasi_ev.required" => "A mező kitöltése kötelező",
                "kiadasi_ev.numeric" => "Csak pozitív egész számot adhatsz meg",
                "kiadasi_ev.min" => "Minimum: 1000",
                "kiadasi_ev.max" => "Maximum: 2024",
                "oldalszam.required" => "A mező kitöltése kötelező",
                "oldalszam.numeric" => "Csak pozitív egész számot adhatsz meg",
                "oldalszam.min" => "Minimum: 1"
            ]
        );
    }
}
