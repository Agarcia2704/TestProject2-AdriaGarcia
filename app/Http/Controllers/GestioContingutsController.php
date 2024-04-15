<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Contingut;

class GestioContingutsController extends Controller
{
    public function index(): Response
    {
        $continguts = $this->getContingut(); // Corregido de getContinguts a getContingut

        return Inertia::render('Continguts', [
            'continguts' => $continguts,
        ]);
    }

    public function getContingut() {
        return Contingut::all();
    }
}
