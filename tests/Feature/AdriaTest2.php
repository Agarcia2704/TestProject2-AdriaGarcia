<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Informacion;

class AdriaTest2 extends TestCase
{
    use RefreshDatabase; // Usar el trait RefreshDatabase para asegurarse de que la base de datos se reinicie después de cada prueba

    /**
     * Test para verificar la actualización de la información en la base de datos.
     *
     * @return void
     */
    public function test_actualizacion_informacion()
    {
        // Primero, creamos un registro de información en la base de datos para actualizar
        $informacion = Informacion::factory()->create([
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'edad' => 30,
        ]);

        // Simulamos una solicitud PUT a la ruta de actualización de información con los nuevos datos
        $response = $this->put("/informacion/{$informacion->id}", [
            'nombre' => 'Pedro',
            'apellido' => 'Gomez',
            'edad' => 35,
        ]);

        // Verificamos que la solicitud haya sido exitosa
        $response->assertStatus(200);

        // Verificamos que los datos en la base de datos hayan sido actualizados correctamente
        $this->assertDatabaseHas('informacion', [
            'id' => $informacion->id,
            'nombre' => 'Pedro',
            'apellido' => 'Gomez',
            'edad' => 35,
        ]);
    }
}


//TEST RUTA POST O PUT