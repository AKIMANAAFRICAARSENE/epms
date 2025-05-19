@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Monthly Payroll Report</h1>
    <div class="flex justify-between items-center mb-6">
        <form method="GET" class="flex items-center space-x-4">
            <label for="month" class="font-semibold">Month:</label>
            <input type="text" name="month" id="month" value="{{ $month }}" placeholder="YYYY-MM" class="border-gray-300 rounded px-3 py-2" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Filter</button>
        </form>
        <button onclick="window.print()" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 print:hidden">Print Report</button>
    </div>
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">Position</th>
                    <th class="px-4 py-2">Department</th>
                    <th class="px-4 py-2">Net Salary</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($salaries as $salary)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $salary->employee->firstName }}</td>
                    <td class="px-4 py-2">{{ $salary->employee->lastName }}</td>
                    <td class="px-4 py-2">{{ $salary->employee->position }}</td>
                    <td class="px-4 py-2">{{ $salary->employee->department->departmentName ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $salary->netSalary }}</td>
                </tr>
                @php $total += $salary->netSalary; @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-bold bg-gray-100">
                    <td colspan="5" class="px-4 py-2 text-right">Total Net Salary:</td>
                    <td class="px-4 py-2">{{ $total }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
