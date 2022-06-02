@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())


        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="arrow left">
            <img src="" alt="">
        </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <a href="{{ $paginator->nextPageUrl() }}" class="arrow right">
                <img src="" alt="">
            </a>
        @else

        @endif
    </nav>
@endif

