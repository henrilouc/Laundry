<?php $__env->startSection('title'); ?>
    Gerir Roupas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="<?php echo e(route('manageCloth.form')); ?>"  method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary rounded-0">
                            <div class="card-header text-white bg-secondary">
                                <h4>Registrar Tipo de Roupa</h4>
                            </div>
                            <div class="card-body cardStyle ">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="name" class="form-label">Tipo de Roupa</label>
                                            <input type="text" name="name" id="name" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group input-group-dynamic my-3">
                                            <textarea type="text" name="description"  placeholder="Descrição" rows="4" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info">Confirmar</button>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary rounded-0 rounded-bottom">

                            <div class="card-body cardStyle">
                                <?php if(isset($clothes)): ?>
                                    <table id= "dataTable" class="row-border" style="width:100%">
                                        <?php if(count(array($clothes)) > 0): ?>
                                            <thead>
                                            <tr>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Descrição</th>
                                                <th class="text-center"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $clothes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cloth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($cloth->name); ?></td>
                                                    <td class="text-center"><?php echo e($cloth->description); ?></td>
                                                    <td><button type="button" class="btn" onclick="window.location='<?php echo e(route('manageCloth.remove', $cloth->id)); ?>'"><span class="material-icons">delete</span></button></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php endif; ?>
                                            </tbody>
                                    </table>
                                <?php else: ?>
                                    <table id= "dataTable" class="row-border" style="width:100%">
                                        <tr><td>Nenhum registro encontrado.</td></tr>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/manageCloth.blade.php ENDPATH**/ ?>