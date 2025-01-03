<x-app-layout>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/church.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-7xl font-serif font-semibold">Give Your Donation Here</h1>
            <p class="text-white text-lg mt-4 max-w-2xl">Your contribution helps us continue our ministry and support the community. Thank you for your generosity!</p>
        </div>
    </section>

    {{-- Donation Form Section --}}
    <section class="py-16 bg-gray-100">
        <div class="max-w-3xl mx-auto px-6 md:px-8 bg-white shadow-lg rounded-lg">
            {{-- Header --}}
            <div class="p-6 text-center border-b border-gray-300">
                <h2 class="text-2xl font-bold text-gray-800">HKBP GADING SERPONG</h2>
                <p class="mt-2 text-gray-600">Thank you for your continued generosity to the ministry of our church!</p>
            </div>

            {{-- Donation Type --}}
            <div class="donation-type flex justify-center space-x-4 mt-6">
                <button class="py-2 px-6 bg-blue-600 text-white font-semibold rounded-md focus:outline-none hover:bg-blue-700 transition-all duration-300">
                    One Time
                </button>
                <button class="py-2 px-6 bg-gray-200 text-gray-800 font-semibold rounded-md focus:outline-none hover:bg-gray-300 transition-all duration-300">
                    Monthly
                </button>
            </div>

            {{-- Amount Options --}}
            <div class="donation grid grid-cols-2 md:grid-cols-4 gap-4 mt-8 px-6">
                <button class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md text-gray-800 font-semibold hover:bg-blue-100 hover:border-blue-500 transition-all duration-300">Rp. 10.000</button>
                <button class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md text-gray-800 font-semibold hover:bg-blue-100 hover:border-blue-500 transition-all duration-300">Rp. 20.000</button>
                <button class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md text-gray-800 font-semibold hover:bg-blue-100 hover:border-blue-500 transition-all duration-300">Rp. 50.000</button>
                <button class="py-3 px-4 bg-gray-100 border border-gray-300 rounded-md text-gray-800 font-semibold hover:bg-blue-100 hover:border-blue-500 transition-all duration-300">Rp. 100.000</button>
            </div>

            {{-- Custom Amount Input --}}
            <div class="mt-8 px-6">
                <label for="custom-amount" class="block text-sm font-medium text-gray-700 mb-2">Enter any amount</label>
                <input 
                    type="number" 
                    min="0"
                    id="custom-amount"
                    placeholder="e.g., 50000" 
                    class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                />
            </div>

            {{-- Payment Method --}}
            <div class="mt-6 px-6">
                <label for="payment-method" class="block text-sm font-medium text-gray-700 mb-2">Choose your payment method</label>
                <select 
                    id="payment-method"
                    class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select a method</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="ewallet">E-Wallet</option>
                </select>
            </div>

            {{-- Submit Button --}}
            <div class="mt-8 px-6 pb-8">
                <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-md focus:outline-none hover:bg-blue-700 transition-all duration-300">
                    Next
                </button>
            </div>
        </div>
    </section>
</x-app-layout>