@extends('layouts.app')

@section('title', $show->name)

@section('content')
    <div class="container mx-12">
        <div class="grid gap-6" style="grid-template-columns: 33% 67%">
            @isset($show->image)
                <img
                    src="{{ $show->image ? $show->image['original'] : asset('images/show-placeholder.png') }}"
                    alt="{{ $show->title }} - {{ $show->image ? "Poster" : "Poster manquant" }}"/>
            @endisset
            <div class="space-y-4">
                <h1 class="text-4xl font-bold">{{ $show->name }}</h1>
                <div class="flex flex-col space-y-1">
                    <div>
                        <span class="text-gray-400">Genres :</span> {!! !empty($show->genres) ? implode(', ', $show->genres) : '<span class="italic">inconnu</span>' !!}
                    </div>
                    @isset($show->rating)
                        <div>
                            ⭐ {{ $show->rating['average'] ? number_format($show->rating['average'], 1, ',') : '-'}} / 10 - <span class="italic">{{ $ratingMessage }}</span>
                        </div>
                    @endisset
                    @isset($show->officialSite)
                        <div>
                            <x-link :to="$show->officialSite">Site officiel de la série</x-link>
                        </div>
                    @endisset
                </div>
                <div>
                    {!! $show->summary !!}
                </div>
                <div class="rounded flex flex-col bg-gray-900 px-6 py-4">
                    <h2 class="text-lg font-semibold mb-2">Plus d'infos</h2>
                    <div class="flex flex-col space-y-1 text-sm">
                        <div>
                            <i class="fas fa-clock"></i> Les épisodes de cette série durent en
                            moyenne {{ $show->averageRuntime ?? 0 }} minutes.
                        </div>
                        <div>
                            <i class="fas fa-play"></i> <span class="text-gray-300 font-semibold">Date de début de diffusion :</span> {{ \Illuminate\Support\Carbon::parse($show->premiered)->format('d/m/Y') }}
                        </div>
                        @isset($show->ended)
                            <div>
                                <i class="fas fa-stop"></i> <span class="text-gray-300 font-semibold">Date de fin de diffusion :</span> {{ \Illuminate\Support\Carbon::parse($show->ended)->format('d/m/Y') }}
                            </div>
                            <div>
                                <i class="fas fa-tv"></i> <span
                                    class="text-gray-300 font-semibold">Diffusé sur : {{ flag(strtolower($show->network['country']['code']), 'w-4 inline') }} {{ $show->network['name'] }}</span>
                            </div>
                        @endisset
                        @empty($show->ended)
                            <div>
                                <i class="fas fa-video"></i> Cette série est toujours en production
                            </div>
                        @endempty
                        @if (empty($show->ended) && count($show->schedule['days']) > 0)
                            <div>
                                <i class="fas fa-calendar-alt"></i> Un nouvel épisode est diffusé tous
                                les {{ implode(', ', $show->schedule['days']) }} à {{ $show->schedule['time'] }}
                                @isset($show->network)
                                    sur {{ flag(strtolower($show->network['country']['code']), 'w-4 inline') }} {{ $show->network['name'] }}
                                @endisset
                            </div>
                        @endempty
                        <div>
                            <i class="fas fa-language"></i> <span class="text-gray-300 font-semibold">Version originale :</span> {{ $show->language }}
                        </div>
                    </div>
                </div>
                <div class="flex flex-row space-x-4">
                    <x-button type="primary" to="{{ $show->url }}"><i class="fab fa-mdb"></i> Voir sur TVMaze</x-button>
                    @isset($show->externals)
                        @foreach($show->externals as $provider => $id)
                            @if($provider === 'imdb')
                                <x-button type="imdb" to="{{ sprintf('https://www.imdb.com/title/%s/', $id) }}"><i
                                        class="fab fa-imdb"></i> Voir la fiche IMDB
                                </x-button>
                            @elseif($provider === 'tvrage')
                                <x-button type="tvrage" to="{{ sprintf('https://www.tvrage.com/shows/id-%s/', $id) }}">
                                    <i class="fab fa-mdb"></i> Voir la fiche TVRage
                                </x-button>
                            @else
                                <x-button type="thetvdb"
                                          to="{{ sprintf('https://www.thetvdb.com/?id=%s&tab=series', $id) }}"><i
                                        class="fab fa-mdb"></i> Voir la fiche TheTVDB
                                </x-button>
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
