@extends('layouts.admin-layout')

@section('title', 'User Management')

@section('content')
<h1 class="text-3xl font-bold mb-6">User Management</h1>

{{-- User Table --}}
<div class="bg-white rounded-lg shadow-md p-6">
    <table class="table-auto w-full border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-4 text-left font-semibold">Name</th>
                <th class="border border-gray-300 p-4 text-left font-semibold">Email Address</th>
                <th class="border border-gray-300 p-4 text-left font-semibold">Role</th>
                <th class="border border-gray-300 p-4 text-left font-semibold">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border border-gray-300 p-4">{{ $user->name }}</td>
                    <td class="border border-gray-300 p-4">{{ $user->email }}</td>
                    <td class="border border-gray-300 p-4">{{ $user->role }}</td>
                    <td class="border border-gray-300 p-4">
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $users->links() }}
    </div>
</div>
@endsection