<a
    href="{{ action([\App\Http\Controllers\ShowController::class, 'show'], ['show' => $showId]) }}"
    class="h-80 bg-cover bg-no-repeat bg-center flex flex-col justify-end items-stretch p-2 cursor-pointer"
    style="background-image: url('{{ $image ? $image['medium'] : asset('images/show-placeholder.png') }}'); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.35)">
    @isset($genres)
        @if (count($genres) > 0)
            <ul class="list-none flex space-x-1.5">
                @foreach ($genres as $genre)
                    <li class="text-xs">{{ $genre }}</li>
                @endforeach
            </ul>
        @endif
    @endisset
    <h3 class="font-bold w-48">{{ $title }}</h3>
</a>
