@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Department Details</h1>
        <div class="mb-2"><span class="font-semibold">Department Code:</span> {{ $department->departmentCode }}</div>
        <div class="mb-2"><span class="font-semibold">Department Name:</span> {{ $department->departmentName }}</div>
        <div class="mb-2"><span class="font-semibold">Gross Salary:</span> {{ $department->grossSalary }}</div>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('departments.edit', $department) }}" class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500 mr-2">Edit</a>
            <a href="{{ route('departments.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Back</a>
        </div>
    </div>
</div>
@endsection
