<?php $__env->startSection('content'); ?>
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Edit Coleccion
    </div>
    <div class="pull-right">
        <a href="<?php echo e(route('colecciones.index')); ?>" class="btn btn-primary">Regresar</a>
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
        <?php endif; ?>
            <form method="POST" action="<?php echo e(route('colecciones.update', $coleccion->id)); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" nombre="nombre" value=<?php echo e($coleccion->nombre); ?>/>
                    </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" descripcion="descripcion" value=<?php echo e($coleccion->descripcion); ?>/>
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>