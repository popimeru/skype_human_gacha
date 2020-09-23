@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">前へ</span>
                    <!--@lang('pagination.previous')-->
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">前へ</a>
                    <!--@lang('pagination.previous')-->
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">次へ</a>
                    <!--@lang('pagination.next')-->
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">次へ</span>
                    <!--@lang('pagination.next')-->
                </li>
            @endif
        </ul>
    </nav>
@endif
