@extends('layouts.app')
@section('content')

<div class="container">

  @if(Session::has('mensaje'))

  {{ Session::get('mensaje') }}

  @endif
  <div style="margin-bottom:10px">
    <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
  </div>

  <table class="table table-striped">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>

        <th>Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach( $empleados as $empleado )
      <tr>
        <td>{{ $empleado-> id }}</td>

        <td>
          <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" width="100" alt="">
        </td>

        <td>{{ $empleado-> Nombre }}</td>
        <td>{{ $empleado-> ApellidoPaterno }}</td>
        <td>{{ $empleado-> ApellidoMaterno }}</td>
        <td>{{ $empleado-> Correo }}</td>
        <td> 
        
        <a href="{{  url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">
          Editar
        </a>
        
        | 
        
        <form action="{{  url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
          @csrf
          {{  method_field('DELETE') }}
          <input type="submit" onclick="return confirm('¿Seguro que quieres borrar este registro?')" class="btn btn-danger" value="Borrar">
        </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection