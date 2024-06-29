@if ($row->is_approved === null)
    <div class="flex gap-2">
        <button wire:click='updateStatus(1, {{ $row->id }})'><x-heroicon-s-document-check
                class="text-green-600 size-6" /></button>
        <button wire:click='updateStatus(0, {{ $row->id }})'><x-heroicon-s-document-minus
                class="text-red-600 size-6" /></button>
    </div>
@endif
