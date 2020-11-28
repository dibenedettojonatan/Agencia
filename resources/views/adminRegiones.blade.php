@extends('layouts.plantilla')

    @section('contenido')
        <h1>Panel de administración de regiones</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                @foreach($regiones as $region)
                    
                
                <tr>
                <th>{{$region->regID}}</th>
                <th>{{$region->regNombre}}</th>
                    <th colspan="2">
                        <a href="" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
                @endforeach
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>region</td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    @endsection
