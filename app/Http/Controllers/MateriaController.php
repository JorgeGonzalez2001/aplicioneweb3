<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $materias = [
        [
            'id' => 1,
            'nombre' => 'Aplicaciones  Web II',
            'horas_semana' => 4,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
        [
            'id' => 2,
            'nombre' => 'Aplicaciones  Móviles II',
            'horas_semana' => 4,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
        [
            'id' => 3,
            'nombre' => 'Fundamentos de Programación',
            'horas_semana' => 7,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
    ];

    public function index() {
        return view("materia.mostrar", ['materias' => $this->materias ]);
      }  

      public function crear() {
          return view('materia.crear');
      }  

      public function editar() {
          return view('materia.editar',['materias' => $this->materias]);
      } 

      public function eliminar() {
          return view('materia.eliminar');
      } 
}
