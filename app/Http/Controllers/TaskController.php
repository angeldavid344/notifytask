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

            
         $user = User::find($request->session()->get('id')); // Obtén el usuario que deseas filtrar
         $id_user = $user->id;

         $input = $request-> all();
          $tasks = Task::select('*')
             ->join('users','users.id', '=', 'tasks.id_user')
             ->where('id_user' ,'=', $id_user) //TODO: 1 dinamic
             ->get();
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
         $task = new Task();
         

        return view('task.create', compact('task'));


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

        $task = Task::create($request->all());

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
