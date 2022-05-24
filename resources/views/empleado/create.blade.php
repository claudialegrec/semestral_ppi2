<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- Input para nombre del empleado -->
  <div style="padding:10px">
    <label for="Nombre">Nombre</label>
    <br>
    <input type="text" name="Nombre" id="Nombre"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <br>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno"></input>
  </div>

  <br>

  <!-- Input para apellido paterno del empleado -->
  <div style="padding:10px">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <br>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno"></input>
  </div>

  <br>

  <!-- Input para correo del empleado -->
  <div style="padding:10px">
    <label for="Correo">Correo</label>
    <br>
    <input type="text" name="Correo" id="Correo"></input>
  </div>

  <br>

  <!-- Input para foto del empleado -->
  <div style="padding:10px">
    <label for="Foto">Foto</label>
    <br>
    <input type="file" name="Foto" id="Foto"></input>
  </div>

  <br>

  <input type="submit" value="Guardar datos"></input>
</form>