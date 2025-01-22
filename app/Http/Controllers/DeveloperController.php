<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers=Developer::all();
        return view('Developers.index',['developers'=>$developers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $developer=new Developer();
        $developer->name=$request->name;
        $developer->email=$request->email;
        $developer->save();
        return redirect()->route('developers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $developer=Developer::findOrFail($id);
        return view('Developers.show',['developer'=>$developer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $developer=Developer::findOrFail($id);
        return view('Developers.edit',['developer'=>$developer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $developer=Developer::findOrFail($id);
        $developer->name=$request->name;
        $developer->email=$request->email;
        $developer->save();
        return redirect()->route('developers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $developer=Developer::findOrFail($id);
        $developer->delete();
        return redirect()->route('developers.index');
    }
}
