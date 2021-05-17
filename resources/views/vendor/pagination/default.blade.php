@if ($paginator->hasPages())
  <nav class="woocommerce-pagination">
    <ul class="page-numbers">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
          <span aria-hidden="true">&lsaquo;</span>
        </li>
      @else
        <li>
          <a class="page-numbers prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"
             aria-label="@lang('pagination.previous')">&lsaquo;
          </a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li>
            <span class="page-numbers dots">&hellip;</span>
          </li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="current page-numbers" aria-current="page">
                <span>{{ $page }}</span>
              </li>
            @else
              <li>
                <a class="page-numbers" href=" {{ $url }}">{{ $page }}</a>
              </li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li>
          <a class="page-numbers next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
      @else
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
          <span aria-hidden="true">&rsaquo;</span>
        </li>
      @endif
    </ul>
  </nav>
@endif
