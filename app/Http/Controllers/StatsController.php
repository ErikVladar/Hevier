<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {
        // TODO: Add the urls
        // Array[array[str]]
        // slideShows[slidesUrl["/images/..."]]

        $slides = array();

        return view("stats", [
            'slides' => $slides,
        ]);
    }


    public function show($type)
    {
        $charts = [
            'activity' => [
                'title' => 'Priemerný denný pohyb detí',
                'subtitle' => 'Ako sa mení aktivita podľa veku?',
                'view' => 'stats.activity',
            ],
            'screen-time' => [
                'title' => 'Čas pred obrazovkou',
                'subtitle' => 'Koľko času deti trávia pred obrazovkou počas týždňa?',
                'view' => 'stats.screen-time',
            ],
            'favorite-sports' => [
                'title' => 'Najobľúbenejšie športy',
                'subtitle' => 'Ktoré športy majú deti najradšej?',
                'view' => 'stats.favorite-sports',
            ],
            'recommendations' => [
                'title' => 'Koľko detí spĺňa odporúčania',
                'subtitle' => 'Podiel detí, ktoré dosahujú odporúčané úrovne pohybu',
                'view' => 'stats.recommendations',
            ],
        ];

        // If invalid chart type requested → 404
        if (!array_key_exists($type, $charts)) {
            abort(404, 'Unknown chart type');
        }

        return view($charts[$type]['view'], [
            'title' => $charts[$type]['title'],
            'subtitle' => $charts[$type]['subtitle'],
        ]);
    }
}
