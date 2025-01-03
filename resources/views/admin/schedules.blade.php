@extends('layouts.admin-layout')

@section('title', 'Schedule Management')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Schedule Management</h1>

    {{-- Add Schedule Button --}}
    <div class="mb-6">
        <a href="{{ route('admin.schedules.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600">
            + Add Schedule
        </a>
    </div>

    {{-- Schedule List --}}
    <div class="space-y-4">
        @foreach ($schedules as $schedule)
            <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold">{{ $schedule->title }}</h3>
                    <p class="text-sm text-gray-600">{{ $schedule->date }} | {{ $schedule->start_time }} - {{ $schedule->end_time }} | {{ $schedule->location }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.schedules.edit', $schedule->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.schedules.destroy', $schedule->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $schedules->links() }}
    </div>
@endsection