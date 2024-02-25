@if ($booking->bookingPayment !== null)
    <p><span class="text-slate-500">Payment method</span>: <span class="text-lg">{{ $booking->bookingPayment->vendor }}</span></p>
    <p><span class="text-slate-500">Last 4 digit</span>: <span class="text-lg">{{ $booking->bookingPayment->last_4_digit }}</span></p>
    <div class="flex">
        @foreach ($booking->bookingPayment->attachments as $attachment)
            <a class=" p-2" href="{{ asset("storage/$attachment") }}" target="_blank"><img src="{{ asset("storage/$attachment") }}" alt="" width="300px"></a>
        @endforeach
    </div>
@else
    <p>No Payment Found</p>
@endif
