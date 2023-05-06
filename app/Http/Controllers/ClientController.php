<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate();

        return view('client.index', compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        // $validatedData = $request->validate([
        //     'first_name' => 'required',
        //     'surname' => 'required',
        //     'address' => 'required',
        //     'identification_document' => 'required',
        //     'sex' => 'required',
        //     'birthdate' => 'required',
        //     'country' => 'required',
        //     'home' => 'required',
        //     'mobile_number' => 'required',
        //     'email' => 'required|email|unique:clients,email',
        // ]);
        $input = $request->all();
        // dump('var');
        // dd($input);
        $client = Client::create($input);

        return redirect()->route('client.index')
            ->with('success', 'Client created successfully.');
    } catch (\Illuminate\Database\QueryException $ex) {
        if ($ex->errorInfo[1] == 1062) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'El correo electrónico ya existe']);
        } else {
            throw $ex;
        }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        return redirect()->route('client.index')
            ->with('success', 'Client updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('client.index')
            ->with('success', 'Client deleted successfully');
    }
}
