@if ($paginator->hasPages())
<ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        @else
            {{-- <li class="page-item"><a class="page-link" href="" rel="prev">&laquo;</a></li> --}}
            <li class=""><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>

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
                    <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                    <li class=""><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>


        @else
        <li class="waves-effect disabled"><a href="#"><i class="material-icons">chevron_right</i></a></li>
        @endif
    </ul>
@endif
