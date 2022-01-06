<header class="flex flex-row justify-between items-baseline my-6 mx-12">
    <a href="/" class="text-xl">📺 Make Me Watch</a>
    <nav class="flex space-x-4">
        <x-link to="{{ action([\App\Http\Controllers\ShowController::class, 'index']) }}">Tous les films</x-link>
    </nav>
</header>
