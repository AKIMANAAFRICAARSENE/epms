@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Employees</h1>
        <a href="{{ route('employees.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Employee</a>
    </div>
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Employee No</th>
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">Position</th>
                    <th class="px-4 py-2">Department</th>
                    <th class="px-4 py-2">Telephone</th>
                    <th class="px-4 py-2">Hired Date</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $employee->employeeNumber }}</td>
                    <td class="px-4 py-2">{{ $employee->firstName }}</td>
                    <td class="px-4 py-2">{{ $employee->lastName }}</td>
                    <td class="px-4 py-2">{{ $employee->position }}</td>
                    <td class="px-4 py-2">{{ $employee->department->departmentName ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $employee->telephone }}</td>
                    <td class="px-4 py-2">{{ $employee->hired_date }}</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <a href="{{ route('employees.edit', $employee) }}" class="bg-yellow-400 text-white px-2 py-1 rounded hover:bg-yellow-500">Edit</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
