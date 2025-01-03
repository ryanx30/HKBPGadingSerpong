<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/church.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-7xl font-bold">MINISTRIES</h1>
            <p class="text-white text-2xl mt-4">
                Sebuah kesempatan bagi jemaat HKBP untuk mengambil bagian di dalam pelayanan yang tersedia sesuai dengan bakat dan talenta yang dimilikinya.
            </p>
        </div>
    </section>

    {{-- Ministries Section --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">OUR MINISTRIES</h2>
            
            {{-- Ministries Tabs --}}
            <div class="flex justify-center space-x-4 mb-8">
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Education
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    General Affair
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Interpreter
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Communication
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Creative Production
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Crowd Management
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Multimedia
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Prayer
                </button>
                <button class="py-2 px-6 border border-gray-800 text-gray-800 font-semibold rounded-full hover:bg-gray-800 hover:text-white">
                    Sound
                </button>
            </div>

            {{-- Ministry Carousel --}}
            <x-ministry-carousel :images="$images" />

            {{-- Description Section --}}
            <p class="mt-3 text-center text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae ex ac justo posuere varius. Quisque tristique posuere faucibus. Mauris dapibus pellentesque urna ut ultricies.
            </p>
        </div>
    </section>

    {{-- Quote Section --}}
    <section class="py-16 bg-gray-100 relative" style="background-image: url('/images/church2.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <blockquote class="italic text-xl text-white leading-relaxed">
                “Karena itu, pergilah dan muridkanlah semua bangsa, baptiskanlah mereka dalam nama Bapa, dan Anak, dan Roh Kudus; ajarkanlah mereka untuk menaati semua yang Aku perintahkan kepadamu; dan lihat, Aku selalu bersamamu, bahkan sampai kepada akhir zaman.” – Matius 28:19-20
            </blockquote>
        </div>
    </section>

</x-app-layout>