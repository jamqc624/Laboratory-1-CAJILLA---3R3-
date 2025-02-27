<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plant a Tree, Grow a Future</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Hero Section with UI/UX Enhancements -->
    <div class="relative w-full h-[80vh] flex flex-col items-center justify-center text-center bg-cover bg-center" 
         style="background-image: url('{{ asset('images/green-forest.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-white to-green-500 opacity-30 h-full"></div>
        
        <div class="relative z-10 max-w-2xl mx-auto text-black space-y-6 px-6">
            <h1 class="text-5xl font-extrabold drop-shadow-lg leading-tight">
                Plant a Tree, <span class="text-green-600">Grow a Future</span>
            </h1>
            <p class="text-lg leading-relaxed">
                Every seed you donate helps restore nature. Join us in making a greener world! 🌱
            </p>

            <!-- Buttons Aligned Horizontally -->
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('login') }}" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300">
                    Donate Now
                </a>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300">
                    Register
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white text-center">
        <h2 class="text-3xl font-bold text-green-700 mb-6">How Your Donation Helps</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-3">🌳 Reforestation Efforts</h3>
                <p class="text-gray-600">Your donation helps plant trees and restore forests worldwide.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-3">🌺 Wildflower Preservation</h3>
                <p class="text-gray-600">We protect and nurture endangered wildflower species.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-3">🌎 Cleaner Air & Greener Earth</h3>
                <p class="text-gray-600">Every tree contributes to a cleaner, healthier environment.</p>
            </div>
        </div>
    </div>

</body>
</html>
