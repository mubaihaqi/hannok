<?php

namespace App\Http\Controllers;

use App\Models\TokoKami;
use Illuminate\Http\Request;

class TokoKamiController extends Controller
{
    public function index()
    {
        $allTokos = TokoKami::orderBy('id', 'asc')->get();

        return view('/toko', compact(
            'allTokos'
        ));
    }
}
