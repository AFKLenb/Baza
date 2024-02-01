<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Cum;
use Illuminate\Http\Request;

class CumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cums = Cum::all();
        return view('cum.index', compact('cums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collections = Collection::where('is_active', 1)->get();
        return view('cum.create', compact('collections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'quantity' => 'required',
            'is_active' => 'required',
            'collection_id' => 'required',
            'image' => 'required|Image|mimes:jpg,png,jpeg,bmp,gif,svg,webp|max:2048'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')){
            $destionPath = 'images/cums/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image']="$profileImage";
        }
        Cum::create($input);

        return redirect()->route('cum.index')->with('success', 'Ваш cum был добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cum $cum)
    {
        return view('cum.show', compact('cum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cum $cum)
    {
        $collections = Collection::where('is_active', 1)->get();
        return view('cum.edit', compact('cum', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cum $cum)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'quantity' => 'required',
            'is_active' => 'required',
            'collection_id' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')){
            $destionPath = 'images/cums/';
            $profileImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image']="$profileImage";
        }else{
            unset($input['image']);
        }

        $cum->update($input);
        return redirect()->route('cum.index')->with('success', 'Ваш cum был изменён');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cum $cum)
    {
        $cum->delete();
        return redirect()->route('cum.index')->with('success', 'Ваш cum был удален');
    }
}
