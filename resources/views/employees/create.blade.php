@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Employee Number</label>
            <input type="text" name="employeeNumber" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">First Name</label>
            <input type="text" name="firstName" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Last Name</label>
            <input type="text" name="lastName" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Position</label>
            <input type="text" name="position" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Address</label>
            <input type="text" name="address" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Telephone</label>
            <input type="text" name="telephone" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Gender</label>
            <select name="gender" class="w-full border-gray-300 rounded px-3 py-2" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Hired Date</label>
            <input type="date" name="hired_date" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>
        <div class="mb-6">
            <label class="block mb-1 font-semibold">Department</label>
            <select name="department_id" class="w-full border-gray-300 rounded px-3 py-2" required>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->departmentName }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('employees.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded mr-2 hover:bg-gray-500">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </div>
    </form>
</div>
@endsection
