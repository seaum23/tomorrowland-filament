<section class='filalite-panel flex flex-col gap-6 mt-4'>
    <div class='flex justify-center gap-x-4 p-2'>
        @foreach ($providers as $providerName => $provider)
            <a class='ring-2 ring-slate-700/50 hover:ring-slate-600/70 transition-all rounded-lg px-4 py-3 flex gap-2 items-center'
                href='{{ route('socialment.redirect', $providerName) }}'>
                <x-icon name="{{ $provider['icon'] }}" class='w-6' />
                <span>{{ $provider['label'] }}</span>
            </a>
        @endforeach
    </div>
</section>
