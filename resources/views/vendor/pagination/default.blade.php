
{{-- <nav class="zm-pagination ptb-40 text-center">
    <ul class="page-numbers"> 
        <li><a class="prev page-numbers" href="#">Previous</a></li>
        <li><span class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="#">2</a></li>
        <li><a class="page-numbers" href="#">3</a></li>
        <li><a class="page-numbers" href="#">4</a></li>
        <li><a class="page-numbers" href="#">5</a></li>
        <li><span class="page-numbers zm-pgi-dots">...</span></li>
        <li><a class="page-numbers" href="#">15</a></li>
        <li><a class="next page-numbers" href="#">Next</a></li>
    </ul>
</nav> --}}

@if ($paginator->hasPages())
<nav class="zm-pagination ptb-40 text-center">
    <ul class="page-numbers">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li ><span class="page-numbers">&laquo; GERİ</span></li>
        @else
            <li ><a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; GERİ</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span class="page-numbers">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span class="page-numbers current">{{ $page }}</span></li>
                    @else
                        <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li ><a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo; İLƏRİ</a></li>
        @else
            <li ><span class="page-numbers">&raquo; İLƏRİ</span> </li>
        @endif
    </ul>
</nav> 
@endif
