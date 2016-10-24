<ul class="pager">
    {{-- Reverse direction --}}
    @if ($reverse_direction)
        @if ($posts->currentPage() > 1)
            <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    @lang('index-pager.previous') {{ $tag->tag }}
                </a>
            </li>
        @endif
        @if ($posts->hasMorePages())
            <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                    @lang('index-pager.next') {{ $tag->tag }}
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @else
        @if ($posts->currentPage() > 1)
            <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    @lang('index-pager.newer') {{ $tag ? $tag->tag : '' }}
                </a>
            </li>
        @endif
        @if ($posts->hasMorePages())
            <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                    @lang('index-pager.older') {{ $tag ? $tag->tag : '' }}
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @endif
</ul>