<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/church.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-7xl font-serif">Our Events</h1>
            <p class="text-white text-lg mt-4">Mari Bersama Bersukacita Dalam Tuhan</p>
        </div>
    </section>

    {{-- Events Section --}}
    <section id="upcoming" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Upcoming Events</h2>

            <div class="grid grid-cols-1 gap-8">
                @foreach ($events as $event)
                <x-event-card 
                image="{{ asset('storage/'. $event->image) }}" 
                title="{{ $event->title }}" 
                description="{{ $event->description }}" 
                date="{{ $event->date }}" 
                location="{{ $event->location }}" 
                attendees="{{ $event->attendees }}"
                eventId="{{ $event->id }}"
            />
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center mt-8">
                {{ $events->links() }}
            </div>
        </div>
    </section>
</x-app-layout>