<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            ¡Bienvenido!
        </div>
    </div>
    <?php if(Auth::check()): ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <td>
                        <?php echo e(Auth::user()->name); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        Correo
                    </th>
                    <td>
                        <?php echo e(Auth::user()->email); ?>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="<?php echo e(route('npanel.user.logout')); ?>">Cerrar sesión</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <a href="<?php echo e(route('npanel.user.signin')); ?>">Iniciar sesión</a>
                </li>
                <li>
                    <a href="<?php echo e(route('npanel.user.register')); ?>">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <a href="<?php echo e(route('npanel.productos.index')); ?>">Índice de productos</a>
                </li>
                <li>
                    <a href="<?php echo e(route('npanel.colecciones.index')); ?>">Índice de colecciones</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('npanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>