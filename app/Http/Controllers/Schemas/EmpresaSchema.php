<?php

namespace App\Http\Controllers\Schemas;

/**
 * @OA\Schema(
 *     schema="Empresa",
 *     title="Empresa",
 *     description="Modelo completo de empresa empleadora",
 *     example={
 *         "id": "550e8400-e29b-41d4-a716-446655440001",
 *         "nombre_empresa": "TechCorp SpA",
 *         "rut_empresa": "76123456-7",
 *         "email": "rrhh@techcorp.cl",
 *         "rubro": "Tecnología",
 *         "tipo_empresa": "contratacion-directa",
 *         "presentacion": "Empresa de desarrollo de software con 10 años de experiencia",
 *         "beneficios": {"Seguro complementario", "Trabajo remoto", "Bono de desempeño"},
 *         "contacto_nombre": "Ana López",
 *         "contacto_email": "ana@techcorp.cl",
 *         "contacto_telefono": "+56912345678",
 *         "validado": true,
 *         "activo": true
 *     }
 * )
 */
class EmpresaSchema
{
    /** @OA\Property(property="id", type="string", format="uuid", example="550e8400-e29b-41d4-a716-446655440001") */
    public string $id;
    /** @OA\Property(property="nombre_empresa", type="string", example="TechCorp SpA") */
    public string $nombre_empresa;
    /** @OA\Property(property="rut_empresa", type="string", example="76123456-7") */
    public string $rut_empresa;
    /** @OA\Property(property="email", type="string", format="email", example="rrhh@techcorp.cl") */
    public string $email;
    /** @OA\Property(property="logo_url", type="string", example="https://techcorp.cl/logo.png", nullable=true) */
    public ?string $logo_url;
    /** @OA\Property(property="rubro", type="string", example="Tecnología", nullable=true) */
    public ?string $rubro;
    /** @OA\Property(property="tipo_empresa", type="string", enum={"contratacion-directa","est","outsourcing"}, example="contratacion-directa") */
    public string $tipo_empresa;
    /** @OA\Property(property="presentacion", type="string", example="Empresa de desarrollo de software con 10 años de experiencia", nullable=true) */
    public ?string $presentacion;
    /**
     * @OA\Property(property="beneficios", type="array",
     *     @OA\Items(type="string"), example={"Seguro complementario","Trabajo remoto","Bono de desempeño"}, nullable=true)
     */
    public ?array $beneficios;
    /** @OA\Property(property="contacto_nombre", type="string", example="Ana López") */
    public string $contacto_nombre;
    /** @OA\Property(property="contacto_email", type="string", format="email", example="ana@techcorp.cl") */
    public string $contacto_email;
    /** @OA\Property(property="contacto_telefono", type="string", example="+56912345678", nullable=true) */
    public ?string $contacto_telefono;
    /** @OA\Property(property="validado", type="boolean", example=true) */
    public bool $validado;
    /** @OA\Property(property="activo", type="boolean", example=true) */
    public bool $activo;
    /** @OA\Property(property="created_at", type="string", format="date-time", example="2026-01-10T09:00:00+00:00") */
    public string $created_at;
    /** @OA\Property(property="updated_at", type="string", format="date-time", example="2026-05-20T08:15:00+00:00") */
    public string $updated_at;
}
