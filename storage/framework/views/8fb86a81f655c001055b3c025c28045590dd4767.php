<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-success btn-sm" href="<?php echo e(route('npanel.colecciones.index', ['order' => 'desc'])); ?>">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('npanel.colecciones.index', ['order' => 'asc'])); ?>">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Nombre</th>
                <th>Descripcion</th>
            </theader>
            <tbody>
                <?php $__currentLoopData = $colecciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coleccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($coleccion->nombre); ?>

                        </td>
                        <td>
                            <?php echo e($coleccion->descripcion); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(route('npanel.colecciones.show', $coleccion->id)); ?>" class="btn btn-info">Show</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('npanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>