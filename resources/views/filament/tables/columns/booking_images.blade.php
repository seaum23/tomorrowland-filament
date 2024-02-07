<div class="flex gap-1.5">
    @if ($getRecord()->bookingPayment)
        @foreach ($getRecord()->bookingPayment->attachments as $item)
        <a href="{{ asset("storage/$item") }}" target="_blank"><img src="{{ asset("storage/$item") }}" style="height: 2.5rem;" class="max-w-none object-cover object-center ring-white dark:ring-gray-900 "></a>
        @endforeach
    @endif
</div>
