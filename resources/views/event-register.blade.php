<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ $event->image }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-7xl font-serif">{{ $event->title }}</h1>
            <p class="text-white text-lg mt-4">{{ $event->description }}</p>
        </div>
    </section>

    {{-- Event Details --}}
    <section class="py-16 bg-gray-100">
    @foreach ($events as $event)
        <div class="max-w-5xl mx-auto px-4 bg-white shadow-lg rounded-lg">
            <div class="p-6">
                <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-full rounded-lg mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $event->title }}</h2>
                <p class="text-gray-600 mb-6">{{ $event->description }}</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold">Date</h3>
                        <p>{{ $event->date }}</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold">Location</h3>
                        <p>{{ $event->location }}</p>
                    </div>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg mb-6">
                    <h3 class="text-lg font-semibold">Attendees</h3>
                    <p>{{ $event->attendees }} orang</p>
                </div>

                <div class="text-center">
                    <button class="py-3 px-6 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Join Event
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
