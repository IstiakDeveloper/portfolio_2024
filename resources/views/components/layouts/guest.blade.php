<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IsDEV | Portfolio</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <style>

  </style>
  <body class="bg-gray-200 transition-all ease-linear">
    <header class="transparent-header relative z-50">
        <div class="container bg-transparent md:mt-10 p-4 md:flex md:justify-between sm:items-center mx-auto">
            <!-- Logo -->
            <div class="md:flex-shrink-0 md:ml-auto sm:text-center sm:mx-auto sm:m-4 z-50">
                <a href="{{route('home')}}">
                    <img src="{{asset('1.png')}}" alt="Logo" class="h-12 mx-auto mb-8 md:mb-0">
                </a>
            </div>

            <!-- Menu -->
            <nav class="md:flex-grow md:text-center md:mx-6 z-50">
                <ul class="flex justify-center space-x-20">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} text-gray-400 text-lg font-bold hover:text-blue-500 transition duration-300">Home</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }} text-gray-400 text-lg font-bold hover:text-blue-500 transition duration-300">Contact</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }} text-gray-400 text-lg font-bold hover:text-blue-500 transition duration-300">About</a></li>
                </ul>
            </nav>

            <!-- CTA Button -->
            <div class="md:flex-shrink-0 md:mr-auto text-center md:mt-0 mt-8 z-50" > <!-- Centering CTA button on mobile -->
                <a target="_blank" href="https://wa.me/8801717893432" class="rounded-full bg-blue-500 text-white px-6 py-3 text-lg font-medium hover:bg-blue-600 transition duration-300">
                    <span>Lets Talk</span>
                    <i class="fas fa-comment-alt ml-2"></i>
                </a>
            </div>
        </div>


    </header>

    {{ $slot }}
    <section class="gradient-section">
        <div class="gradient-bg">
            <div class="interactive"></div>
            <div class="interactive2"></div>
            <div class="interactive3"></div>
            <div class="interactive4"></div>
        </div>
    </section>
    <div class="cursor"></div>

    <footer class="bg-gradient-to-b from-blue-500 to-gray-500 py-8">
        <div class="container mx-auto text-center">
            <!-- Social Links -->
            <div class="mb-4">
                <a href="#" class="text-white hover:text-gray-200 mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 mx-2">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 mx-2">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <!-- Footer Links -->
            <div class="mb-4">
                <a href="#" class="text-white hover:text-gray-200 mx-4">Contact Us</a>
                <a href="#" class="text-white hover:text-gray-200 mx-4">Privacy Policy</a>
            </div>
            <!-- Copyright -->
            <p class="text-white text-sm">&copy; 2024 All rights reserved</p>
        </div>
    </footer>





    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/animations.js')}}"></script>
    <script src="{{asset('js/courser.js')}}"></script>


</body>
</html>
