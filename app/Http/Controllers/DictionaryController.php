<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Support\Str;
use App\Http\Requests\StoreDictionaryRequest;
use App\Http\Requests\UpdateDictionaryRequest;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dictionary.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDictionaryRequest $request)
    {
       $name = $request->input('name');
       
       $meaning = $request->input('meaning');

       $dictionaryObj = new Dictionary();

       $dictionaryObj->name = $name;
       $dictionaryObj->slug = $meaning;

       $dictionaryObj->save();

       return back()->with('message','successfully saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dictionary $dictionary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dictionary $dictionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDictionaryRequest $request, Dictionary $dictionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dictionary $dictionary)
    {
        //
    }
}
