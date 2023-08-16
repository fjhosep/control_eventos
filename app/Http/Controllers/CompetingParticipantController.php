<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Participant;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompetingParticipant;

//--------------------------------- Listamos las Categorías ----------------------------------

class CompetingParticipantController extends Controller
{

    public function index()
    {
        // $competingParticipants = CompetingParticipant::paginate();

        $categories = Category::has('competing_participants')->get();

        return view('competing-participant.index', compact('categories'));
    }

    //----------------------------------------------------------------------------------------

    public function edit($id)
    {
        $registro = Participant::whereDoesntHave('competing_participants')
            ->first();

        if (!$registro == null) {

            $participants = Participant::whereDoesntHave('competing_participants')
                ->paginate();

            $category_id = $id;

            return view('competing-participant.edit', compact('participants', 'category_id'))
                ->with('i', (request()->input('page', 1) - 1) * $participants->perPage());
        } else {

            return redirect()->route('competing-participant.index')
                ->with('success', 'No hay participantes para asignar');
        }
    }

    //----------------------------------------------------------------------------------------

    public function store(Request $request)
    {

        foreach ($request->participant_id as $key => $id) {

            $insert = [
                'participant_id' => $request->participant_id[$key],
                'user' => $request->user,
                'category_id' => $request->category_id,
            ];

            $user = CompetingParticipant::where('competing_participants.participant_id', '=', $request->participant_id[$key])
                ->where('competing_participants.user', '=', $request->user)
                ->first();
            if ($user === null) {
                DB::table('competing_participants')->insert($insert);
            } else {
                return redirect()
                    ->back()
                    ->with('success', 'Hay participantes seleccionados registrados en esta categoría. Consulte quienes estan registrados...');
            }
        }

        return redirect()
            ->back()
            ->with('success', 'Participantes añadido a la categoría satisfactoriamente.');
    }

    //----------------------------------------------------------------------------------------

    public function show($id)
    {
        $category = Category::find($id);

        return view('competing-participant.show', compact('category'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CompetingParticipant $competingParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompetingParticipant $competingParticipant)
    {
        request()->validate(CompetingParticipant::$rules);

        $competingParticipant->update($request->all());

        return redirect()->route('competing-participants.index')
            ->with('success', 'CompetingParticipant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $competingParticipant = CompetingParticipant::find($id)->delete();

        return redirect()->route('competing-participants.index')
            ->with('success', 'CompetingParticipant deleted successfully');
    }
}
