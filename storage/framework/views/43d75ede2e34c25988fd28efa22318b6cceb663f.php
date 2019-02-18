<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Crear un nuevo producto</h1>
    </div>
</div>
<form action="<?php echo e(route('producto.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Producto Id</label>
                <input type="text" class="form-control" name="prod[prod_id]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="prod[nombre]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="prod[descripcion]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio</label>
                <input type="number" class="form-control" name="prod[precio]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descuento</label>
                <input type="number" class="form-control" name="prod[precio_desc]">
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