<?php

namespace App\Http\Controllers\Schemas;

/**
 * @OA\Schema(
 *     schema="PersonaInput",
 *     title="Persona Input",
 *     description="Datos para crear o actualizar una persona",
 *     example={
 *         "email": "maria@example.com",
 *         "telefono": "+56912345678",
 *         "resumen": "Contadora con experiencia en pymes y sector público",
 *         "nivel_educacional": "universitaria",
 *         "titulo_carrera": "Contador Auditor",
 *         "anio_egreso": 2018,
 *         "anios_experiencia": 7,
 *         "rango_renta": "600k-900k",
 *         "tipo_jornada": "completa",
 *         "modalidad": "presencial",
 *         "competencias": {"Contabilidad", "Excel avanzado", "SAP"},
 *         "areas_experiencia": {"Finanzas", "Auditoría"},
 *         "persona_discapacidad": false
 *     }
 * )
 */
class PersonaInputSchema
{
    /** @OA\Property(property="email", type="string", format="email", example="maria@example.com") */
    public string $email;
    /** @OA\Property(property="telefono", type="string", example="+56912345678", nullable=true) */
    public ?string $telefono;
    /** @OA\Property(property="resumen", type="string", example="Contadora con experiencia en pymes y sector público", nullable=true) */
    public ?string $resumen;
    /** @OA\Property(property="nivel_educacional", type="string", enum={"basica","media","tecnica","universitaria","postgrado"}, example="universitaria", nullable=true) */
    public ?string $nivel_educacional;
    /** @OA\Property(property="titulo_carrera", type="string", example="Contador Auditor", nullable=true) */
    public ?string $titulo_carrera;
    /** @OA\Property(property="anio_egreso", type="integer", example=2018, nullable=true) */
    public ?int $anio_egreso;
    /** @OA\Property(property="anios_experiencia", type="integer", example=7, nullable=true) */
    public ?int $anios_experiencia;
    /**
     * @OA\Property(property="areas_experiencia", type="array",
     *     @OA\Items(type="string"), example={"Finanzas", "Auditoría"}, nullable=true)
     */
    public ?array $areas_experiencia;
    /**
     * @OA\Property(property="competencias", type="array",
     *     @OA\Items(type="string"), example={"Contabilidad", "Excel avanzado", "SAP"}, nullable=true)
     */
    public ?array $competencias;
    /** @OA\Property(property="rango_renta", type="string", example="600k-900k", nullable=true) */
    public ?string $rango_renta;
    /** @OA\Property(property="tipo_jornada", type="string", enum={"completa","part-time","por-horas"}, example="completa", nullable=true) */
    public ?string $tipo_jornada;
    /** @OA\Property(property="modalidad", type="string", enum={"presencial","remoto","hibrido"}, example="presencial", nullable=true) */
    public ?string $modalidad;
    /**
     * @OA\Property(property="cursos", type="array", nullable=true,
     *     @OA\Items(type="object",
     *         @OA\Property(property="nombre", type="string", example="Excel Avanzado"),
     *         @OA\Property(property="institucion", type="string", example="SENCE"),
     *         @OA\Property(property="anio", type="integer", example=2022)
     *     )
     * )
     */
    public ?array $cursos;
    /**
     * @OA\Property(property="idiomas", type="array", nullable=true,
     *     @OA\Items(type="object",
     *         @OA\Property(property="idioma", type="string", example="Inglés"),
     *         @OA\Property(property="nivel", type="string", enum={"basico","intermedio","avanzado","nativo"}, example="intermedio")
     *     )
     * )
     */
    public ?array $idiomas;
    /** @OA\Property(property="persona_discapacidad", type="boolean", example=false, nullable=true) */
    public ?bool $persona_discapacidad;
    /** @OA\Property(property="portafolio_url", type="string", example="https://miportafolio.cl", nullable=true) */
    public ?string $portafolio_url;
}
