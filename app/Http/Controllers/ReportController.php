<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class ReportController extends Controller
{
    public function payroll(Request $request)
    {
        $month = $request->input('month');
        $query = Salary::with(['employee.department']);
        if ($month) {
            $query->where('month', $month);
        }
        $salaries = $query->get();
        return view('reports.payroll', compact('salaries', 'month'));
    }
}
