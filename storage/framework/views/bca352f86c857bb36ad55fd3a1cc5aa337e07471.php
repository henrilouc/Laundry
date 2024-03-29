<?php $__env->startSection('title'); ?>
    Validar Crédito
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h4>Validar Pagamento</h4>
                        <form action="<?php echo e(route('laundryService.show')); ?>" method="GET">

                        </form>
                    </div>
                    <div class="card-body cardStyle">

                        <?php if(isset($transactions)): ?>
                            <table id= "dataTable" class="row-border" style="width:100%">
                                <?php if(count(array($transactions)) > 0): ?>
                                    <thead>
                                    <tr>
                                        <th>Quantidade(KG)</th>
                                        <th >Valor Pago</th>
                                        <th class="text-center">Descrição</th>
                                        <th>Data</th>
                                        <th class="text-center">Comprovante</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($transaction->amount); ?></td>
                                            <td class="text-center"><?php echo e($transaction->value); ?> R$</td>
                                            <td><?php echo e($transaction->description); ?></td>
                                            <td><?php echo e(date('d/m/Y H:i ',strtotime($transaction->updated_at))); ?> </td>
                                            <?php if($transaction->paymentReceipt > 0): ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal<?php echo e($transaction->id); ?>"><span class="material-icons fa-lg">perm_media</span></button></td>
                                            <?php else: ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal<?php echo e($transaction->id); ?>" disabled><span class="material-icons fa-lg">perm_media</span></button></td>
                                            <?php endif; ?>
                                            <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo e(route('admin.payinApprove', $transaction->id)); ?>'">Aprovar</button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route('admin.payinReject', $transaction->id)); ?>'">Rejeitar</button></td>
                                        </tr>
                                        <div class="modal fade" id="fileModal<?php echo e($transaction->id); ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Comprovante de Pagamento</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-content">
                                                        <img class ="img-responsive" src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($transaction->paymentReceipt); ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Voltar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/validatePayment.blade.php ENDPATH**/ ?>