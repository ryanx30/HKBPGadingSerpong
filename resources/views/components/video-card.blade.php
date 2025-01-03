<div class="border shadow-lg rounded-lg overflow-hidden">
    <div class="aspect-w-16 aspect-h-9">
        <iframe
            src="{{ $url }}"
            title="{{ $title }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="w-full h-full">
        </iframe>
    </div>
    <div class="p-4">
        <h3 class="text-lg font-bold">{{ $title }}</h3>
        <p class="text-sm text-gray-600">{{ $description }}</p>
    </div>
</div>