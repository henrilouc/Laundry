<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Consultar Extrato</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-body cardStyle">

                        <?php if(isset($laundryServices)): ?>
                            <table id="dataTable" class="table table-hover">
                                <?php if(count(array($laundryServices)) > 0): ?>
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Quantidade(KG)</th>
                                        <th>Valor Pago</th>
                                        <th>Descrição</th>
                                        <th>Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $laundryServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laundryService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($laundryService->laundryUser->name); ?></td>
                                            <td><?php echo e($laundryService->kilo); ?></td>
                                            <td><?php echo e($laundryService->credit); ?></td>
                                            <td><?php echo e($laundryService->description); ?></td>
                                            <td><?php echo e(date('d/m/Y H:i ',strtotime($laundryService->updated_at))); ?> </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>

                                        <tr><td>Nenhum registro encontrado.</td></tr>
                                    <?php endif; ?>
                                    </tbody>
                            </table>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>

                            <span class="text-danger">
                                <label class="text-success "></label>
                            </span>
                            </label>
                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/extract.blade.php ENDPATH**/ ?>