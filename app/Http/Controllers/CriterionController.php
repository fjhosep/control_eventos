<?php

namespace App\Http\Controllers;

use App\Models\Criterion;
use Illuminate\Http\Request;


class CriterionController extends Controller
{

    //---------------------------------------------------------------------------------------------------------

    public function index()
    {
        $criteria = Criterion::orderBy('id', 'ASC')->paginate();

        return view('criterion.index', compact('criteria'))
            ->with('i', (request()->input('page', 1) - 1) * $criteria->perPage());
    }


    //---------------------------------------------------------------------------------------------------------

    public function create()
    {
        $criterion = new Criterion();
        return view('criterion.create', compact('criterion'));
    }


    //---------------------------------------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Criterion::$rules);

        $criterion = Criterion::create($request->all());

        return redirect()->route('criteria.index')
            ->with('success', 'Criterio creado satisfactoriamente');
    }


    //---------------------------------------------------------------------------------------------------------

    public function show($id)
    {
        $criterion = Criterion::find($id);

        return view('criterion.show', compact('criterion'));
    }


    //---------------------------------------------------------------------------------------------------------

    public function edit($id)
    {
        $criterion = Criterion::find($id);

        return view('criterion.edit', compact('criterion'));
    }


    //---------------------------------------------------------------------------------------------------------

    public function update(Request $request, Criterion $criterion)
    {
        request()->validate(Criterion::$rules);

        $criterion->update($request->all());

        return redirect()->route('criteria.index')
            ->with('success', 'Criterio actualizado satisfactoriamente.');
    }


    //---------------------------------------------------------------------------------------------------------

    public function destroy($id)
    {
        $criterion = Criterion::find($id)->delete();

        return redirect()->route('criteria.index')
            ->with('success', 'Criterio eliminado satisfactoriamente.');
    }
}
