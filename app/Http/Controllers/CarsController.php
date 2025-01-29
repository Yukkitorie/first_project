<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarsController extends Controller
{
    public function index(){
    $car = Car::all();
    return view('cars.index', compact('car'));  
}

    public function create(){
        return view('cars.create');
    }

    public function store(){
        $data = \request()->validate([
            'brand'=>'string',
            'model'=>'string',
            'year'=>'string',
            'color'=>'string',
            'vin_number'=>'integer',
        ]);
        Car::create($data);   // Car::create is a reference to the model
        return redirect()->route('cars.index');
    }

    public function show(Car $car){
        return view('cars.show', compact('car'));
    }
    public function edit(Car $car){
        return view('cars.edit', compact('car'));
    }

    public function update(Car $car){
        $data = \request()->validate([
            'brand'=>'string',
            'model'=>'string',
            'year'=>'string',
            'color'=>'string',
            'vin_number'=>'integer',
        ]);
        $car->update($data);
        return redirect()->route('cars.show', $car->id);
    }

    public function delete(Car $car){
        $car->delete();
        return redirect()->route('cars.index');
    }
}