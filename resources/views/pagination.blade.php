{{--<div class="paginatoin-area text-center">--}}
{{--    <ul class="pagination-box">--}}
{{--        <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>--}}
{{--        <li class="active"><a href="#">1</a></li>--}}
{{--        --}}
{{--        <li><a href="#">3</a></li>--}}
{{--        <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>--}}
{{--    </ul>--}}
{{--</div>--}}

@if ($paginator->hasPages())
    <div class="paginatoin-area text-center">
        <ul class="pagination-box">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())

                <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>
            @else
                <li><a class="previous" href="{{ $paginator->previousPageUrl() }}"><i class="pe-7s-angle-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
{{--                @if (is_string($element))--}}
{{--                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>--}}
{{--                @endif--}}

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{$url}}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="next" href="{{ $paginator->nextPageUrl() }}"><i class="pe-7s-angle-right"></i></a></li>
            @else
                <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>
            @endif
        </ul>
    </div>
@endif
