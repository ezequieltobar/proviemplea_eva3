<?php

namespace App\Http\Controllers\Schemas;

/**
 * @OA\Schema(
 *     schema="ContactoSolicitado",
 *     title="Contacto Solicitado",
 *     description="Solicitud de contacto entre empresa y talento",
 *     example={
 *         "id": "550e8400-e29b-41d4-a716-446655440002",
 *         "empresa_id": "550e8400-e29b-41d4-a716-446655440001",
 *         "persona_id": "550e8400-e29b-41d4-a716-446655440000",
 *         "estado": "entrevista",
 *         "notas_admin": "Candidato destacado para el cargo de desarrollador",
 *         "fecha_contacto": "2026-05-01T10:00:00+00:00",
 *         "fecha_entrevista": "2026-05-10T15:00:00+00:00",
 *         "fecha_resultado": null,
 *         "created_at": "2026-04-30T09:00:00+00:00",
 *         "updated_at": "2026-05-10T15:00:00+00:00"
 *     }
 * )
 */
class ContactoSolicitadoSchema
{
    /** @OA\Property(property="id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440002") */
    public string $id;
    /** @OA\Property(property="empresa_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440001") */
    public string $empresa_id;
    /** @OA\Property(property="persona_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000") */
    public string $persona_id;
    /**
     * @OA\Property(property="estado", type="string",
     *     enum={"pendiente","contactado","entrevista","seleccionado","no-seleccionado","proceso-cerrado"},
     *     example="entrevista")
     */
    public string $estado;
    /** @OA\Property(property="notas_admin", type="string", example="Candidato destacado para el cargo", nullable=true) */
    public ?string $notas_admin;
    /** @OA\Property(property="fecha_contacto", type="string", format="date-time", example="2026-05-01T10:00:00+00:00", nullable=true) */
    public ?string $fecha_contacto;
    /** @OA\Property(property="fecha_entrevista", type="string", format="date-time", example="2026-05-10T15:00:00+00:00", nullable=true) */
    public ?string $fecha_entrevista;
    /** @OA\Property(property="fecha_resultado", type="string", format="date-time", nullable=true) */
    public ?string $fecha_resultado;
    /** @OA\Property(property="created_at", type="string", format="date-time", example="2026-04-30T09:00:00+00:00") */
    public string $created_at;
    /** @OA\Property(property="updated_at", type="string", format="date-time", example="2026-05-10T15:00:00+00:00") */
    public string $updated_at;
}
