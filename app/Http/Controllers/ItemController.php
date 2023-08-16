<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Criterion;
use Illuminate\Http\Request;


class ItemController extends Controller
{

    //------------------------------------------------------------------------

    public function index()
    {
        $items = Item::orderBy('id', 'ASC')
            ->paginate(20);

        return view('item.index', compact('items'))
            ->with('i', (request()->input('page', 1) - 1) * $items->perPage());
    }

    //------------------------------------------------------------------------

    public function create()
    {
        $item = new Item();
        $criteria = Criterion::orderBy('id', 'ASC')
            ->pluck('name', 'id');
        return view('item.create', compact('item', 'criteria'));
    }

    //------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Item::$rules);

        $item = Item::create($request->all());

        return redirect()->route('items.index')
            ->with('success', 'Item creado satisfacctoriamente.');
    }

    //------------------------------------------------------------------------

    public function show($id)
    {
        $item = Item::find($id);

        return view('item.show', compact('item'));
    }

    //------------------------------------------------------------------------

    public function edit($id)
    {
        $item = Item::find($id);
        $criteria = Criterion::pluck('name', 'id');
        return view('item.edit', compact('item', 'criteria'));
    }

    //------------------------------------------------------------------------

    public function update(Request $request, Item $item)
    {
        request()->validate(Item::$rules);

        $item->update($request->all());

        return redirect()->route('items.index')
            ->with('success', 'Item actualizado satisfactoriamente');
    }

    //------------------------------------------------------------------------

    public function destroy($id)
    {
        $item = Item::find($id)->delete();

        return redirect()->route('items.index')
            ->with('success', 'Item deleted successfully');
    }
}
