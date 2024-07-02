<form wire:submit='save'>
    @csrf
    <x-mary-select label="{{ __('Scholarship application type') }}" icon="o-document" :options="$scholarshipTypes"
        wire:model.change='scholarshipTypeId' placeholder="Selecciona Tipo de Beca" name="scholarship_type_id" />

    <x-mary-input label="{{ __('Committee') }}" icon="o-building-office" readonly wire:model='committee' />

    <x-mary-file wire:model="document" label="Documento" hint="Solo PDF" accept="application/pdf" />

    <div class="mt-2 text-end">
        <x-primary-button>Guardar solicitud</x-primary-button>
    </div>
</form>
