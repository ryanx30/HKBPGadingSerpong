<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/church.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-7xl font-serif">Our Services</h1>
        </div>
    </section>

    {{-- Welcome Section --}}
    <section class="py-16 text-white" style="background-color: #2E1010;">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-left">Welcome to HKBP Gading Serpong</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-8">
                {{--bagian service-card nanti harus di hubungin sama database--}}
                <x-service-card 
                    title="Jadwal Ibadah Minggu Dewasa " 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
                <x-service-card 
                    title="Jadwal Ibadah Minggu Remaja" 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
                <x-service-card 
                    title="Jadwal Ibadah Minggu Anak-Anak" 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
                <x-service-card 
                    title="Jadwal Ibadah Minggu Dewasa " 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
                <x-service-card 
                    title="Jadwal Ibadah Minggu Remaja" 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
                <x-service-card 
                    title="Jadwal Ibadah Minggu Anak-Anak" 
                    time="Sunday 9.00 AM | 1.00 PM | 4.30 PM" 
                    location="HKBP GADING SERPONG LT 2" 
                />
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <x-map 
    title="HKBP Gading Serpong" 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1011617943095!2d106.61978411033068!3d-6.2503993937119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc71468103db%3A0x5ac6aff02bbd5249!2sHKBP%20GADING%20SERPONG!5e0!3m2!1sid!2sid!4v1732734171073!5m2!1sid!2sid" 
    />
</x-app-layout>