# Backend - Examen Empleados (Laravel)

1. Configurar .env con datos de la BD.
2. Ejecutar migraciones:
   php artisan migrate
3. Cargar datos de ejemplo:
   php artisan db:seed --class=EmpleadoSeeder
4. Ejecutar servidor:
   php artisan serve
   -> API disponible en http://127.0.0.1:8000/api/empleados
Rutas:
GET  /api/empleados
POST /api/empleados
