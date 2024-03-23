<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Widget content --}}
        {{-- <p>This is widget</p> --}}
        @foreach ($shift_time as $shift => $times)
            <div style="display: grid;grid-template-columns: repeat(13,1fr);gap: 5px;overflow: auto;">
                <span class="text-center mb-2 text-nowrap px-1 py-1 font-semibold text-sm border-2 border-zinc-500 rounded-full shadow-sm">{{ $shift }}</span>
                @foreach ($times as $time => $data)
                    <span class="text-center mb-2 text-nowrap px-1 py-1 font-semibold text-sm border-2 border-cyan-500  {{$data['booked'] ? 'bg-cyan-500 text-white' : 'text-black'}}  rounded-full shadow-sm">{{ $time }}</span>
                @endforeach
            </div>
        @endforeach
    </x-filament::section>
</x-filament-widgets::widget>
