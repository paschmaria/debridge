    @if ($paginator->hasPages())
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="disabled btn bg-brand btn-sm"><span>&laquo;</span></button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="user_ids"><button class="btn bg-brand btn-sm">&laquo;</button></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element)) <span class="p-t-10"> . . . </span>
                    {{-- <li class="disabled btn bg-white btn-sm"><span>{{ $element }}</span></li> --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active btn bg-default c-brand btn-sm"><span>{{ $page }}</span></li>
                        @else
                            <a href="{{ $url }}" class="user_ids"><button class="btn bg-white btn-sm">{{ $page }}</button></a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="user_ids"><button class="btn bg-brand btn-sm">&raquo;</button></a>
            @else
                <button class="disabled btn bg-brand btn-sm"><span>&raquo;</span></button>
            @endif
        </ul>
    @endif