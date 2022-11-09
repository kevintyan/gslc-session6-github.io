<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //
    public function index()
    {
        return view('characters', [
            'title' => 'characters',
            'characters' => Character::all()
        ]);
    }

    public function show($name)
    {
        return view('character', [
            "title" => 'Single Character',
            "char" => Character::findName($name)
        ]);
    }
}
