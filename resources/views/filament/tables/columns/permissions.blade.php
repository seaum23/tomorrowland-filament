@foreach ($getRecord()->permissions as $permission)
    <span class="px-2 py-1 bg-yellow-300 rounded m-2 text-sm">{{$permission->name}}</span>
@endforeach