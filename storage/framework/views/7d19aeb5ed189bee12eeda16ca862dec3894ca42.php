<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastre-se</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('user.register')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if(session('success')): ?>
                                <div>
                                    <?php echo e(session('message')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="name" class=" form-label text-md-end">Nome</label>
                                        <input id="name" type="text" class="form-control " value="<?php echo e(old('name')); ?>" name="name"  autocomplete="name" >
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="cpf" class=" form-label text-md-end">CPF</label>
                                        <input id="cpf" type="text" class="form-control" value="<?php echo e(old('cpf')); ?>" name="cpf" autocomplete="cpf" >
                                        <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="phone" class=" form-label text-md-end">Telefone</label>
                                        <input id="phone" type="text" class="form-control " value="<?php echo e(old('phone')); ?>" name="phone"  autocomplete="phone">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="email" class=" form-label text-md-end">Email</label>
                                        <input id="email" type="email" class="form-control " value="<?php echo e(old('email')); ?>" name="email"  value="" autocomplete="email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="birth" class="form-label ">Data de Nascimento</label>
                                        <input id="birth" type="date" class="form-control " value="<?php echo e(old('birth')); ?>" name="birth"   autocomplete="birth">
                                        <?php $__errorArgs = ['birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password" class=" form-label text-md-end">Senha</label>
                                        <input id="password" type="password" class="form-control " value="<?php echo e(old('password')); ?>" name="password" autocomplete="new-password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password-confirm" class=" form-label text-md-end">Confirmar Senha</label>
                                        <input id="password-confirm" name="password_confirmation" type="password" class="form-control" value="<?php echo e(old('password_confirmation')); ?>" autocomplete="new-password">
                                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" ><small><strong><?php echo e($message); ?></strong></small></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Confirmar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/userRegister.blade.php ENDPATH**/ ?>