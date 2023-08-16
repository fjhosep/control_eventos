<?php

namespace App\Http\Controllers;

use App\Models\Error;
use Illuminate\Http\Request;

class ErrorController extends Controller
{

    //--------------------------------------------------------------------------------

    public function index()
    {
        $errors = Error::paginate();

        return view('error.index', compact('errors'))
            ->with('i', (request()->input('page', 1) - 1) * $errors->perPage());
    }


    //--------------------------------------------------------------------------------

    public function create()
    {
        $error = new Error();
        return view('error.create', compact('error'));
    }


    //--------------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Error::$rules);

        $error = Error::create($request->all());

        return redirect()->route('error.index')
            ->with('success', 'Penalidad añadida satisfactoriamente.');
    }


    //--------------------------------------------------------------------------------

    public function show($id)
    {
        $error = Error::find($id);

        return view('error.show', compact('error'));
    }


    //--------------------------------------------------------------------------------

    public function edit($id)
    {
        $error = Error::find($id);

        return view('error.edit', compact('error'));
    }


    //--------------------------------------------------------------------------------

    public function update(Request $request, Error $error)
    {
        request()->validate(Error::$rules);

        $error->update($request->all());

        return redirect()->route('error.index')
            ->with('success', ' Los datos han sido actualizados ');
    }


    //--------------------------------------------------------------------------------

    public function destroy($id)
    {
        $error = Error::find($id)->delete();

        return redirect()->route('error.index')
            ->with('success', ' LOs datps han sido eliminados');
    }
}
