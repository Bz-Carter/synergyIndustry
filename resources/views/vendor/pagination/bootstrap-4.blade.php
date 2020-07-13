@if ($paginator->hasPages())
    <div class="flex-wr-s-c p-t-7">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex-c-c pagi-item trans-02">
                <i class="fa fa-angle-left fs-16"></i>
            </a>
        @endif

        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="flex-c-c pagi-item trans-02 active-pagi">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="flex-c-c pagi-item trans-02">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex-c-c pagi-item trans-02">
                <i class="fa fa-angle-right fs-16"></i>  
            </a>
        @else
            
        @endif   
    </div> 
@endif