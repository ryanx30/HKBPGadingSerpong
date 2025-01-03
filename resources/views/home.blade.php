<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/church.jpg'); background-position: top;">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-7xl font-serif">Find Peace</h1>
        </div>
    </section>

    {{-- Welcome Section --}}
    <section class="py-16 flex items-center" style="background-color: #2E1010;">
        <div class="max-w-7xl mx-auto px-4 flex flex-col lg:flex-row items-center lg:items-start justify-between">
            <!-- Teks di Kiri -->
            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <h2 class="text-3xl font-bold text-left text-white">Welcome to HKBP Gading Serpong</h2>
                <p class="mt-4 text-left text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.
                </p>
            </div>

            <!-- Grid di Kanan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:w-1/2">
                <x-home-card title="Ibadah Minggu Dewasa" time="Sunday | 10:00 AM" />
                <x-home-card title="Ibadah Minggu Remaja" time="Sunday | 07:00 AM" />
                <x-home-card title="Ibadah Minggu Anak-anak" time="Sunday | 08:30 AM" />
                <x-home-card title="Ibadah Khusus" time="Friday | 06:00 PM" />
            </div>
        </div>
    </section>
    
    {{-- About & Events Section --}}
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black">More Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <x-about-event-card
                    title="About Events"
                    description="Discover upcoming events and activities at HKBP Gading Serpong."
                    url="#" />
                <x-about-event-card
                    title="Upcoming Event"
                    description="Join us for our special Sunday Service this weekend."
                    url="#" />
            </div>
        </div>
    </section>

    {{-- Maps Section --}}
    <x-map
        title="HKBP Gading Serpong"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1011617943095!2d106.61978411033068!3d-6.2503993937119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc71468103db%3A0x5ac6aff02bbd5249!2sHKBP%20GADING%20SERPONG!5e0!3m2!1sid!2sid!4v1732734171073!5m2!1sid!2sid" />
</x-app-layout>
