<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShowRequest;
use App\Http\Requests\UpdateShowRequest;
use App\Models\Show;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $shows = Show::all();

        return view('shows.index', compact('shows'));
    }

    /**
     * Display the specified resource.
     *
     * @param Show $show
     * @return Application|Factory|View
     */
    public function show(Show $show): Application|Factory|View
    {
        $ratingMessage = $show->rating ? $this->getRatingMessage($show->rating['average']) : '';
        return view('shows.show', compact('show', 'ratingMessage'));
    }

    private function getRatingMessage(?float $rating): string
    {
        if(empty($rating)) {
            return 'Note inconnue';
        }

        if ($rating > 9) {
            return 'Juste excellent';
        }
        if ($rating > 8) {
            return 'Top !';
        }
        if ($rating > 6) {
            return 'Bien';
        }
        if ($rating > 5) {
            return 'Ça se regarde';
        }
        if ($rating > 3) {
            return 'Pas terrible...';
        }
        return 'Un navet !';
    }
}
