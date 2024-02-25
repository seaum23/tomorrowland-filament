@foreach ($getRecord()->sports as $sport)
    <span class="px-2 py-1 bg-yellow-300 rounded m-2 text-sm">{{$sport->name}}</span>
@endforeach