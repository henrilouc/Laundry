<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h2>Consultar Extrato</h2>

                        <form action="<?php echo e(route('extract')); ?>" method="GET">

                        </form>
                    </div>
                    <div class="card-body cardStyle">
                        <?php if(isset($transactions)): ?>
                            <table id= "dataTable" class="row-border" style="width:100%">
                                <?php if(count(array($transactions)) > 0): ?>
                                    <thead>
                                    <tr>
                                        <th class="text-center" >Rol</th>
                                        <th class="text-center" >Quantidade</th>
                                        <th class="text-center" >Valor</th>
                                        <th class="text-center" >Avulso?</th>
                                        <th class="text-center" >Nome Cliente</th>
                                        <th class="text-center" >CPF</th>
                                        <th class="text-center" >Email</th>
                                        <th class="text-center" >Telefone</th>
                                        <th class="text-center" >Data Pagamento</th>
                                        <th></th>
                                        <th class="text-center" >Ações</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td class="text-center"><?php echo e($transaction->id); ?></td>
                                            <td class="text-center"><?php echo e($transaction->amount); ?>KG</td>
                                            <td class="text-center"><?php echo e($transaction->value); ?>R$</td>
                                            <td class="text-center"><?php echo e($transaction->single_purchase == 1 ? 'sim'  : 'não'); ?></td>
                                            <td class="text-center"><?php echo e($transaction->name); ?></td>
                                            <td class="text-center"><?php echo e($transaction->cpf); ?></td>
                                            <td class="text-center"><?php echo e($transaction->email); ?></td>
                                            <td class="text-center"><?php echo e($transaction->phone); ?></td>
                                            <td><?php echo e(date('d/m/Y H:i ',strtotime($transaction->created_at))); ?> </td>
                                            <?php if($transaction->paymentReceipt > 0): ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal<?php echo e($transaction->id); ?>"><span class="material-icons fa-lg">receipt_long</span></button></td>
                                            <?php else: ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal<?php echo e($transaction->id); ?>" disabled><span class="material-icons fa-lg">receipt_long</span></button></td>
                                            <?php endif; ?>
                                            <?php if($transaction->paymentReceipt > 0): ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#ClothesModal<?php echo e($transaction->id); ?>"><span class="material-icons fa-lg">checkroom</span></button></td>
                                            <?php else: ?>
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#ClothesModal<?php echo e($transaction->id); ?>" disabled><span class="material-icons fa-lg">checkroom</span></button></td>
                                            <?php endif; ?>
                                            <td class="text-center"><button type="button" class="btn" onclick="window.location='<?php echo e(route('admin.report', ['id' => $transaction->id,'download' =>'pdf'])); ?>'"><span class="material-icons fa-lg">file_download</span></button></td>
                                        </tr>
                                        <div class="modal fade" id="ClothesModal<?php echo e($transaction->id); ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Listagem de Roupas</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <ul>
                                                            <li>Camisa Branca 10kg</li>
                                                            <li>Camisa Verde 1kg</li>
                                                            <li>Camisa Azul 1kg</li>
                                                            <li>Camisa Amarela 1kg</li>
                                                        </ul>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Voltar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/extract.blade.php ENDPATH**/ ?>