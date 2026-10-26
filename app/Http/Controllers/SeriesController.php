<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SeriesController extends Controller
{
    public function ListarSeries()
    {
        $series = [
            'Juacas'

        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie<li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
