<?php $__env->startSection('content'); ?>
    <div>
        <div class="mx-auto pull-right">
            <section class="contact__block contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:40px">
                            <h4>Gerir Solicitações</h4><hr>
                            <form>
                                <?php echo csrf_field(); ?>
                                <?php if(isset($users)): ?>
                                    <table id="dataTable" class="table table-hover">
                                        <?php if(count(array($users)) > 0): ?>
                                            <thead>
                                            <tr>
                                                <th>CPF</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Telefone</th>
                                                <th>Tipo</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                        <td><?php echo e($user->cpf); ?></td>
                                                        <td><?php echo e($user->name); ?></td>
                                                        <td><?php echo e($user->email); ?></td>
                                                        <td><?php echo e($user->phone); ?></td>
                                                        <td>
                                                        <form action="<?php echo e(route('admin.approves')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <select class="custom-select w-40" name="tipo" required> &nbsp; &nbsp; &nbsp;
                                                                <option disabled selected>::Selecione::</option>
                                                                <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($userType->id); ?>"><?php echo e($userType->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <input name="id" type="hidden" value="<?php echo e($user->id); ?>">&nbsp; &nbsp; &nbsp;
                                                            <button type="submit" class="btn btn-success">Aprovar</button> &nbsp; &nbsp; &nbsp;
                                                            <a class="btn btn-danger" href="<?php echo e(route('admin.reject', $user->id)); ?>">Rejeitar</a> &nbsp; &nbsp; &nbsp;
                                                        </form>
                                                        </td>
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