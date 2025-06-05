<x-layout>
    <h2>Editar materia</h2>
    <div>
</x-layout>
    @foreach ($materias as $materia )
        <h4>{{  $materia ['nombre'] }}</h4>
        <h6>Estado:{{  $materia ['status'] }}</h6> 


    @endforeach