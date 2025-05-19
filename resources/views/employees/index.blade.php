@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Employees</h1>
        <a href="{{ route('employees.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-black">Add Employee</a>
    </div>
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg border border-black">
        <table class="min-w-full">
            <thead class="bg-orange-200">
                <tr>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Employee No</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">First Name</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Last Name</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Position</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Department</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Telephone</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Hired Date</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr class="border-b border-black hover:bg-orange-50">
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->employeeNumber }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->firstName }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->lastName }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->position }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->department->departmentName ?? '-' }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->telephone }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $employee->hired_date }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap flex justify-center space-x-2">
                        <a href="{{ route('employees.edit', $employee) }}" class="bg-orange-500 text-white px-2 py-1 rounded hover:bg-black">Edit</a>
                        <a href="{{ route('employees.show', $employee) }}" class="bg-black text-white px-2 py-1 rounded hover:bg-orange-500">Show</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-black text-white px-2 py-1 rounded hover:bg-orange-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
