<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="<?php echo e(route('panel.productos.create')); ?>" role="button">Agregar un producto</a>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('panel.productos.index', ['order' => 'desc'])); ?>">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('panel.productos.index', ['order' => 'asc'])); ?>">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
    <?php if(!$data['productos']->isEmpty()): ?>
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
                            <form action="<?php echo e(route('panel.productos.destroy', $producto->id)); ?>" method="POST">
                            <a href="<?php echo e(route('panel.productos.show', $producto->id)); ?>" class="btn btn-info">Show</a>
                            <a href="<?php echo e(route('panel.productos.edit', $producto->id)); ?>" class="btn btn-primary">Edit</a>
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>