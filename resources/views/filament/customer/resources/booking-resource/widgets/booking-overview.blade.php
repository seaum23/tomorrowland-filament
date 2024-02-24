<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Widget content --}}
        <p>This is widget</p>
        @foreach ($this->getPageTableRecords() as $item)
            <p>{{ $item->booking_date }}</p>
        @endforeach
    </x-filament::section>
</x-filament-widgets::widget>
