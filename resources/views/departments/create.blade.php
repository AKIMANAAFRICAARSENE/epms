@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Add Department</h1>
    <form action="{{ route('departments.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Department Code</label>
            <input type="text" name="departmentCode" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Department Name</label>
            <input type="text" name="departmentName" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-6">
            <label class="block mb-1 font-semibold">Gross Salary</label>
            <input type="number" step="0.01" name="grossSalary" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('departments.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded mr-2 hover:bg-gray-500">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </div>
    </form>
</div>
@endsection
