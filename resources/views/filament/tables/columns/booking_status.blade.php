@switch($getRecord()->status)
    @case(1)
        <span class="px-2 py-1 font-semibold text-sm bg-lime-600 text-white rounded-full shadow-sm">Pending</span>
        @break
    @case(2)
        <span class="px-2 py-1 font-semibold text-sm bg-green-700 text-white rounded-full shadow-sm">Payment submitted</span>
        @break
    @case(3)
        <span class="px-2 py-1 font-semibold text-sm bg-rose-600 text-white rounded-full shadow-sm">Rejected</span>
        @break
    @case(4)
        <span class="px-2 py-1 font-semibold text-sm bg-green-500 text-white rounded-full shadow-sm">Accepted</span>
        @break
    @default

@endswitch