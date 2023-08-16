<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // --------------------------------------------------------------------------
    public function index()
    {
        $events = Event::paginate();

        return view('event.index', compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * $events->perPage());
    }

    // --------------------------------------------------------------------------
    public function create()
    {
        $event = new Event();
        return view('event.create', compact('event'));
    }

    // --------------------------------------------------------------------------

    public function store(Request $request)
    {
        request()->validate(Event::$rules);

        $event = Event::create($request->all());

        return redirect()->route('event.index')
            ->with('success', 'Evento creado con éxito.');
    }

    // --------------------------------------------------------------------------

    public function show($id)
    {
        $event = Event::find($id);

        return view('event.show', compact('event'));
    }

    // --------------------------------------------------------------------------

    public function edit($id)
    {
        $event = Event::find($id);

        return view('event.edit', compact('event'));
    }

    // --------------------------------------------------------------------------

    public function update(Request $request, Event $event)
    {
        request()->validate(Event::$rules);

        $event->update($request->all());

        return redirect()->route('event.index')
            ->with('success', 'Evento actualizado con éxito.');
    }

    // --------------------------------------------------------------------------

    public function destroy($id)
    {
        $event = Event::find($id)->delete();

        return redirect()->route('event.index')
            ->with('success', 'Datos del Evento Eliminado');
    }
}
