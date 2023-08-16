<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use Illuminate\Http\Request;


class CategoryTypeController extends Controller
{

    //-----------------------------------------------------------------------------

    public function index()
    {
        $categoryTypes = CategoryType::orderBy('id', 'ASC')->paginate();

        return view('category-type.index', compact('categoryTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $categoryTypes->perPage());
    }

    //-----------------------------------------------------------------------------

    public function create()
    {
        $categoryType = new CategoryType();
        return view('category-type.create', compact('categoryType'));
    }

    //-----------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(CategoryType::$rules);

        $categoryType = CategoryType::create($request->all());

        return redirect()->route('category-type.index')
            ->with('success', 'Registro creado satisfacctoriamente.');
    }

    //-----------------------------------------------------------------------------

    public function show($id)
    {
        $categoryType = CategoryType::find($id);

        return view('category-type.show', compact('categoryType'));
    }

    //-----------------------------------------------------------------------------

    public function edit($id)
    {
        $categoryType = CategoryType::find($id);

        return view('category-type.edit', compact('categoryType'));
    }

    //-----------------------------------------------------------------------------

    public function update(Request $request, CategoryType $categoryType)
    {
        request()->validate(CategoryType::$rules);

        $categoryType->update($request->all());

        return redirect()->route('category-type.index')
            ->with('success', 'Registro actualizado satisfacctoriamente');
    }

    //-----------------------------------------------------------------------------

    public function destroy($id)
    {
        $categoryType = CategoryType::find($id)->delete();

        return redirect()->route('category-type.index')
            ->with('success', 'CategoryType deleted successfully');
    }
}
