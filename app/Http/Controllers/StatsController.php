<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class StatsController extends Controller
{
    public function index()
    {

        $slides = array();
        $base_url=storage_path("app/public/slides");
        $slides_dir = scandir($base_url);

        $slides_dir=array_slice($slides_dir, 2);

        foreach($slides_dir as $dir){

            $dir_path=$base_url."/".$dir;
            $images=scandir($dir_path);
            $images=array_slice($images, 2);

            $images = array_map(fn($item) => $dir_path . "/" . $item, $images);

            $slides[$dir]=$images;

        }

        // dd($slides);

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
