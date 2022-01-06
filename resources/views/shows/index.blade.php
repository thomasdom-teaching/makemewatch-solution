@extends('layouts.app')

@section('title', 'Mes films')

@section('content')
    @if (count($shows) > 0)
        <section class="mx-12 grid grid-cols-6 gap-6">
            @foreach ($shows as $show)
                <x-show-card :showId="$show->id" :title="$show->name" :image="$show->image" :genres="$show->genres"/>
            @endforeach
        </section>
    @else
        <p class="text-center">No shows available</p>
    @endif
@endsection
