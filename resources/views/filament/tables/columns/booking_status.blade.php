@switch($getRecord()->status)
    @case(1)
        <span class="px-4 py-2 font-semibold text-sm bg-lime-300 text-white rounded-full shadow-sm">Booked</span>        
        @break
    @case(2)
        <span class="px-4 py-2 font-semibold text-sm bg-green-500 text-white rounded-full shadow-sm">Payment submitted</span>
        @break
    @case(3)
        <span class="px-4 py-2 font-semibold text-sm bg-rose-600 text-white rounded-full shadow-sm">Canceled</span>
        @break
    @default
        
@endswitch