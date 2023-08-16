<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    //-----------------------------------------------------------------------------

    public function index(Request $request)
    {

        $name = $request->get('name');

        $categories = Category::orderBy('id')
            ->name($name)
            ->paginate();

        return view('category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * $categories->perPage());
    }

    //-----------------------------------------------------------------------------

    public function create()
    {
        $category = new Category();
        $categorytype = CategoryType::orderBy('id', 'ASC')->pluck('name', 'id');
        return view('category.create', compact('category', 'categorytype'));
    }

    //-----------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Category::$rules);

        $category = Category::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categoría creada satisfacctoriamente.');
    }

    //-----------------------------------------------------------------------------

    public function show($id)
    {
        $category = Category::find($id);
        $categorytype = CategoryType::pluck('name', 'id');
        return view('category.show', compact('category'));
    }

    //-----------------------------------------------------------------------------

    public function edit($id)
    {
        $category = Category::find($id);
        $categorytype = CategoryType::pluck('name', 'id');
        return view('category.edit', compact('category', 'categorytype'));
    }

    //-----------------------------------------------------------------------------

    public function update(Request $request, Category $category)
    {
        request()->validate(Category::$rules);

        $category->update($request->all());
        return redirect()->route('categories.index')
            ->with('success', 'Categoria actualizada satisfacctoriamente');
    }

    //-----------------------------------------------------------------------------

    public function destroy($id)
    {
        $category = Category::find($id)->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Registro de Categoría ha sido eliminado');
    }
}
