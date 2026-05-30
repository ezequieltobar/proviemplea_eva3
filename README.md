# ProviEmplea API - Evaluación 3

## Descripción
API REST backend para la plataforma **ProviEmplea**, desarrollada para el Departamento de Empleo de la Municipalidad de Providencia. La plataforma implementa un modelo de búsqueda inversa de empleo con curriculum ciego, donde las empresas buscan a los candidatos y no al revés.

## Stack Tecnológico
| Tecnología  | Versión        |
|-------------|----------------|
| PHP         | 8.2            |
| Laravel     | 11             |
| MySQL       | 8.0            |
| Docker      | Latest         |
| L5-Swagger  | 8.6            |
| swagger-php | 4.x            |

## Requisitos previos
- Docker Desktop instalado y corriendo
- Git

## Instalación y configuración

### 1. Clonar el repositorio
```bash
git clone https://github.com/TU_USUARIO/proviemplea_eva3.git
cd proviemplea_eva3
```

### 2. Copiar el archivo de entorno
```bash
cp .env.example .env
```

### 3. Levantar los contenedores
```bash
docker compose up -d --build
```

### 4. Instalar dependencias
```bash
docker compose exec app composer install --ignore-platform-reqs
```

### 5. Generar clave de aplicación
```bash
docker compose exec app php artisan key:generate
```

### 6. Ejecutar migraciones
```bash
docker compose exec app php artisan migrate
```

### 7. Generar documentación Swagger
```bash
docker compose exec app php artisan l5-swagger:generate
```

## Acceso
| Servicio      | URL                                      |
|---------------|------------------------------------------|
| API           | http://localhost:8080/api                |
| Swagger UI    | http://localhost:8080/api/documentation  |
| Health Check  | http://localhost:8080/api/health         |

## Endpoints disponibles

### Personas (CV Ciego)
| Método | Endpoint                      | Descripción                  |
|--------|-------------------------------|------------------------------|
| GET    | /api/personas                 | Listar talentos (CV ciego)   |
| POST   | /api/personas                 | Registrar nuevo talento       |
| GET    | /api/personas/{id}            | Obtener talento por ID        |
| PUT    | /api/personas/{id}            | Actualizar talento            |
| DELETE | /api/personas/{id}            | Eliminar talento              |
| PATCH  | /api/personas/{id}/validar    | Validar talento               |

### Empresas
| Método | Endpoint                      | Descripción                  |
|--------|-------------------------------|------------------------------|
| GET    | /api/empresas                 | Listar empresas               |
| POST   | /api/empresas                 | Registrar empresa             |
| GET    | /api/empresas/{id}            | Obtener empresa por ID        |
| PUT    | /api/empresas/{id}            | Actualizar empresa            |
| DELETE | /api/empresas/{id}            | Eliminar empresa              |
| PATCH  | /api/empresas/{id}/validar    | Validar empresa               |

### Administración
| Método | Endpoint                              | Descripción                        |
|--------|---------------------------------------|------------------------------------|
| GET    | /api/admin/contactos                  | Listar contactos solicitados        |
| POST   | /api/admin/contactos                  | Registrar solicitud de contacto     |
| PATCH  | /api/admin/contactos/{id}/estado      | Actualizar estado de contacto       |
| GET    | /api/admin/estadisticas               | Estadísticas generales              |

## Optimizaciones implementadas

### Rate Limiting
- Endpoints públicos: **60 solicitudes por minuto**
- Endpoints administrativos: **30 solicitudes por minuto**

### Caché
- GET /personas: **5 minutos**
- GET /empresas: **5 minutos**
- GET /admin/estadisticas: **10 minutos**

### Tiempos de respuesta esperados
- Operaciones de lectura: < 200ms
- Operaciones de escritura: < 500ms

## Contrato Swagger
El contrato OpenAPI se encuentra en:
```
storage/api-docs/api-docs.json
```
También disponible en formato interactivo en: http://localhost:8080/api/documentation

## Estructura del proyecto
```
backend/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AdministracionController.php
│   │       ├── Controller.php
│   │       ├── EmpresaController.php
│   │       ├── HealthController.php
│   │       ├── PersonaController.php
│   │       └── Schemas/
│   │           ├── ContactoSolicitadoInputSchema.php
│   │           ├── ContactoSolicitadoSchema.php
│   │           ├── EmpresaInputSchema.php
│   │           ├── EmpresaSchema.php
│   │           ├── PersonaCVCiegoSchema.php
│   │           ├── PersonaInputSchema.php
│   │           └── PersonaSchema.php
│   ├── Models/
│   │   ├── ContactoSolicitado.php
│   │   ├── Empresa.php
│   │   └── Persona.php
│   └── Traits/
│       └── ApiResponse.php
├── database/
│   └── migrations/
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       └── Dockerfile
├── routes/
│   └── api.php
├── storage/
│   └── api-docs/
│       └── api-docs.json
├── docker-compose.yaml
├── .env.example
└── README.md
```

## Errores detectados y corregidos (Punto 4 - Evaluación)
| Error | Causa | Solución |
|-------|-------|----------|
| Error 500 en estadísticas | Nombre de tabla incorrecto (`contacto_solicitado`) | Corregido a `contacto_solicitados` |
| Error 500 al crear contacto | Faltaba trait `HasUuids` en modelo `ContactoSolicitado` | Agregado `use HasUuids` |
| Error en Swagger UI (id integer) | Parámetro `id` definido como `integer` en vez de `uuid` | Corregido tipo a `string, format: uuid` |

## Autor
**Ezequiel Tobar**  
Instituto Profesional San Sebastián  
Desarrollo Backend - Evaluación 3 - 2026
