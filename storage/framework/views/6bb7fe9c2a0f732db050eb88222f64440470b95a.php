

<?php $__env->startSection('content'); ?>
    <div>
        <div class="mx-auto pull-right">
            <section class="contact__block contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:40px">
                            <h4>Gerir Solicitações</h4><hr>
                            <form action="<?php echo e(route('user.search')); ?>" method="GET">

                            <?php if(isset($users)): ?>
                                <table id="dataTable" class="table table-hover">
                                    <?php if(count(array($users)) > 0): ?>
                                        <thead>
                                        <tr>
                                            <th>CPF</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->cpf); ?></td>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->phone); ?></td>
                                                <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo e(route('admin.approve', $user->id)); ?>'">Aprovar</button></td>
                                                <td><button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route('admin.reject', $user->id)); ?>'">Rejeitar</button></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr><td>Nenhum registro encontrado.</td></tr>
                                    <?php endif; ?>
                                        </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/admin.blade.php ENDPATH**/ ?>