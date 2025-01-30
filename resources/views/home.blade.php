@extends('layouts.main')

@section('content')
<div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://live.staticflickr.com/3830/9954129634_c65cb0f814_b.jpg" alt="Background Image" class="object-cover object-center w-full h-full" />
    <div class="absolute inset-0 bg-black opacity-50"></div>
  </div>
  
  <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
    <h1 class="text-5xl font-bold leading-tight mb-4">Sewa Peralatan Outdoor Berkualitas</h1>
    <p class="text-lg text-gray-300 mb-8">Temukan segala kebutuhan outdoor Anda di sini. Mulai dari tenda, sleeping bag, hingga peralatan hiking, kami siap melengkapi petualangan Anda!</p>
    <a href="#" class="bg-red-700 text-white hover:bg-red-400 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
  </div>
</div>
@endsection
