<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Models\Person;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scheme.person.index', ['persons' => Person::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scheme.person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function store(StorePersonRequest $request)
    {
        $validated = $request->validated();
        $person = new Person();
        $person->fill($request->only($person->getFillable()));
        $person->password = Hash::make('password');
        if ($person->saveOrFail()){
            return redirect()->route('persons.index')->with('status', 'success');
        }
        else{
            return back()->with('status', 'error')->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('scheme.person.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Person $person
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function update(StorePersonRequest $request, Person $person)
    {
        $validated = $request->validated();
        if ($person->updateOrFail($request->only($person->getFillable()))){
            return redirect()->route('persons.index')->with('status', 'success');
        }
        else{
            return back()->with('status', 'error')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Person $person
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function destroy(Person $person)
    {
        if ($person->deleteOrFail()){
            return redirect()->route('persons.index')->with('status', 'Success destroy');
        }
        else{
            return redirect()->route('persons.index')->with('status', 'Error destroy');
        }
    }
}
