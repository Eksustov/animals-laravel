<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        $animals = Animal::all();
        return view("animals.index", ["animals" => $animals]);
    }

    public function show($id) {
        $animal = Animal::find($id);
        return view("animals.show", ["animal" => $animal]);
    }

    public function create() {
        return view("animals.create");
    }

    public function store(Request $request) {
        $animal = new Animal();
        $animal->animal = $request->animal;
        $animal->description = $request->description;
        $animal->age = $request->age;
        $animal->save();
        return redirect("/");
    }
}
