<footer class="s-footer">
    <div class="row footer-top flex flex-wrap justify-between items-start">
        <!-- Kiri: Logo sampai Get Direction -->
        <div class="footer-left w-full lg:w-1/3 mb-6 lg:mb-0">
            <div class="footer-logo mb-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/HKBP.png') }}" alt="Homepage" class="w-36 h-36">
                </a>
            </div>
            <p>Laborum ad explicabo. Molestiae voluptates est.
                </br>Quisquam labore tenetur.</p>
            <h4 class="text-lg font-semibold mt-6">Our Location</h4>
            <p>Ruko Tematik, Blok J No.22, Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810</p>
            <a href="https://maps.app.goo.gl/5Q6X3yYj7u7i3fgQA" target="_blank" class="btn btn--footer text-white bg-blue-500 hover:bg-blue-700 rounded py-2 px-4 mt-4">Get Direction</a>
        </div>

        <!-- Tengah: Contact Us sampai Follow Us -->
        <div class="footer-middle w-full lg:w-1/3 mb-6 lg:mb-0">
            <h4 class="text-lg font-bold">Contact Us</h4>
            <p class="mt-2">Phone: +62 123 456 789</p>
            <p>Email: info@hkbp-gs.org</p>

            <h4 class="text-lg font-bold mt-6">Follow Us</h4>
            <div class="flex space-x-4 mt-2">
                <a href="#" class="hover:text-gray-400">Facebook</a>
                <a href="#" class="hover:text-gray-400">Instagram</a>
                <a href="#" class="hover:text-gray-400">Twitter</a>
            </div>
        </div>

        <!-- Kanan: Quick Links -->
        <div class="footer-right w-full lg:w-1/3 mb-6 lg:mb-0">
            <h4 class="text-lg font-bold">Quick Links</h4>
            <ul class="footer-list space-y-2">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-500">Home</a></li>
                @if(Route::has('about'))
                <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-500">About</a></li>
                @endif
                <li><a href="{{ route('service') }}" class="text-gray-600 hover:text-blue-500">Service</a></li>
                <li><a href="{{ route('donation') }}" class="text-gray-600 hover:text-blue-500">Donation</a></li>
                <li><a href="{{ route('events') }}" class="text-gray-600 hover:text-blue-500">Upcoming Events</a></li>
                <li><a href="{{ route('ministries') }}" class="text-gray-600 hover:text-blue-500">Ministries</a></li>
                <li><a href="{{ route('media') }}" class="text-gray-600 hover:text-blue-500">Media</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="row footer-bottom text-white py-4 flex items-center justify-between">
        <div class="ss-copyright text-center w-full md:w-auto">
            <span class="text-sm">&copy; {{ date('Y') }} HKBP Gading Serpong. All rights reserved.</span>
        </div>
        <div class="ss-go-top">
            <a class="smoothscroll text-gray-600 hover:text-gray-800" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                    <path d="M12 0l8 9h-6v15h-4v-15h-6z" />
                </svg>
            </a>
        </div>
    </div>

</footer>