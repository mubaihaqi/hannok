<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $allPromos = Promo::orderBy('start_date', 'asc')->get();

        return view('/promo', compact(
            'allPromos'
        ));
    }
}
