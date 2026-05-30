<?php

namespace App\Http\Controllers\Schemas;

/**
 * @OA\Schema(
 *     schema="Persona",
 *     title="Persona",
 *     description="Modelo completo de persona/talento",
 *     example={
 *         "id": "550e8400-e29b-41d4-a716-446655440000",
 *         "email": "juan@example.com",
 *         "codigo_talento": "PROV-2026-A1B2",
 *         "resumen": "Desarrollador web con 5 años de experiencia",
 *         "nivel_educacional": "universitaria",
 *         "titulo_carrera": "Ingeniero en Informática",
 *         "anio_egreso": 2019,
 *         "anios_experiencia": 5,
 *         "rango_renta": "800k-1.2M",
 *         "tipo_jornada": "completa",
 *         "modalidad": "hibrido",
 *         "persona_discapacidad": false,
 *         "validado": true,
 *         "activo": true,
 *         "porcentaje_completitud": 90
 *     }
 * )
 */
class PersonaSchema
{
    /** @OA\Property(property="id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440000") */
    public string $id;
    /** @OA\Property(property="email", type="string", format="email", example="juan@example.com") */
    public string $email;
    /** @OA\Property(property="codigo_talento", type="string", example="PROV-2026-A1B2") */
    public string $codigo_talento;
    /** @OA\Property(property="resumen", type="string", example="Desarrollador web con 5 años de experiencia", nullable=true) */
    public ?string $resumen;
    /** @OA\Property(property="nivel_educacional", type="string", enum={"basica","media","tecnica","universitaria","postgrado"}, example="universitaria", nullable=true) */
    public ?string $nivel_educacional;
    /** @OA\Property(property="titulo_carrera", type="string", example="Ingeniero en Informática", nullable=true) */
    public ?string $titulo_carrera;
    /** @OA\Property(property="anio_egreso", type="integer", example=2019, nullable=true) */
    public ?int $anio_egreso;
    /** @OA\Property(property="anios_experiencia", type="integer", example=5) */
    public int $anios_experiencia;
    /** @OA\Property(property="rango_renta", type="string", example="800k-1.2M", nullable=true) */
    public ?string $rango_renta;
    /** @OA\Property(property="tipo_jornada", type="string", enum={"completa","part-time","por-horas"}, example="completa", nullable=true) */
    public ?string $tipo_jornada;
    /** @OA\Property(property="modalidad", type="string", enum={"presencial","remoto","hibrido"}, example="hibrido", nullable=true) */
    public ?string $modalidad;
    /** @OA\Property(property="portafolio_url", type="string", example="https://miportafolio.cl", nullable=true) */
    public ?string $portafolio_url;
    /** @OA\Property(property="persona_discapacidad", type="boolean", example=false) */
    public bool $persona_discapacidad;
    /** @OA\Property(property="validado", type="boolean", example=true) */
    public bool $validado;
    /** @OA\Property(property="activo", type="boolean", example=true) */
    public bool $activo;
    /** @OA\Property(property="porcentaje_completitud", type="integer", example=90) */
    public int $porcentaje_completitud;
    /** @OA\Property(property="created_at", type="string", format="date-time", example="2026-01-15T10:30:00+00:00") */
    public string $created_at;
    /** @OA\Property(property="updated_at", type="string", format="date-time", example="2026-05-20T08:15:00+00:00") */
    public string $updated_at;
}
