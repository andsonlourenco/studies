<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Series;

class SeriesCOntroller extends Controller
{
    public function index()
    {
        return Series::all();
    }
}
