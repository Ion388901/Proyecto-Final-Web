<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="<?php echo e(route('coleccion.create')); ?>" role="button">Agregar una coleccion</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Coleccion Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </theader>
            <tbody>
                <?php $__currentLoopData = $coleccion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($colc->coleccion_id); ?>

                        </td>
                        <td>
                            <?php echo e($colc->nombre); ?>

                        </td>
                        <td>
                            <?php echo e($colc->descripcion); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>