@if ($paginator->hasPages())
<nav aria-label="Page navigation example">    
    <ul class="pagination justify-content-center">
       
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><span>← Previous</span></li> --}}
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        @else
            {{-- <li ><a href="{{ $paginator->previousPageUrl() }}" rel="prev"> Previous</a></li> --}}
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item" ><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
        @else
            {{-- <li class="disabled"><span>Next →</span></li> --}}
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        @endif
    </ul>
@endif 
</nav>
