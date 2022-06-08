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
                                                <th class="ps-6">Tipo</th>

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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/admin.blade.php ENDPATH**/ ?>