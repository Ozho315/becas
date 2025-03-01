@if ($row->is_approved === null)
    <x-heroicon-o-minus-circle class="inline-block text-gray-500 size-5" />
@else
    @if ($row->is_approved)
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 text-green-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 text-red-500" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    @endif
@endif
