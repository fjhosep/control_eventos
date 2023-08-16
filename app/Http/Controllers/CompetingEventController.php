<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\CompetingEvent;
use Illuminate\Support\Facades\DB;


class CompetingEventController extends Controller
{

    //--------------------------- Listamos los Eventos -------------------
    public function index()
    {
        $events = Event::paginate();

        return view('competing-event.index', compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * $events->perPage());
    }


    //-----------------------------------------------------------------------------
    public function create()
    {
        $competingEvent = new CompetingEvent();
        return view('competing-event.create', compact('competingEvent'));
    }

    //-----------------------------------------------------------------------------

    public function store(Request $request)
    {
        foreach ($request->competition as $key => $name) {

            $insert = [

                'competition_id' => $request->competition[$key],
                'event_id' => $request->event,
            ];

            DB::table('competing_events')->insert($insert);
        }

        return redirect()
            ->back()
            ->with('success', 'Competencia asignadas satisfactoriamente.');
    }

    //-----------------------------------------------------------------------------

    public function show($id)
    {
        $competingEvent = CompetingEvent::find($id);

        return view('competing-event.show', compact('competingEvent'));
    }

    //-----------------------------------------------------------------------------

    public function edit($id)
    {

        $registro = Competition::whereDoesntHave('competing_events')
            ->first();


        if (!$registro == null) {

            $competitions = Competition::whereDoesntHave('competing_events')
                ->paginate(10);

            $event_id = $id;

            return view('competing-event.edit', compact('competitions', 'event_id'))
                ->with('i', (request()->input('page', 1) - 1) * $competitions->perPage());
        } else {

            return redirect()->route('competing-event.index')
                ->with('success', 'No hay competencias para asignar');
        }
    }

    //-----------------------------------------------------------------------------
    public function update(Request $request, CompetingEvent $competingEvent)
    {
        request()->validate(CompetingEvent::$rules);

        $competingEvent->update($request->all());

        return redirect()->route('competing-events.index')
            ->with('success', 'CompetingEvent updated successfully');
    }

    public function destroy($id)
    {
        $competingEvent = CompetingEvent::find($id)->delete();

        return redirect()->route('competing-events.index')
            ->with('success', 'CompetingEvent deleted successfully');
    }
}
