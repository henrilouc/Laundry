<?php $__env->startSection('title'); ?>
    Válidar Usuário
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-secondary ">
                        <div class="card-header text-white bg-secondary">
                            <h4>Gerir Solicitações</h4>
                        </div>
                        <div class="card-body cardStyle">
                            <form>
                                <?php echo csrf_field(); ?>
                                <?php if(isset($users)): ?>
                                    <table id="dataTable" class="table table-hover">
                                        <?php if(count(array($users)) > 0): ?>
                                            <thead>
                                            <tr>
                                                <th class="text-center">CPF</th>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Telefone</th>
                                                <th class="ps-5">Tipo</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                        <td class="text-center"><?php echo e($user->cpf); ?></td>
                                                        <td class="text-center"><?php echo e($user->name); ?></td>
                                                        <td class="text-center"><?php echo e($user->email); ?></td>
                                                        <td class="text-center"><?php echo e($user->phone); ?></td>
                                                        <td class="text-center">
                                                        <form action="<?php echo e(route('admin.approves')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <select class="form-control w-40" name="tipo" required> &nbsp; &nbsp; &nbsp;
                                                                            <option class="text-center" disabled selected>::Selecione::</option>
                                                                            <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option class="text-center" value="<?php echo e($userType->id); ?>"><?php echo e($userType->name); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">

                                                                    <input name="id" type="hidden" value="<?php echo e($user->id); ?>">&nbsp; &nbsp; &nbsp;
                                                                    <button type="submit" class="btn btn-success">Aprovar</button> &nbsp; &nbsp; &nbsp;
                                                                    <a class="btn btn-danger" href="<?php echo e(route('admin.reject', $user->id)); ?>">Rejeitar</a> &nbsp; &nbsp; &nbsp;
                                                                </div>
                                                            </div>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/admin.blade.php ENDPATH**/ ?>