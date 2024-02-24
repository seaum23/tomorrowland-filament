<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Widget content --}}
        {{-- <p>This is widget</p> --}}
        @foreach ($times as $time => $data)
            <span class="mb-2 text-nowrap px-2 py-1 font-semibold text-sm leading-8 border-2 border-cyan-500  {{$data['booked'] ? 'bg-cyan-500 text-white' : 'text-black'}}  rounded-full shadow-sm">{{ $time }}</span>
        @endforeach
    </x-filament::section>
</x-filament-widgets::widget>
