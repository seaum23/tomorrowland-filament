@foreach ($getRecord()->booking_times as $item)
    <span class="mr-1 px-4 py-2 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm">{{ \Carbon\Carbon::createFromFormat('H:i:s', $item)->format('h:i a') }}</span>
@endforeach