@extends('layouts.admin-layout')

@section('title', 'Add Event')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Add Event</h1>

    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="block font-bold text-gray-700">Event Image</label>
            <input type="file" name="image" class="w-full border border-gray-300 rounded-lg p-2" required>
        </div>
        <div>
            <label class="block font-bold text-gray-700">Title</label>
            <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2" required>
        </div>
        <div>
            <label class="block font-bold text-gray-700">Description</label>
            <textarea name="description" class="w-full border border-gray-300 rounded-lg p-2" required></textarea>
        </div>
        <div>
            <label class="block font-bold text-gray-700">Date</label>
            <input type="date" name="date" class="w-full border border-gray-300 rounded-lg p-2" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">
            Add Event
        </button>
    </form>
@endsection