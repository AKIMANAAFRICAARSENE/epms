@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Add Salary</h1>
    <form action="{{ route('salaries.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto border border-black">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Employee</label>
            <select name="employee_id" class="w-full border-gray-300 rounded px-3 py-2" required>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gross Salary <span class='text-gray-500'>(RWF)</span></label>
            <div class="flex items-center">
                <input type="number" step="0.01" name="grossSalary" class="w-full border-gray-300 rounded px-3 py-2" required>
                <span class="ml-2">RWF</span>
            </div>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Total Deduction <span class='text-gray-500'>(RWF)</span></label>
            <div class="flex items-center">
                <input type="number" step="0.01" name="totalDeduction" class="w-full border-gray-300 rounded px-3 py-2" required>
                <span class="ml-2">RWF</span>
            </div>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Net Salary <span class='text-gray-500'>(RWF)</span></label>
            <div class="flex items-center">
                <input type="number" step="0.01" name="netSalary" id="netSalary" class="w-full border-gray-300 rounded px-3 py-2" required readonly>
                <span class="ml-2">RWF</span>
            </div>
        </div>
        <div class="mb-6">
            <label class="block mb-1 font-semibold">Month</label>
            <input type="text" name="month" class="w-full border-gray-300 rounded px-3 py-2" placeholder="YYYY-MM" required>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('salaries.index') }}" class="bg-black text-white px-4 py-2 rounded mr-2 hover:bg-orange-500">Cancel</a>
            <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-black">Save</button>
        </div>
    </form>
    <script>
        const grossInput = document.querySelector('input[name="grossSalary"]');
        const deductionInput = document.querySelector('input[name="totalDeduction"]');
        const netInput = document.getElementById('netSalary');
        function updateNetSalary() {
            const gross = parseFloat(grossInput.value) || 0;
            const deduction = parseFloat(deductionInput.value) || 0;
            netInput.value = (gross - deduction).toFixed(2);
        }
        grossInput.addEventListener('input', updateNetSalary);
        deductionInput.addEventListener('input', updateNetSalary);
    </script>
</div>
@endsection
