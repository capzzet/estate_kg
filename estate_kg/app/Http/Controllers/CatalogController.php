<?php

namespace App\Http\Controllers;
use App\Models\Agent;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $agent = Agent::first(); // Или каким-то другим способом получите агента
        return view('catalog', ['agent' => $agent]);
    }

}
