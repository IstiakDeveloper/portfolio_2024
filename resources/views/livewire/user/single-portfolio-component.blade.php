<div>
    <div class="container mx-auto py-8 relative z-50">
        <h1 class="text-3xl font-bold text-center mb-8">Portfolio</h1>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <!-- Image Gallery -->
            <div class="portfolio-img bg-gray-300 mb-4" style="background-image: url('{{ asset('storage/' . $portfolio->thumbnail_image) }}')"></div>
            <!-- Title and Category -->
            <div class="text-center p-4">
                <h2 class="text-2xl font-semibold mb-2">{{$portfolio['title']}}</h2>
                <p class="text-gray-600">Category: <span class="font-semibold text-blue-600">{{$portfolio->category['name']}}</span></p>
            </div>

            <!-- Link and Description -->
            <div class="text-center p-4 border-t border-gray-200">
                <p class="text-gray-700 mb-2"><span class="font-semibold">Link:</span> <a href="{{$portfolio['portfolio_link']}}" target="_blank"  class="text-blue-600">Project Link</a></p>
                <p class="text-gray-700"><span class="font-semibold"></span>{{$portfolio['description']}}</p>
            </div>

            <!-- Gallery Section -->
            <div class="p-4">
                <h3 class="text-2xl font-semibold mb-4 text-center">Gallery</h3>
                <div class="flex flex-wrap justify-center" id="gallery">
                    @foreach(json_decode($portfolio->portfolio_images) as $imagePath)
                        <div class="gallery-img bg-gray-300 mr-4 mb-4" style="background-image: url('{{ asset('storage/'.$imagePath) }}')" onclick="openModal('{{ asset('storage/'.$imagePath) }}')"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="fixed top-0 left-0 w-full max-h-screen bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="modal-content bg-white p-8">
            <img id="modal-image" src="" alt="" class="w-full">
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="closeModal()">Close</button>
        </div>
    </div>



</div>
