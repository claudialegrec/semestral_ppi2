  <!-- Input para nombre del empleado -->
  <div style="padding:10px">
    <label for="Nombre">Nombre</label>
    <br>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <br>
    <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <br>
    <input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno"></input>
  </div>

  <br>

  <!-- Input para correo del empleado -->
  <div style="padding:10px">
    <label for="Correo">Correo</label>
    <br>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo"></input>
  </div>

  <br>

  <!-- Input para foto del empleado -->
  <div style="padding:10px">
    <label for="Foto">Foto</label>
    <br>
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
    @endif
    <input type="file" name="Foto" value="" id="Foto"></input>
  </div>

  <br>

  <input type="submit" value="Guardar datos"></input>