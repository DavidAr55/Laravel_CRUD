
<?php $__env->startSection('content'); ?>
<div class="container">

    <a href="<?php echo e(url('empleado/create')); ?>">Registrar nuevo empleado</a>

    <?php if(Session::has('mensaje')): ?>
        <p style="color: lime;"><?php echo e(Session::get('mensaje')); ?></p>
    <?php endif; ?>

    <table class="table table-light">
        <thead>
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
            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($empleado->id); ?></td>
                <td><img src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" width="100" alt="<?php echo e($empleado->id); ?>"></td>
                <td><?php echo e($empleado->Nombre); ?></td>
                <td><?php echo e($empleado->ApellidoPaterno); ?></td>
                <td><?php echo e($empleado->ApellidoMaterno); ?></td>
                <td><?php echo e($empleado->Correo); ?></td>
                <td>
                    <a href="<?php echo e(url('/empleado/' . $empleado->id . '/edit')); ?>">
                        Editar
                    </a>
                    |
                    <form action="<?php echo e(url('/empleado/' . $empleado->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <input type="submit" onclick="return confirm('¿Quieres borrar esta fila')" value="Borrar">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\laravel-crud\resources\views/empleado/index.blade.php ENDPATH**/ ?>