<section class="py-12 bg-gradient-to-l from-black via-[#1A1A1A] to-[#373737] text-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="social-media" "flex justify-center space-x-8">
            @foreach ($links as $link)
                <a href="{{ $link['url'] }}" target="_blank" class="text-white hover:text-gray-300">
                    <img src="{{ $link['icon'] }}" alt="{{ $link['name'] }}" class="w-10 h-10 mx-auto">
                    <p class="mt-2">{{ $link['name'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>