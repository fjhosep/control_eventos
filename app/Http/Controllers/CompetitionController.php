<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

/**
 * Class CompetitionController
 * @package App\Http\Controllers
 */
class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::paginate();

        return view('competition.index', compact('competitions'))
            ->with('i', (request()->input('page', 1) - 1) * $competitions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competition = new Competition();
        return view('competition.create', compact('competition'));
    }


    public function store(Request $request)
    {
        request()->validate(Competition::$rules);

        $competition = Competition::create($request->all());

        return redirect()->route('competitions.index')
            ->with('success', 'Competition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competition = Competition::find($id);

        return view('competition.show', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = Competition::find($id);

        return view('competition.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Competition $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        request()->validate(Competition::$rules);

        $competition->update($request->all());

        return redirect()->route('competitions.index')
            ->with('success', 'Competition updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $competition = Competition::find($id)->delete();

        return redirect()->route('competitions.index')
            ->with('success', 'Competition deleted successfully');
    }
}
