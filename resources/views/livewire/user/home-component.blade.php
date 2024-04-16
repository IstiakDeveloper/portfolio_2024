<div class="overflow-hidden">
    <div>
        <section class="transparent-hero">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <!-- Right side -->
                    <div class="right-side w-full md:w-1/2 md:mt-24 md:order-2">
                        <div class="relative z-50 flex md:justify-end sm:justify-center sm:mb-4">
                            <div>
                                <img class="" src="{{asset('hero.png')}}" alt="Image" class="rounded-lg">
                                <!-- Overlaying div -->
                                <div class="absolute inset-0 flex items-center md:justify-center">
                                    <div class="w-48 h-20 flex items-center justify-center bg-white rounded-lg">
                                        <div>
                                            <p class="text-4xl text-blue-500">7+</p>
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
                        <h4 class="text-black text-2xl mb-4 text-center md:text-left">Hey, I'm</h4>
                        <h1 class="text-black font-bold text-6xl mb-4 text-center md:text-left">Istiak Hossain</h1>
                        <p class="text-gray-800 text-xl mb-6 text-center md:text-left">I'm a professional website Developer with more than 7+ year of experience</p>
                        <div class="flex justify-center md:justify-start"> <!-- Center the button on small screens, align left on larger screens -->
                            <a target="_blank" href="https://wa.me/8801717893432" class="hire-me text-white bg-blue-500 border-radius rounded-full py-4 px-16 hover:bg-blue-600">Hire Me</a>
                        </div>
                    </div>

                        <div class="client-project flex mt-12 justify-center items-center">
                            <div class="clients-img mr-8">
                                <img src="{{asset('clients.png')}}" alt="Clients Image">
                                <p class="text-xl text-center font-medium mt-4">
                                    <span>Clients all over the</span><span class="text-blue-500"> World</span>
                                </p>
                            </div>
                            <div class="hidden justify-between items-center projects-number bg-white rounded-lg z-50 h-24 md:flex">
                                <div>
                                    <p class="text-6xl text-blue-500 mx-4">150+</p>
                                </div>
                                <div class="mr-4">
                                    <p class="text-2xl text-right font-medium">Projects</p>
                                    <span class="mt-2">Done</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="experience md:w-5/6 mt-16 md:order-3">
                        <p class="title text-xl font-medium mb-4">
                            I have experience in the following areas &#x2192
                        </p>
                        <div class="all-item flex flex-wrap">
                            @foreach ($experiences as $experience)
                                <div class="item mr-6 mb-8 flex items-center">
                                    <img src="{{'storage/'.$experience['image']}}" alt="" width="30px" height="30px">
                                    <span class="ml-2 font-semibold text-sm">{{$experience['name']}}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- Portfolio Section --}}
        <section class="my-8" id="portfolio">
            <h1 class="main-title text-center underline text-4xl mb-8">
                Projects
            </h1>

            <div class="container mx-auto">
                <div class="tab-proj">
                    <div class=" border-gray-200 bg-gray-100">
                        <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                            @foreach ($categories as $category)
                                <li class="me-2">
                                    <a wire:click="selectCategory({{ $category->id }})" class="inline-flex items-center justify-center cursor-pointer p-4 border-b-2 border-transparent rounded-t-lg {{ $selectedCategoryId == $category->id ? 'text-blue-600 border-blue-600' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }} group">
                                        <i class="{{ $category->icon_class }} w-4 h-4 me-2 {{ $selectedCategoryId == $category->id ? 'text-blue-600 dark:text-blue-500' : 'text-gray-400 dark:text-gray-500' }}"></i>{{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                    @foreach($portfolios as $portfolio)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <a href="{{ route('single-portfolio', ['id' => $portfolio->id]) }}" class="block">
                                <div class="relative">
                                    <!-- Thumbnail image -->
                                    <img class="w-full h-72 object-cover" src="{{ asset('storage/'. $portfolio->thumbnail_image) }}" alt="{{ $portfolio->title }}">
                                    <!-- Hover overlay -->
                                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end">
                                        <div class="flex justify-between items-center px-4 py-2 w-full">
                                            <div>
                                                <!-- Title -->
                                                <h3 class="text-white text-lg font-semibold">{{ $portfolio->title }}</h3>
                                                <!-- Description -->
                                                <p class="text-white">{{ Str::limit($portfolio->description, 50, '...') }}</p>
                                            </div>
                                            <div class="w-1/2">
                                                <!-- View button -->
                                                <button class="bg-white text-blue-500 px-3 py-1 rounded-full z-50">
                                                    <span class="text-black font-semibold">View &#8599;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                    <div class="bg-gray-200 mt-8 pagination px-8">
                        {{ $portfolios->links() }}
                    </div>

            </div>
        </section>

        <section class="py-16 my-16">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <!-- Left side image -->
                <div class="w-full md:w-1/2 ">
                    <img src="{{asset('talk2.jpg')}}" width="580" height="300px" alt="Let's Talk" class=" md:h-96 rounded-lg shadow-md">
                </div>
                <!-- Right side content -->
                <div class="md:pl-24 w-full md:w-1/2 px-6 py-4 md:px-12 md:py-0 ">
                    <h2 class="text-3xl font-bold text-center mb-4">Let's Talk</h2>
                    <p class="text-gray-700 text-center mb-6">Have a project in mind or want to know more about my services? Feel free to reach out.</p>
                    <div class="flex justify-center mb-6">
                        <a target="_blank" href="https://wa.me/8801717893432" class="bg-white border hover:bg-gray-300  border-gray-400 text-black font-medium py-2 px-4 rounded-full mr-4">Book a Free Session</a>
                        <a target="_blank" href="https://wa.me/8801717893432" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-full">Hire Me</a>
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
                    @foreach ($testimonials as $testimonial)
                        <li class="card mt-10 bg-white">
                            <div class="testimonial-card w-full px-8">
                                <div class="flex items-center justify-center">
                                    <img src="{{'storage/'.$testimonial['client_image']}}" alt="Client 1" class="w-20 h-20 rounded-full border " style="margin-top: -68px;">
                                </div>
                                <div class="flex justify-between mt-4">
                                    <p class="text-left font-semibold">{{$testimonial['client_name']}}</p>
                                    <p class="text-right text-gray-500">{{$testimonial['date']}}</p>
                                </div>
                                <div class="flex items-center text-center mt-4 overflow-y-auto h-32">
                                    <p class="text-sm">{{$testimonial['description']}}</p>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <p class="text-blue-500">Excellent</p>
                                </div>
                                <div class="flex justify-center mt-2">
                                    <img src="{{asset('star.png')}}" alt="Star" class="w-24 h-auto">
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </section>
    </div>

</div>
