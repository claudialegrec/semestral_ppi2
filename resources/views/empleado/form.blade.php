  <!-- Input para nombre del empleado -->
  
  <div>
    <h1> {{ $modo }} empleado </h1>
  </div>

  @if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach( $errors->all() as $error )
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>

  @endif
  
  <div style="padding:10px">
    <label for="Nombre">Nombre</label>
    <br>
    <input type="text" name="Nombre" 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <br>
    <input type="text" name="ApellidoPaterno" 
    value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <br>
    <input type="text" name="ApellidoMaterno" 
    value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoPaterno') }}" id="ApellidoMaterno"></input>
  </div>

  <br>

  <!-- Input para correo del empleado -->
  <div style="padding:10px">
    <label for="Correo">Correo</label>
    <br>
    <input type="text" name="Correo" 
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo"></input>
  </div>

  <br>

  <!-- Input para foto del empleado -->
  <div style="padding:10px">
    <label for="Foto">Foto</label>
    <br>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
    @endif
    <input type="file" name="Foto" value="" id="Foto"></input>
  </div>

  <br>

  <input type="submit" class="btn btn-success" value="{{ $modo }} datos"></input>

  <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>