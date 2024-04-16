@if ($paginator->hasPages())
    <ul class="flex paginations">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><span class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span class="pagination-link rounded-full bg-gray-200 active:bg-blue-500 text-black mr-2 px-4 py-2">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">&raquo;</a></li>
        @else
            <li><span class="pagination-link rounded-full bg-gray-200 text-black mr-2 px-4 py-2">&raquo;</span></li>
        @endif
    </ul>
@endif
