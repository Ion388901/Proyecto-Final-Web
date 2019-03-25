<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-success btn-sm" href="<?php echo e(route('productos.index', ['order' => 'desc'])); ?>">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('productos.index', ['order' => 'asc'])); ?>">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Descuento</th>
            </theader>
            <tbody>
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($producto->nombre); ?>

                        </td>
                        <td>
                            <?php echo e($producto->descripcion); ?>

                        </td>
                        <td>
                            <?php echo e($producto->precio); ?>

                        </td>
                        <td>
                            <?php echo e($producto->descuento); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-info">Show</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>