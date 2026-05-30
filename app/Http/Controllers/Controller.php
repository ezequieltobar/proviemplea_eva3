<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    title: "ProviEmplea API",
    description: "API REST para la plataforma de empleo ProviEmplea de Providencia. Permite gestionar talentos, empresas y procesos de selección con curriculum ciego.\n\n## Rate Limiting\nLa API implementa limitación de solicitudes para garantizar disponibilidad:\n- **Endpoints públicos:** 60 solicitudes por minuto\n- **Endpoints administrativos:** 30 solicitudes por minuto\n\n## Caché\nAlgunos endpoints utilizan caché para mejorar el rendimiento:\n- **GET /personas:** caché de 5 minutos\n- **GET /empresas:** caché de 5 minutos\n- **GET /admin/estadisticas:** caché de 10 minutos\n\n## Tiempos de respuesta esperados\n- Operaciones de lectura: < 200ms\n- Operaciones de escritura: < 500ms"
)]
#[OA\Server(
    url: "http://localhost:8080/api",
    description: "Servidor de desarrollo local"
)]
#[OA\Tag(name: "Health",         description: "Endpoints de salud del sistema")]
#[OA\Tag(name: "Personas",       description: "Gestión de perfiles de talentos/vecinos")]
#[OA\Tag(name: "Empresas",       description: "Gestión de empresas empleadoras")]
#[OA\Tag(name: "Administración", description: "Gestión administrativa y seguimiento")]
abstract class Controller
{
    use ApiResponse;
}
