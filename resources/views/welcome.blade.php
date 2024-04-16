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
  </head>
  <style>

  </style>
  <body class="bg-gray-50 transition-all ease-linear">
    <header class="transparent-header">
        <div class="container bg-transparent md:mt-10 p-4 md:flex md:justify-between sm:items-center mx-auto">
            <!-- Logo -->
            <div class="md:flex-shrink-0 md:ml-auto sm:text-center sm:mx-auto sm:my-4 z-50">
                <a href="#">
                    <img src="{{asset('1.png')}}" alt="Logo" class="h-12 mx-auto md:mx-0">
                </a>
            </div>

            <!-- Menu -->
            <nav class="md:flex-grow md:text-center md:mx-6 z-50">
                <ul class="flex justify-center space-x-20">
                    <li><a href="#" class="text-gray-900 text-lg font-bold hover:text-blue-500 transition duration-300">Home</a></li>
                    <li><a href="#" class="text-gray-400 text-lg font-bold hover:text-blue-500 transition duration-300">Contact</a></li>
                    <li><a href="#" class="text-gray-400 text-lg font-bold hover:text-blue-500 transition duration-300">About</a></li>
                </ul>
            </nav>

            <!-- CTA Button -->
            <div class="md:flex-shrink-0 md:mr-auto text-center mt-4 md:mt-0 z-50" > <!-- Centering CTA button on mobile -->
                <button class="rounded-full bg-blue-500 text-white px-6 py-3 text-lg font-medium hover:bg-blue-600 transition duration-300">
                    <span>Lets Talk</span>
                    <i class="fas fa-comment-alt ml-2"></i>
                </button>
            </div>
        </div>


    </header>

    <section class="transparent-hero">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <!-- Right side -->
                <div class="right-side w-full md:w-1/2 md:mt-24 md:order-2">
                    <div class="relative z-50 flex md:justify-end sm:justify-center">
                        <div>
                            <img src="{{asset('hero.png')}}" alt="Image" class="rounded-lg">
                            <!-- Overlaying div -->
                            <div class="absolute inset-0 flex items-center md:justify-center">
                                <div class="w-48 h-20 flex items-center justify-center bg-white rounded-lg">
                                    <div>
                                        <p class="text-4xl text-blue-500">10+</p>
                                    </div>
                                    <div class="ml-2">
                                        <span class="mt-2">Year</span>
                                        <p class="text-xl text-right font-medium">Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left side -->
                <div class="left-side w-full md:w-1/2 md:mt-16 sm:mt-4 md:order-1 z-50">
                    <div class="content md:text-start sm:text-center md:w-3/4">
                        <h4 class="text-black text-2xl mb-4">Hey, I'm</h4>
                        <h1 class="text-black font-bold text-6xl mb-4">Istiak Hossain</h1>
                        <p class="text-gray-800 text-xl mb-6">I'm a professional website Developer with more than 10+ year of experience</p>
                        <button class="hire-me text-white bg-blue-500 border-radius rounded-full py-4 px-16 hover:bg-blue-600">Hire Me</button>
                    </div>
                    <div class="client-project flex mt-12">
                        <div class="clients-img mr-8">
                            <img src="https://placehold.co/400x100" alt="">
                            <p class="text-xl font-medium mt-4">
                                <span>Clients all over the</span><span class="text-blue-500"> World</span>
                            </p>
                        </div>
                        <div class="flex justify-between items-center projects-number bg-white rounded-lg z-50 h-24">
                            <div>
                                <p class="text-6xl text-blue-500 mx-4">471+</p>
                            </div>
                            <div class="mr-4">
                                <p class="text-2xl text-right font-medium">Projects</p>
                                <span class="mt-2">Done</span>
                            </div>
                        </div>
                    </div>
                    <div class="experience mt-16">
                        <p class="title text-xl font-medium mb-2">
                            I have experience in the following areas &#x2192
                        </p>
                        <div class="all-item flex flex-wrap">
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>
                            <div class="item mr-4 mb-4 flex items-center">
                                <img src="https://placehold.co/50x50" alt="">
                                <span class="ml-2 font-semibold text-xl">PHP</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="gradient-section">
        <div class="gradient-bg">
            <div class="interactive"></div>
            <div class="interactive2"></div>
            <div class="interactive3"></div>
            <div class="interactive4"></div>
        </div>
    </section>


    {{-- Portfolio Section --}}
    <section class="my-8" id="portfolio">
        <h1 class="main-title text-center underline text-4xl mb-8">
            Projects
        </h1>

        <div class="container mx-auto">
            <div class="tab-proj">
                <div class=" border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                </svg>Profile
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                                <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                                </svg>Dashboard
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>
                                </svg>Settings
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                </svg>Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                    <!-- Loop through your data to generate multiple cards -->
                    <!-- Start of card -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End of card -->


                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Thumbnail image -->
                            <img id="thumbnail" class="w-full h-72 object-cover" src="https://placehold.co/400x1000" alt="Thumbnail">
                            <!-- Hover overlay -->
                            <a href="#" id="body-proj" class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 flex flex-col justify-end">
                                <div class="flex justify-between items-center px-4 py-2 w-full">
                                    <div>
                                        <!-- Title -->
                                        <h3 class="text-white text-lg font-semibold">Project Title</h3>
                                        <!-- Description -->
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="w-1/2">
                                        <!-- View button -->
                                        <button class="bg-white text-blue-500 px-3 py-1 rounded-full">
                                            <span class="text-black font-semibold">View &#8599;</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
                <div class="flex justify-center mt-8">
                    <div class="flex justify-center mt-8">
                        <ul class="flex paginations">
                            <li>
                                <a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">
                                    &laquo; <!-- Previous arrow -->
                                </a>
                            </li>
                            <li><a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">1</a></li>
                            <li><a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">2</a></li>
                            <li><a href="#" class="active pagination-link rounded-full bg-gray-200 active:bg-blue-500 text-black mr-2 px-4 py-2">3</a></li>
                            <li><a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">4</a></li>
                            <li><span class="rounded-full bg-gray-200 text-black mr-2 px-4 py-2">...</span></li>
                            <li><a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">20</a></li>
                            <li>
                                <a href="#" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">
                                    &raquo; <!-- Next arrow -->
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>



            </div>
    </section>

    <section class="py-16 my-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Left side image -->
            <div class="w-full md:w-1/2">
                <img src="https://placehold.co/500x300" alt="Let's Talk" class="w-full h-auto rounded-lg shadow-md">
            </div>
            <!-- Right side content -->
            <div class="w-full md:w-1/2 px-6 py-4 md:px-12 md:py-0">
                <h2 class="text-3xl font-bold text-center mb-4">Let's Talk</h2>
                <p class="text-gray-700 text-center mb-6">Have a project in mind or want to know more about my services? Feel free to reach out.</p>
                <div class="flex justify-center mb-6">
                    <button class="bg-white border hover:bg-gray-300  border-gray-400 text-black font-medium py-2 px-4 rounded-full mr-4">Book a Free Session</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Hire Me</button>
                </div>
            </div>
        </div>
    </section>


    <section class="my-16">
        <h1 class="main-title text-center underline text-4xl mb-8">
            Client Testimonials
        </h1>
        <div class="wrapper container mx-auto mb-8">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card mt-10 bg-white">
                    <div class="testimonial-card px-8">
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/300x300" alt="Client 1" class="w-20 h-20 rounded-full" style="margin-top: -68px;">
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-left">Client Name</p>
                            <p class="text-right text-gray-500">Date</p>
                        </div>
                        <p class="text-center mt-4">Client review description goes here. Client review description goes here. Client review description goes here. Client review description goes here. Client review description goes here. Client review description goes here.</p>
                        <div class="flex justify-center mt-4">
                            <p class="text-green-500">Excellent</p>
                        </div>
                        <div class="flex justify-center mt-2">
                            <img src="{{asset('star.png')}}" alt="Star" class="w-24 h-auto">
                        </div>
                    </div>

                </li>

            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </section>

    <footer class="bg-gradient-to-b from-black to-purple-900 py-8">
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



<script>const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const carouselChildrens = [...carousel.children];

    let isDragging = false,
        isAutoPlay = true,
        startX,
        startScrollLeft,
        timeoutId;

    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens
        .slice(-cardPerView)
        .reverse()
        .forEach((card) => {
            carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
        });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach((card) => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
        });
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        // Records the initial cursor and scroll position of the carousel
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    };

    const dragging = (e) => {
        if (!isDragging) return; // if isDragging is false return from here
        // Updates the scroll position of the carousel based on the cursor movement
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    };

    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    };

    const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if (carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if (
            Math.ceil(carousel.scrollLeft) ===
            carousel.scrollWidth - carousel.offsetWidth
        ) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
        clearTimeout(timeoutId);
        if (!wrapper.matches(":hover")) autoPlay();
    };

    const autoPlay = () => {
        if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
    };
    autoPlay();

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);
    </script>
</body>
</html>
