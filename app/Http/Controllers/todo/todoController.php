<?php

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function todoApp() {
        return view('todo.app');
    }

    public function store(Request $request) {
        $dataTask = $request->validate([
            'task'=>'required|min:3',

        ]);
    }
}
