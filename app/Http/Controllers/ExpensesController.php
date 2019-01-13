<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'type_id' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        Expenses::create($request->all());

        return redirect('/');
    }
}