<div class="flex flex-col">
    @foreach ($getRecord()->bookingTimes as $item)
        @if ($item->status == 0)
            <form method="post" action="{{ route('book.time.update', $item->id) }}">
                @csrf
                <x-filament::modal>
                    <x-slot name="trigger">
                        <button type="button" x-on:click="isOpen = true"><span class="mt-1 px-2 py-1 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm">{{ \Carbon\Carbon::createFromFormat('H:i:s', $item->time)->format('h:i a') }}</span></button>
                    </x-slot>
            
                    <x-slot name="header">
                        Confirm slot action
                    </x-slot>
            
                    <button name="confirm" value="confirm" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirm</button>
                    <button name="reject" value="reject" type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reject</button>
                </x-filament::modal>
            </form>
        @else
            <span class="mt-1 px-2 py-1 font-semibold text-sm {{ $item->status == 1 ? 'bg-green-500' : 'bg-red-500' }}  text-white rounded-full shadow-sm">{{ \Carbon\Carbon::createFromFormat('H:i:s', $item->time)->format('h:i a') }}</span>
        @endif        
    @endforeach    
</div>
