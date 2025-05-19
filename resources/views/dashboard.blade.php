@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-black">Welcome to SmartPark Employee Payroll Management System</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
        <div class="bg-orange-100 border-l-4 border-orange-500 p-6 rounded-lg shadow text-center">
            <div class="text-4xl mb-2 text-orange-600"><i class="fas fa-users"></i></div>
            <div class="text-xl font-semibold text-black">Employees</div>
            <div class="text-2xl font-bold text-black">{{ $totalEmployees }}</div>
        </div>
        <div class="bg-orange-100 border-l-4 border-orange-500 p-6 rounded-lg shadow text-center">
            <div class="text-4xl mb-2 text-orange-600"><i class="fas fa-building"></i></div>
            <div class="text-xl font-semibold text-black">Departments</div>
            <div class="text-2xl font-bold text-black">{{ $totalDepartments }}</div>
        </div>
        <div class="bg-orange-100 border-l-4 border-orange-500 p-6 rounded-lg shadow text-center">
            <div class="text-4xl mb-2 text-orange-600"><i class="fas fa-money-bill"></i></div>
            <div class="text-xl font-semibold text-black">Salaries</div>
            <div class="text-2xl font-bold text-black">{{ $totalSalaries }}</div>
        </div>
        <div class="bg-orange-100 border-l-4 border-orange-500 p-6 rounded-lg shadow text-center">
            <div class="text-4xl mb-2 text-orange-600"><i class="fas fa-coins"></i></div>
            <div class="text-xl font-semibold text-black">Total Net Salary</div>
            <div class="text-2xl font-bold text-black">{{ number_format($totalNetSalary) }} RWF</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <a href="/employees" class="bg-white border border-black hover:bg-orange-50 p-6 rounded-lg shadow text-center transition">
            <div class="text-4xl mb-2 text-black"><i class="fas fa-users"></i></div>
            <div class="text-xl font-semibold text-black">Employees</div>
            <div class="text-gray-600">Manage employee records</div>
        </a>
        <a href="/departments" class="bg-white border border-black hover:bg-orange-50 p-6 rounded-lg shadow text-center transition">
            <div class="text-4xl mb-2 text-black"><i class="fas fa-building"></i></div>
            <div class="text-xl font-semibold text-black">Departments</div>
            <div class="text-gray-600">Manage departments</div>
        </a>
        <a href="/salaries" class="bg-white border border-black hover:bg-orange-50 p-6 rounded-lg shadow text-center transition">
            <div class="text-4xl mb-2 text-black"><i class="fas fa-money-bill"></i></div>
            <div class="text-xl font-semibold text-black">Salaries</div>
            <div class="text-gray-600">Manage payroll records</div>
        </a>
    </div>
    <div class="bg-white p-6 rounded-lg shadow text-center border border-black">
        <h2 class="text-2xl font-bold mb-2 text-black">Monthly Payroll Report</h2>
        <p class="mb-4 text-gray-700">Generate and view monthly payroll reports for all employees.</p>
        <a href="/reports/payroll" class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-black">View Payroll Report</a>
    </div>
</div>
@endsection
