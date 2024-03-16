<h1><?php echo e($modo); ?></h1>
<div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo e(isset($empleado->Nombre) ? $empleado->Nombre : ''); ?>">
</div>
<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno:</label>
    <input type="text" class="form-control" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php echo e(isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : ''); ?>">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php echo e(isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : ''); ?>">
</div>
<div class="form-group">
    <label for="Correo">Correo:</label>
    <input type="email" class="form-control" id="Correo" name="Correo" value="<?php echo e(isset($empleado->Correo) ? $empleado->Correo : ''); ?>">
</div>
<div class="form-group">
    <label for="Foto">Foto:</label>
    <?php if(isset($empleado->Foto)): ?>
        <p><?php echo e($empleado->Foto); ?></p>
        <img src="<?php echo e(asset('storage/' . $empleado->Foto)); ?>" width="100" alt="<?php echo e($empleado->Nombre); ?>">
    <?php endif; ?>
    <input type="file" class="form-control-file" id="Foto" name="Foto">
</div>
<button type="submit" class="btn btn-primary"><?php echo e($modo); ?></button>
<?php /**PATH D:\xampp\htdocs\Laravel\laravel-crud\resources\views/empleado/form.blade.php ENDPATH**/ ?>