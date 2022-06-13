
<?php $__env->startSection('title'); ?>
    Gerir Preço
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="<?php echo e(route('managePrice.form')); ?>"  method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary ">
                            <div class="card-header text-white bg-secondary">
                                <h4>Registrar Preço</h4>
                            </div>
                            <div class="card-body cardStyle">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="multiplier" class="form-label">Valor(R$)/KG</label>
                                            <input type="number" name="multiplier" id="multiplier" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="min" class="form-label">Minimo(KG)</label>
                                            <input type="number" name="min" id="min" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="max" class="form-label">Máximo(KG)</label>
                                            <input type="number" name="max" id="max" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-static mb-4">

                                            <label for="user_type_id" class="ps-sm-5">Tipo de Cliente</label>
                                            <select class="form-control" name="user_type_id" id="user_type_id" onchange="listUser(this)" required>
                                                <option class="text-center" disabled selected>::Selecione::</option>
                                                <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option class="text-center" value="<?php echo e($userType->id); ?>"><?php echo e("$userType->name"); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-dynamic my-3">
                                            <textarea type="text" name="description"  placeholder="Descrição" rows="4" class="form-control" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="row">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/managePrice.blade.php ENDPATH**/ ?>