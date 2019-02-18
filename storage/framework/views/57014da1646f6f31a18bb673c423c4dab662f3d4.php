<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Crear una nueva coleccion</h1>
    </div>
    <div class="pull-right">
        <a href="<?php echo e(route('colecciones.index')); ?>" class="btn btn-primary">Regresar</a>
    </div>
</div>
<form action="<?php echo e(route('colecciones.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="coleccion[nombre]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="coleccion[descripcion]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>