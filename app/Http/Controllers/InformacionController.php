<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Informacion;

class InformacionController extends Controller
{
    public function index(): Response
    {
        $informacion = $this->getInfo();

        return Inertia::render('Informacion', [
            'informacion' => $informacion, // Cambiado de 'empleado' a 'empleados'
        ]);
    }

    public function getInfo() {
        return Informacion::getInformacion(); // Simplemente retornar los empleados
    }
}