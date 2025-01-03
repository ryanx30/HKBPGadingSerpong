@props(['eventId', 'image', 'title', 'description', 'date', 'location', 'attendees'])

<a href="{{ route('event.show', $eventId) }}" class="block bg-white shadow-lg rounded-lg overflow-hidden md:flex hover:shadow-2xl transition">
    <img src="{{ $image }}" alt="Event Image" class="w-full md:w-1/3 h-48 object-cover">
    <div class="p-6 flex flex-col justify-between">
        <div>
            <h3 class="text-2xl font-bold text-gray-800">{{ $title }}</h3>
            <p class="mt-2 text-gray-600">{{ $description }}</p>
        </div>
        <div class="mt-4 flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex items-center text-gray-600">
                <span class="material-icons mr-2">event</span>
                <span>{{ $date }}</span>
            </div>
            <div class="flex items-center text-gray-600 mt-2 md:mt-0">
                <span class="material-icons mr-2">place</span>
                <span>{{ $location }}</span>
            </div>
            <div class="flex items-center text-gray-600 mt-2 md:mt-0">
                <span class="material-icons mr-2">people</span>
                <span>{{ $attendees }}</span>
            </div>
        </div>
    </div>
</a>