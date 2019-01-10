<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'company' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        Income::create($request->all());

        return redirect('/');
    }
}
