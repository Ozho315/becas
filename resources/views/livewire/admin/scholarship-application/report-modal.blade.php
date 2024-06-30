<x-mary-card title="Reporte" subtitle="Generar reporte de las solicitud de beca de un año" shadow separator>
    <x-mary-select label="Año" :options="$years" option-value="year" option-label="year"
        wire:model.change="selectedYear" />
    <div class="flex mt-4">
        <x-mary-button label="Generar" class="btn-primary btn-sm" wire:click='generateReport' />
    </div>
</x-mary-card>
