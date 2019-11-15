@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous">
            <a href="{{ $paginator->previousPageUrl() }}" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">قبل</a>
            </li>
        @else
            <li class="paginate_button page-item ">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">قبل</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active">
                            <a href="{{ $url }}" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="paginate_button page-item ">
                            <a href="{{ $url }}" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">{{ $page }}</a>

                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="paginate_button page-item next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">بعد</a>
            </li>
        @else
            <li class="paginate_button page-item next disabled">
                <a href="{{ $paginator->nextPageUrl() }}" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">بعد</a>

            </li>
        @endif
    </ul>
@endif
