<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\Models\DataMobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataMobil = DataMobil::latest()->paginate(10);
        return view('index.index', compact('dataMobil'));
    }
}
