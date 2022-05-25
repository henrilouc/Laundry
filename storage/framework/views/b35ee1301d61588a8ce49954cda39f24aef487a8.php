

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Gerir Preço</h2>
        <div class="row">
            <div class="col-sm">
                <form  action="<?php echo e(route('managePrice.form')); ?>"  method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 0px">
                            <div class="card border-secondary ">
                                <div class="card-header text-white bg-secondary">
                                    <h4>Registrar Preço</h4>
                                </div>
                                <div class="card-body cardStyle">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label>Valor(R$)/KG</label>
                                            <input type="number" name="multiplier" class="form-control" autocomplete="off" required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Minimo(KG)</label>
                                            <input type="number" name="min" class="form-control" autocomplete="off" required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Máximo(KG)</label>
                                            <input type="number" name="max" class="form-control" autocomplete="off" required />
                                            </div>
                                        <div class="form-group col-md-6">
                                            <label>Descrição</label>
                                            <textarea type="text" name="description"  class="form-control" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <label>
                                                Tipo de Cliente
                                                <select class="custom-select" name="user_type_id" onchange="listUser(this)" required>
                                                    <option disabled selected>::Selecione::</option>
                                                    <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($userType->id); ?>"><?php echo e("$userType->name"); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-outline-primary">Registrar</button>
                                            </div>
                                            <div class="form-group text-center">
                                                <a class="btn btn-outline-warning">Voltar</a>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\projetos\laravel\Laundry\resources\views/managePrice.blade.php ENDPATH**/ ?>