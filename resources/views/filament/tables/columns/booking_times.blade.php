<div class="flex flex-col">
    @foreach ($getRecord()->booking_times as $item)
        <span class="mt-1 px-2 py-1 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm">{{ \Carbon\Carbon::createFromFormat('H:i:s', $item)->format('h:i a') }}</span>
    @endforeach
</div>
