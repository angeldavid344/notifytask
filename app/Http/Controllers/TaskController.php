<?php

namespace App\Http\Controllers;

use App\Http\Controllers\loginController;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\MailWelcome;
use Carbon\Carbon;
use App\Jobs\Logger;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->session()->get('id'));

            
        $id_user = $request->session()->get('id');

        $tasks = Task::where('id_user', $id_user)->get();

        //  $user = User::find($request->session()->get('id')); // Obtén el usuario que deseas filtrar
        //  $id_user = $user->id;

        //  $input = $request-> all();
        //   $tasks = Task::select('*')
        //      ->join('users','users.id', '=', 'tasks.id_user')
        //      ->where('id_user' ,'=', $id_user) //TODO: 1 dinamic
        //      ->get();
        // dump( ($tasks));
        //  $user = User::all();
        //  dump(($user));
        
        
         //  dd(gettype ($user->email));
        //    Mail::to($user->email)
        //   ->send(new MailWelcome($task));
        
        //    dd('envio');
        // dd("Email is sent successfully.");
        $tasks = Task::paginate();

        return view('task.index', compact('tasks'))
            ->with('i', (request()->input('page', 1) - 1) * $tasks->perPage());

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Establecer la zona horaria de Argentina
        date_default_timezone_set('America/Argentina/Buenos_Aires');

    // Generar la fecha actual en la zona horaria de Argentina
        $currentDateTime = date('Y-m-d\TH:i:s');

            // Obtener las fechas disponibles entre las horas especificadas
    $horasDisponibles = [];
    $fechaInicio = new Carbon('8:00');
    $fechaFin = new Carbon('18:00');
    while ($fechaInicio <= $fechaFin) {
        $horaDisponible = $fechaInicio->format('Y-m-d\TH:i:s');
        $horasDisponibles[$horaDisponible] = $horaDisponible;
        $fechaInicio->addHours(2);
    }

    // Obtener las fechas ocupadas entre las horas especificadas
    $fechasOcupadas = Task::select('date_ini', 'date_end')
        ->whereBetween('date_ini', [$fechaInicio, $fechaFin])
        ->orWhereBetween('date_end', [$fechaInicio, $fechaFin])
        ->get()
        ->pluck('date_ini', 'date_end')
        ->toArray();

    // Eliminar las fechas ocupadas de las fechas disponibles
    foreach ($fechasOcupadas as $dateIni => $dateEnd) {
        while ($dateIni <= $dateEnd) {
            unset($horasDisponibles[$dateIni]);
            $dateIni = (new Carbon($dateIni))->addHours(2)->format('Y-m-d\TH:i:s');
        }
    }

         $task = new Task();
         

        return view('task.create', compact('task','horasDisponibles','currentDateTime'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  request()->validate(Task::$rules);
        $user_id = auth()->id(); // Obtiene el ID del usuario autenticado
        $task = new Task($request->all());
        $task->id_user = $user_id;
        $task->save();
        // $task = Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
         return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        request()->validate(Task::$rules);

        $task->update($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $task = Task::find($id)->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }

    
    
}
