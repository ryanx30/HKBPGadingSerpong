@extends('layouts.admin-layout')

@section('title', 'Edit Event')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Edit Event</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-bold text-gray-700">Event Image</label>
            <input type="file" name="image" class="w-full border border-gray-300 rounded-lg p-2">
            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-32 mt-2">
        </div>
        <div>
            <label class="block font-bold text-gray-700">Title</label>
            <input type="text" name="title" value="{{ $event->title }}" class="w-full border border-gray-300 rounded-lg p-2" required>
        </div>
        <div>
            <label class="block font-bold text-gray-700">Description</label>
            <textarea name="description" class="w-full border border-gray-300 rounded-lg p-2" required>{{ $event->description }}</textarea>
        </div>
        <div>
            <label class="block font-bold text-gray-700">Date</label>
            <input type="date" name="date" value="{{ $event->date }}" class="w-full border border-gray-300 rounded-lg p-2" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600">
            Save Changes
        </button>
    </form>
@endsection