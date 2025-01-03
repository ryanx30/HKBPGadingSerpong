@props(['images'])

<div id="ministryCarousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-lg h-48 md:h-96">
        @foreach ($images as $image)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset($image->image_path) }}" class="block w-full h-full object-cover" alt="Ministry Image">
            </div>
        @endforeach
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </span>
    </button>
</div>