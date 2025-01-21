<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(){
        $people = Person::all();
        return view('person.index', compact('people'));
    }

    public function create()
    {
        return view('person.create');
    }
    
    public function store(){
    
        $data = \request()->validate([
                'name'=>'string',
                'surname'=>'string',
                'nationality'=>'string',
                'telephone_number'=>'string',
                'is_married'=>'string',
                'sex'=>'string',
            ]);
            
            Person::create($data);
            return redirect()->route('person.index');
        }
        
    public function show(Person $person){
        return view('person.show', compact('person'));

    }

    public function edit(Person $person){
        return view('person.edit', compact('person'));
    }

    public function update(Person $person){
        $data = \request()->validate([
            'name'=>'string',
            'surname'=>'string',
            'nationality'=>'string',
            'telephone_number'=>'string',
            'is_married'=>'string',
            'sex'=>'string',
        ]);
        $person->update($data);
        return redirect()->route('person.show', $person->id);
    }

    public function delete(Person $person){
        $person->delete();
        return redirect()->route('person.index');
    }
}

    






