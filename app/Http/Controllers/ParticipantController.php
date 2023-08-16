<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ParticipantController
 * @package App\Http\Controllers
 */
class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // DB::enableQueryLog();
        $participants = Participant::paginate();
        // dd(DB::getQueryLog());

        return view('participant.index', compact('participants'))
            ->with('i', (request()->input('page', 1) - 1) * $participants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participant = new Participant();
        $academies = Academy::pluck('name', 'id');
        return view('participant.create', compact('participant', 'academies'));
    }

    //-------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Participant::$rules);

        $participant = Participant::create($request->all());

        return redirect()->route('participants.index')
            ->with('success', 'El registro ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = Participant::find($id);

        return view('participant.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = Participant::find($id);
        $academies = Academy::pluck('name', 'id');
        return view('participant.edit', compact('participant', 'academies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        request()->validate(Participant::$rules);

        $participant->update($request->all());

        return redirect()->route('participants.index')
            ->with('success', 'El regitro ha sido actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $participant = Participant::find($id)->delete();

        return redirect()->route('participants.index')
            ->with('success', 'El registro ha sido elminado');
    }
}
