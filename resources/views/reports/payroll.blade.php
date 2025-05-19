@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Monthly Payroll Report</h1>
    <div class="flex justify-between items-center mb-6">
        <form method="GET" class="flex items-center space-x-4">
            <label for="month" class="font-semibold">Month:</label>
            <input type="text" name="month" id="month" value="{{ $month }}" placeholder="YYYY-MM" class="border-black rounded px-3 py-2" required>
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-black">Filter</button>
        </form>
        <button onclick="window.print()" class="bg-black text-white px-4 py-2 rounded hover:bg-orange-500 print:hidden">Print Report</button>
    </div>
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg border border-black">
        <table class="min-w-full">
            <thead class="bg-orange-200">
                <tr>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">First Name</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Last Name</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Position</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Department</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Net Salary</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($salaries as $salary)
                <tr class="border-b border-black hover:bg-orange-50">
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $salary->employee->firstName }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $salary->employee->lastName }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $salary->employee->position }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $salary->employee->department->departmentName ?? '-' }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $salary->netSalary }}</td>
                </tr>
                @php $total += $salary->netSalary; @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-bold bg-orange-100">
                    <td colspan="4" class="px-6 py-3 text-right align-middle text-black">Total Net Salary:</td>
                    <td class="px-6 py-3 text-center align-middle text-black">{{ $total }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
