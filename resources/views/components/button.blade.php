<a
    href="{{ $to }}"
    target="_blank"
    @class([
        'border-0',
        'rounded',
        'bg-sky-400' => $type === 'primary',
        'hover:bg-sky-500' => $type === 'primary',
        'bg-yellow-400' => $type === 'imdb',
        'hover:bg-yellow-500' => $type === 'imdb',
        'bg-orange-500' => $type === 'tvrage',
        'hover:bg-orange-600' => $type === 'tvrage',
        'bg-green-700' => $type === 'thetvdb',
        'hover:bg-green-800' => $type === 'thetvdb',
        'bg-white' => empty($type),
        'hover:bg-gray-200' => $type === empty($type),
        'text-white' => $type !== 'imdb',
        'text-black' => $type === 'imdb',
        'px-4',
        'py-2',
    ])
>
    {{ $slot }} <i class="fas fa-external-link-square"></i>
</a>
