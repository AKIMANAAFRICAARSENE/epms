@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Salaries</h1>
        <a href="{{ route('salaries.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Salary</a>
    </div>
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Employee</th>
                    <th class="px-4 py-2">Gross Salary</th>
                    <th class="px-4 py-2">Total Deduction</th>
                    <th class="px-4 py-2">Net Salary</th>
                    <th class="px-4 py-2">Month</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($salaries as $salary)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $salary->employee->firstName }} {{ $salary->employee->lastName }}</td>
                    <td class="px-4 py-2">{{ $salary->grossSalary }}</td>
                    <td class="px-4 py-2">{{ $salary->totalDeduction }}</td>
                    <td class="px-4 py-2">{{ $salary->netSalary }}</td>
                    <td class="px-4 py-2">{{ $salary->month }}</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <a href="{{ route('salaries.edit', $salary) }}" class="bg-yellow-400 text-white px-2 py-1 rounded hover:bg-yellow-500">Edit</a>
                        <form action="{{ route('salaries.destroy', $salary) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
