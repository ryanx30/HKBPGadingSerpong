<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-b from-[#262220] via-[#42392D] to-[#65553E] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 flex flex-col items-center text-center">
            <div class="mb-8">
                <img src="/images/media-hero-illustration.svg" alt="Media Illustration" class="w-52 mx-auto">
            </div>
            <h1 class="text-4xl font-bold">SUBSCRIBE TO OUR YOUTUBE CHANNEL</h1>
            <a href="https://www.youtube.com/channel/UCXXXXXXXXXX" target="_blank" class="mt-4 inline-flex items-center bg-white text-black py-2 px-6 rounded-full shadow-md hover:bg-gray-300">
                <img src="/images/youtube-logo.svg" alt="YouTube" class="w-6 h-6 mr-2">
                HKBP Gading Serpong
            </a>
        </div>
    </section>

    {{-- Video Section --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($videos as $video)
                <x-video-card
                    url="{{ $video->url }}"
                    title="{{ $video->title }}"
                    description="{{ $video->description }}" />
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>