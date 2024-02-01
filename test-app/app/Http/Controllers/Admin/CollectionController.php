<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();
        return view('collection.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'is_active' => 'required'
        ]);
        $input = $request->all();
        Collection::create($input);
        return redirect()->route('collection.index')->with('success', 'Ваша категория была добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('collection.show', compact('collection'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        return view('collection.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'is_active' => 'required'
        ]);
        $input = $request->all();
        $collection->update($input);
        return redirect()->route('collection.index')->with('success', 'Ваша категория была добавлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('collection.index')->with('success', 'Ваша запись была удалена');
    }
}
