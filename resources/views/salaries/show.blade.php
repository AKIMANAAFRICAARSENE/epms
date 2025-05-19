@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <div class="bg-white p-8 rounded-lg shadow-lg border border-black">
        <h1 class="text-2xl font-bold mb-4 text-black">Salary Details</h1>
        <div class="mb-2 text-black"><span class="font-semibold">Employee:</span> {{ $salary->employee->firstName }} {{ $salary->employee->lastName }}</div>
        <div class="mb-2 text-black"><span class="font-semibold">Gross Salary:</span> {{ $salary->grossSalary }} RWF</div>
        <div class="mb-2 text-black"><span class="font-semibold">Total Deduction:</span> {{ $salary->totalDeduction }} RWF</div>
        <div class="mb-2 text-black"><span class="font-semibold">Net Salary:</span> {{ $salary->netSalary }} RWF</div>
        <div class="mb-2 text-black"><span class="font-semibold">Month:</span> {{ $salary->month }}</div>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('salaries.edit', $salary) }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-black mr-2">Edit</a>
            <a href="{{ route('salaries.index') }}" class="bg-black text-white px-4 py-2 rounded hover:bg-orange-500">Back</a>
        </div>
    </div>
</div>
@endsection
