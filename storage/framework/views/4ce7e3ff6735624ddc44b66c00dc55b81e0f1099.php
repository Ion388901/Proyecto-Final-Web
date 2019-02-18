<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="<?php echo e(route('producto.create')); ?>" role="button">Agregar un producto</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Producto Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Descuento</th>
            </theader>
            <tbody>
                <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($prod->prod_id); ?>

                        </td>
                        <td>
                            <?php echo e($prod->nombre); ?>

                        </td>
                        <td>
                            <?php echo e($prod->descripcion); ?>

                        </td>
                        <td>
                            <?php echo e($prod->precio); ?>

                        </td>
                        <td>
                            <?php echo e($prod->precio_desc); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>