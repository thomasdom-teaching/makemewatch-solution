<?php

namespace Database\Seeders;

use App\Models\Show;
use ErrorException;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $showsFile = File::get('database/data/tvmaze_2000_shows.json');
        $shows = json_decode($showsFile, true);
        foreach ($shows as $show) {
            $show['updated'] = Carbon::createFromTimestamp($show['updated']);
            unset($show['_links']);
            try {
                Show::create($show);
            } catch (Exception $e) {
                dd($e, $show);
            }
        }
    }
}
