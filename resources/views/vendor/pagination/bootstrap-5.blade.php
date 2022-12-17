@if ($paginator->hasPages())
<div class="d-flex justify-content-between flex-fill d-sm-none">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">{!! __('pagination.previous') !!}</span>
            </li>
        @else
            <li class="page-item">
                <button class="page-link" wire:click="previousPage" rel="prev">{!! __('pagination.previous') !!}</button>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <button class="page-link" wire:click="nextPage" rel="next">@lang('pagination.next')</button>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
</div>

<div class="card-footer d-flex align-items-center">
    <p class="m-0 text-muted">
        {!! __('Showing') !!}
        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
        {!! __('to') !!}
        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
        {!! __('of') !!}
        <span class="fw-semibold">{{ $paginator->total() }}</span>
        {!! __('results') !!}
    </p>

    <ul class="m-0 pagination ms-auto">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="{!! __('pagination.previous') !!}">
                <span class="page-link" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
                    prev
                </span>
            </li>
        @else
            <li class="page-item">
                <button class="page-link" wire:click="previousPage" rel="prev" aria-label="{!! __('pagination.previous') !!}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
                    prev
                </button>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><button class="page-link" wire:click="gotoPage({{$page}})">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <button class="page-link" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">
                    next
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                </button>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">
                    next
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                </span>
            </li>
        @endif
    </ul>
</div>
@endif
