@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Employee Details</h1>
        <div class="mb-2"><span class="font-semibold">Employee Number:</span> {{ $employee->employeeNumber }}</div>
        <div class="mb-2"><span class="font-semibold">First Name:</span> {{ $employee->firstName }}</div>
        <div class="mb-2"><span class="font-semibold">Last Name:</span> {{ $employee->lastName }}</div>
        <div class="mb-2"><span class="font-semibold">Position:</span> {{ $employee->position }}</div>
        <div class="mb-2"><span class="font-semibold">Address:</span> {{ $employee->address }}</div>
        <div class="mb-2"><span class="font-semibold">Telephone:</span> {{ $employee->telephone }}</div>
        <div class="mb-2"><span class="font-semibold">Gender:</span> {{ ucfirst($employee->gender) }}</div>
        <div class="mb-2"><span class="font-semibold">Hired Date:</span> {{ $employee->hired_date }}</div>
        <div class="mb-2"><span class="font-semibold">Department:</span> {{ $employee->department->departmentName ?? '-' }}</div>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('employees.edit', $employee) }}" class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500 mr-2">Edit</a>
            <a href="{{ route('employees.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Back</a>
        </div>
    </div>
</div>
@endsection
