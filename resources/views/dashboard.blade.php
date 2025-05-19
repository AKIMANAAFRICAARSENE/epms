@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Welcome to SmartPark Employee Payroll Management System</h1>
    <p class="mb-8 text-gray-700">Digitally manage employees, departments, and payroll with ease. Use the menu above to navigate or use the quick links below.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <a href="/employees" class="bg-blue-100 hover:bg-blue-200 p-6 rounded shadow text-center">
            <div class="text-4xl mb-2 text-blue-600"><i class="fas fa-users"></i></div>
            <div class="text-xl font-semibold">Employees</div>
            <div class="text-gray-600">Manage employee records</div>
        </a>
        <a href="/departments" class="bg-green-100 hover:bg-green-200 p-6 rounded shadow text-center">
            <div class="text-4xl mb-2 text-green-600"><i class="fas fa-building"></i></div>
            <div class="text-xl font-semibold">Departments</div>
            <div class="text-gray-600">Manage departments</div>
        </a>
        <a href="/salaries" class="bg-yellow-100 hover:bg-yellow-200 p-6 rounded shadow text-center">
            <div class="text-4xl mb-2 text-yellow-600"><i class="fas fa-money-bill"></i></div>
            <div class="text-xl font-semibold">Salaries</div>
            <div class="text-gray-600">Manage payroll records</div>
        </a>
    </div>
    <div class="bg-white p-6 rounded shadow text-center">
        <h2 class="text-2xl font-bold mb-2">Monthly Payroll Report</h2>
        <p class="mb-4 text-gray-700">Generate and view monthly payroll reports for all employees.</p>
        <a href="/reports/payroll" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">View Payroll Report</a>
    </div>
</div>
@endsection
