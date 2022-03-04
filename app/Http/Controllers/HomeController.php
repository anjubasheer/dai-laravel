<?php

namespace App\Http\Controllers;

use App\Events\TaskSubmitted;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create()
    {

    }
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'description' => 'required',
        ]);
        $tasks = new Task;
        $tasks->title = $request->title;
        $tasks->description = $request->description;

        $title = request()-> title;
        $description = request()-> description;


        event(new TaskSubmitted($title, $description));



        if($tasks->save()){
            return redirect()->route('home');
           }
    }
}
