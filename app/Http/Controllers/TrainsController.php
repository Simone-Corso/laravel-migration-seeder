<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('orario_partenza', '>=', now())->get();
        dd($trains);
        return view('index', compact('trains'));
    }
}
