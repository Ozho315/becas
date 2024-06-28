<div class="flex gap-2">
    @isset($viewLink)
        <a href="{{ $viewLink }}"><x-heroicon-o-eye class="text-blue-600 size-6" /></a>
    @endisset

    @isset($editLink)
        <a href="{{ $editLink }}"><x-heroicon-o-pencil-square class="text-amber-600 size-6" /></a>
    @endisset

    @isset($deleteLink)
        <form action="{{ $deleteLink }}" class="d-inline" method="POST" x-data
            @submit.prevent="if (confirm('¿Desea eliminar este registro?')) $el.submit()">
            @method('DELETE')
            @csrf
            <button type="submit">
                <x-heroicon-o-trash class="text-red-600 size-6" />
            </button>
        </form>
    @endisset
</div>
