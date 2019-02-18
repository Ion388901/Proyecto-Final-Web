<?php $__env->startSection('content'); ?>
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Show Producto
    </div>
    <div class="pull-right">
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-primary">Regresar</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Nombre:</label>
            <?php echo e($producto->nombre); ?>

        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Descripcion:</label>
            <?php echo e($producto->descripcion); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Precio:</label>
            <?php echo e($producto->precio); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Descripcion:</label>
            <?php echo e($producto->descuento); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>