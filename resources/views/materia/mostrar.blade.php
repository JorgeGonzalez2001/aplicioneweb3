<x-layout>
    <p>Mostrar Materias</p>
</x-layout>

<div>
    @foreach ($materias as $materia )
        <h4>{{  $materia ['nombre'] }}</h4>
        <h6>{{  $materia ['ciclo'] }}</h6> 
    @endforeach
</div>