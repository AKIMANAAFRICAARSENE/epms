@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Departments</h1>
        <a href="{{ route('departments.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-black">Add Department</a>
    </div>
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg border border-black">
        <table class="min-w-full">
            <thead class="bg-orange-200">
                <tr>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Code</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Name</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Gross Salary</th>
                    <th class="px-6 py-3 text-center align-middle text-black border-b border-black">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                <tr class="border-b border-black hover:bg-orange-50">
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $department->departmentCode }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $department->departmentName }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap text-black">{{ $department->grossSalary }}</td>
                    <td class="px-6 py-3 text-center align-middle whitespace-nowrap flex justify-center space-x-2">
                        <a href="{{ route('departments.edit', $department) }}" class="bg-orange-500 text-white px-2 py-1 rounded hover:bg-black">Edit</a>
                        <a href="{{ route('departments.show', $department) }}" class="bg-black text-white px-2 py-1 rounded hover:bg-orange-500">Show</a>
                        <form action="{{ route('departments.destroy', $department) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
