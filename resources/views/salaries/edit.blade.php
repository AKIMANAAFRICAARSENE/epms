@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Salary</h1>
    <form action="{{ route('salaries.update', $salary) }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Employee</label>
            <select name="employee_id" class="w-full border-gray-300 rounded px-3 py-2" required>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" @if($salary->employee_id == $employee->id) selected @endif>{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gross Salary</label>
            <input type="number" step="0.01" name="grossSalary" value="{{ $salary->grossSalary }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Total Deduction</label>
            <input type="number" step="0.01" name="totalDeduction" value="{{ $salary->totalDeduction }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Net Salary</label>
            <input type="number" step="0.01" name="netSalary" value="{{ $salary->netSalary }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-6">
            <label class="block mb-1 font-semibold">Month</label>
            <input type="text" name="month" value="{{ $salary->month }}" class="w-full border-gray-300 rounded px-3 py-2" placeholder="YYYY-MM" required>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('salaries.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded mr-2 hover:bg-gray-500">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
