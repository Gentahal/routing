<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {
        return view('task.index');
    }

    public function create() 
    {
        return view('task.create');

    }

    public function store(Request $request) 
    {
        $input = $request->all();
        Task::create($input);
        dd($input);
    }
}