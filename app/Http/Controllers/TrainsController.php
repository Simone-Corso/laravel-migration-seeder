<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('orario_partenza', '>=', now())->get();
        return view('index', compact('trains'));
    }
}
