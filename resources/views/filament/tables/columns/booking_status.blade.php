@switch($getRecord()->status)
    @case(1)
        <span class="px-4 py-2 font-semibold text-sm bg-lime-300 text-white rounded-full shadow-sm">Booked</span>        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch