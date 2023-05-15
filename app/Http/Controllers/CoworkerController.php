<?php

namespace App\Http\Controllers;

use App\Models\Coworker;
use App\Models\User;
use App\Models\Contrato;


use Illuminate\Http\Request;

/**
 * Class CoworkerController
 * @package App\Http\Controllers
 */
class CoworkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coworkers = Coworker::paginate();

        return view('coworker.index', compact('coworkers'))
            ->with('i', (request()->input('page', 1) - 1) * $coworkers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::pluck('name', 'id'); // Obtener los nombres de los usuarios como un array asociativo [id => nombre]
        $contratos = Contrato::pluck('nombre', 'id'); // Obtener los nombres de los contratos como un array asociativo [id => nombre]
        $coworker = new Coworker();
        return view('coworker.create', compact('coworker','users','contratos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coworker::$rules);

        $coworker = Coworker::create($request->all());

        return redirect()->route('coworker.index')
            ->with('success', 'Coworker created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coworker = Coworker::find($id);

        return view('coworker.show', compact('coworker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coworker = Coworker::find($id);

        return view('coworker.edit', compact('coworker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coworker $coworker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coworker $coworker)
    {
        request()->validate(Coworker::$rules);

        $coworker->update($request->all());

        return redirect()->route('coworker.index')
            ->with('success', 'Coworker updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coworker = Coworker::find($id)->delete();

        return redirect()->route('coworker.index')
            ->with('success', 'Coworker deleted successfully');
    }
}
