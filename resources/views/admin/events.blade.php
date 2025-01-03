    @extends('layouts.admin-layout')

    @section('title', 'Event Management')

    @section('content')
        <h1 class="text-3xl font-bold mb-6">Event Management</h1>

        {{-- Add and Edit Buttons --}}
        <div class="flex justify-between items-center mb-8">
            <div class="flex space-x-4">
                <button onclick="window.location='{{ route('admin.events.create') }}'" 
                    class="flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg shadow hover:bg-gray-200">
                    <span class="material-icons mr-2"></span> Add Event
                </button>
            </div>
        </div>

        {{-- Events Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($events as $event)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">{{ $event->title }}</h3>
                    <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($event->date)->format('M d') }}</span>
                        <button onclick="window.location='{{ route('admin.events.edit', $event->id) }}'" 
                            class="flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg shadow hover:bg-gray-200">
                            <span class="material-icons mr-2"></span> Edit Event
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        {{-- Load More Button --}}
        <div class="mt-8 text-center">
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg shadow hover:bg-gray-200">
                Load More
            </button>
        </div>
    @endsection