<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use App\Http\Requests\StoreSchemeRequest;
use App\Http\Requests\UpdateSchemeRequest;

class SchemeController extends Controller
{

    //--------------------------------------------------------------------------------------
    public function index()
    {
        $schemes = Scheme::orderBy('id', 'ASC')->paginate();
        return view('schemes.index', compact('schemes'));
    }

    //-------------------------------------------------------------------------------------

    public function create()
    {
        return view('schemes.create');
    }

    //-------------------------------------------------------------------------------------

    public function store(StoreSchemeRequest $request)
    {
        Scheme::create($request->all());
        return redirect()->route('schemes.index');
    }

    //-------------------------------------------------------------------------------------

    public function show(Scheme $scheme)
    {
        return view('schemes.show', compact('scheme'));
    }

    //-------------------------------------------------------------------------------------

    public function edit(Scheme $scheme)
    {
        return view('schemes.edit', compact('scheme'));
    }

    //-------------------------------------------------------------------------------------

    public function update(UpdateSchemeRequest $request, Scheme $scheme)
    {
        $scheme->update($request->only('name'));
        return redirect()->route('schemes.index');
    }

    //

    public function destroy(Scheme $scheme)
    {
        $scheme->delete();
        return redirect()->route('schemes.index');
    }
}
