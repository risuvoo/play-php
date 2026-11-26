<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
     public function index(){
        return view('tasks.index');
    }
    public function create()
    {
        return "This is create function";
    }
    public function store()
    {
        return "This is store function";
    }
    public function show(string|int $id)
    {
        return $id;
    }
    public function edit(string|int $id)
    {
        return $id;
    }
    public function update(string|int $id)
    {
        return $id;
    }
    public function destroy(string|int $id)
    {
        return $id;
    }
}
