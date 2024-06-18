<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $notebooks = Notebook::where('user_id', $user_id)->latest('updated_at')->get();
        return view('notebooks.index')->with('notebooks', $notebooks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notebooks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $notebook = new Notebook([
            'user_id' => Auth::id(),
            'name' => $request->name,
        ]);

        $notebook->save();

        return to_route('notebooks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notebook $notebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notebook $notebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notebook $notebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notebook $notebook)
    {
        //
    }
}
