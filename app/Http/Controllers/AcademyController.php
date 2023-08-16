<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AcademyController extends Controller
{

    //-----------------------------------------------------------------------------
    public function index()
    {
        // DB::enableQueryLog();
        $academies = Academy::orderBy('id', 'ASC')->paginate();
        // dd(DB::getQueryLog());

        return view('academy.index', compact('academies'))
            ->with('i', (request()->input('page', 1) - 1) * $academies->perPage());
    }

    //-----------------------------------------------------------------------------

    public function create()
    {
        $academy = new Academy();
        return view('academy.create', compact('academy'));
    }

    //-----------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Academy::$rules);

        $academy = Academy::create($request->all());

        return redirect()->route('academies.index')
            ->with('success', 'El registro ha sido creado.');
    }

    //-----------------------------------------------------------------------------

    public function show($id)
    {
        $academy = Academy::find($id);

        return view('academy.show', compact('academy'));
    }

    //-----------------------------------------------------------------------------

    public function edit($id)
    {
        $academy = Academy::find($id);

        return view('academy.edit', compact('academy'));
    }

    //-----------------------------------------------------------------------------

    public function update(Request $request, Academy $academy)
    {
        request()->validate(Academy::$rules);

        $academy->update($request->all());

        return redirect()->route('academies.index')
            ->with('success', 'El registro ha sido modificado');
    }

    //-----------------------------------------------------------------------------

    public function destroy($id)
    {
        $academy = Academy::find($id)->delete();

        return redirect()->route('academies.index')
            ->with('success', 'El registro hasido eliminado');
    }
}
