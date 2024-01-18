@foreach ($getRecord()->booking_times as $item)
    <span class="px-4 py-2 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm">{{ $item }}</span>
@endforeach