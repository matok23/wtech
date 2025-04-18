@if ($paginator->hasPages())
    <nav class="my-4">
        <ul class="pagination justify-content-center mb-0">

            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                @if ($paginator->onFirstPage())
                    <span class="page-link">Prev</span>
                @else
                    <button class="page-link" wire:click="previousPage" wire:loading.attr="disabled">Prev</button>
                @endif
            </li>

            <li class="page-item disabled">
                <span class="page-link text-dark px-3">
                    Page {{ $paginator->currentPage() }}
                </span>
            </li>

            <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                @if ($paginator->hasMorePages())
                    <button class="page-link" wire:click="nextPage" wire:loading.attr="disabled">Next</button>
                @else
                    <span class="page-link">Next</span>
                @endif
            </li>
            
        </ul>
    </nav>
@endif
