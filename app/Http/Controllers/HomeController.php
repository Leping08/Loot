<?php

namespace App\Http\Controllers;

use App\ExpenseType;
use App\Income;
use App\Expenses;
use Illuminate\Http\Request;

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
        $incomes = Income::all();
        $expenses = Expenses::all();
        $expenseType = ExpenseType::all();
        return view('home', compact('incomes', 'expenses', 'expenseType'));
    }
}
