@if ($paginator->hasPages())
<ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        @else
            {{-- <li class="page-item"><a class="page-link" href="" rel="prev">&laquo;</a></li> --}}
            <li class="disabled"><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>

            @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="disabled"><a href="#!">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                    <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}">&raquo;</a></li>

        @else
        <li class="waves-effect disabled"><a href="#!">&raquo;</a></li>
        @endif
    </ul>
@endif
