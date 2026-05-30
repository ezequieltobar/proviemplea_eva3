<?php

namespace App\Http\Controllers\Schemas;

/**
 * @OA\Schema(
 *     schema="ContactoSolicitadoInput",
 *     title="Contacto Solicitado Input",
 *     description="Datos para registrar una solicitud de contacto",
 *     required={"empresa_id", "persona_id"},
 *     example={
 *         "empresa_id": "550e8400-e29b-41d4-a716-446655440001",
 *         "persona_id": "550e8400-e29b-41d4-a716-446655440000",
 *         "notas_admin": "Empresa interesada en perfil para cargo de analista"
 *     }
 * )
 */
class ContactoSolicitadoInputSchema
{
    /** @OA\Property(property="empresa_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440001") */
    public string $empresa_id;
    /** @OA\Property(property="persona_id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000") */
    public string $persona_id;
    /** @OA\Property(property="notas_admin", type="string", example="Empresa interesada en perfil para cargo de analista", nullable=true) */
    public ?string $notas_admin;
}
