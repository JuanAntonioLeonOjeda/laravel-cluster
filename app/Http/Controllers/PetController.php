<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function getAllPets() {
        $arr = [ 1,2,3,4,5 ];
        return view('pet', ['list' => $arr]);
    }

    public function getOnePet($id) {
        return view('onePet', ['petId' => $id]);
    }
}
