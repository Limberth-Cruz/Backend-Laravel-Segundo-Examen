<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;
use Illuminate\Support\Str;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleados = [
            ['nombre'=>'Luis','apellido'=>'Gonzales','correo'=>'luis.gonzales@example.com','salario'=>'1200.50'],
            ['nombre'=>'María','apellido'=>'Perez','correo'=>'maria.perez@example.com','salario'=>'1500.00'],
            ['nombre'=>'Carlos','apellido'=>'Sanchez','correo'=>'carlos.sanchez@example.com','salario'=>'1100.75'],
            ['nombre'=>'Ana','apellido'=>'Lopez','correo'=>'ana.lopez@example.com','salario'=>'1300.00'],
            ['nombre'=>'José','apellido'=>'Martinez','correo'=>'jose.martinez@example.com','salario'=>'1400.20'],
            ['nombre'=>'Sofia','apellido'=>'Torres','correo'=>'sofia.torres@example.com','salario'=>'1250.00'],
            ['nombre'=>'Diego','apellido'=>'Alvarez','correo'=>'diego.alvarez@example.com','salario'=>'1350.10'],
            ['nombre'=>'Valeria','apellido'=>'Rojas','correo'=>'valeria.rojas@example.com','salario'=>'1180.00'],
            ['nombre'=>'Andrés','apellido'=>'Vargas','correo'=>'andres.vargas@example.com','salario'=>'1600.00'],
            ['nombre'=>'Patricia','apellido'=>'Quispe','correo'=>'patricia.quispe@example.com','salario'=>'1450.50'],
        ];
        foreach ($empleados as $emp) {
            Empleado::create($emp);
        }
    }
    
}
