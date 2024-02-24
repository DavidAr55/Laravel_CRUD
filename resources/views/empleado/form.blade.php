<h1>{{ $modo }}</h1>
<div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : ''; }}">
</div>
<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno:</label>
    <input type="text" class="form-control" id="ApellidoPaterno" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : ''; }}">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : ''; }}">
</div>
<div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" id="Correo" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : ''; }}">
</div>
<div class="form-group">
    <label for="Foto">Foto:</label>
    @if (isset($empleado->Foto))
        <p>{{ $empleado->Foto }}</p>
        <img src="{{ asset('storage/' . $empleado->Foto) }}" width="100" alt="{{ $empleado->Nombre }}">
    @endif
    <input type="file" class="form-control-file" id="Foto" name="Foto">
</div>
<button type="submit" class="btn btn-primary">{{ $modo }}</button>
