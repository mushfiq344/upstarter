{{--<div class="row">--}}
    {{--<div class="col-md-12 ">--}}
        {{--<ul class="col-lg-12 list-unstyled page-numbers shop_page_number">--}}
            {{--<li><span aria-current="page" class="page-numbers current">1</span></li>--}}
            {{--<li><a class="page-numbers" href="#">2</a></li>--}}
            {{--<li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}

<?php
// config
$link_limit = 2; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>
<div class="row">
    <div class="col-md-12 ">
        @if ($paginator->hasPages())
            <ul class="col-lg-12 list-unstyled page-numbers shop_page_number pagination pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="next page-numbers"><span><i class="ti-arrow-left"></i></span></li>
                @else
                    <li class="next page-numbers"><a class="page-numbers"  href="{{ $paginator->previousPageUrl() }}" rel="prev"><span><i class="ti-arrow-left"></i></span></a></li>
                @endif

                @if($paginator->currentPage() > 3)
                    <li class="hidden-xs"><a class="page-numbers" href="{{ $paginator->url(1) }}">1</a></li>
                @endif
                @if($paginator->currentPage() > 4)
                    <li><span class="page-numbers">...</span></li>
                @endif
                @foreach(range(1, $paginator->lastPage()) as $i)
                    @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                        @if ($i == $paginator->currentPage())
                            <li class="active"><span aria-current="page" class="page-numbers current">{{ $i }}</span></li>
                        @else
                            <li><a class="page-numbers" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endif
                @endforeach
                @if($paginator->currentPage() < $paginator->lastPage() - 3)
                    <li><span class="page-numbers">...</span></li>
                @endif
                @if($paginator->currentPage() < $paginator->lastPage() - 2)
                    <li class="hidden-xs"><a class="page-numbers" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ti-arrow-right"></i></a></li>
                @else
                    <li class="disabled"><span class="page-numbers"><i class="ti-arrow-right"></i></span></li>
                @endif
            </ul>
        @endif
    </div>
</div>
