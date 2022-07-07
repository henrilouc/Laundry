<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-shopping" role="tabpanel">
                        <form action="<?php echo e(route('laundryService.form')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-7 pe-0">
                                <div class="card border-secondary">
                                    <div class="card-header text-white bg-secondary">
                                        <h2>Comprar Crédito</h2>
                                    </div>
                                    <?php if(count($errors) > 0): ?>
                                        <div class="alert alert-danger rounded-0 rounded-bottom">
                                            <ul>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="float-start text-white"><strong><small><?php echo e($error); ?></small></strong></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-body cardStyle ">
                                        <div class="col-md-5">
                                            <div class="input-group input-group-static my-3 ">
                                                <label>Quilo de Roupa</label>
                                                <label class="form-label " for="Quantity" ></label>
                                                <input type="number" name="amount" id="Quantity" class="form-control" oninput="convertAmount(<?php echo e($prices); ?>)" autocomplete="off"  />
                                            </div>
                                        </div>
                                        <div class="col-md-12 bg-gradient-faded-light" >
                                            <div class="input-group input-group-dynamic my-3">
                                                <textarea type="text" rows="5" name="description" id="description" placeholder="Descrição" class="form-control"  ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="labelCompra_Debt">
                                                Valor a Pagar
                                            </label>
                                            <br />
                                            <span class="text-success">

                                                <label class="text-success" id="Price" >0.00</label> R$
                                            </span>
                                        </div>
                                        <div class ="text-center form-group">
                                            <label class="btn btn-outline-secondary" for="files">Comprovante</label>
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" >

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="text-center form-group">
                                                    <button type="submit" class="btn btn-primary" id="payment">Comprar</button>
                                                </div>
                                                <div class="form-group">
                                                    <input name="value" type="hidden" value="1" />
                                                    <input name="credit"  type="hidden" id="Credit" value="" />
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
            <div class="col-md-6">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h2>Consultar Extrato</h2>
                    </div>
                    <div class="card-body cardStyle">

                        <?php if(isset($transactions)): ?>
                            <table id= "dataTable" class="row-border" style="width:100%">
                                <?php if(count(array($transactions)) > 0): ?>
                                    <thead>
                                    <tr>
                                        <th>Quantidade(KG)</th>
                                        <th>Descrição</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($transaction->amount); ?></td>
                                            <td><?php echo e($transaction->description); ?></td>
                                            <td><?php echo e(date('d/m/Y H:i ',strtotime($transaction->updated_at))); ?> </td>
                                            <td><a class="btn-outline-light btn-sm <?php echo e($transaction->status == 'A' ? 'alert-success'  : (($transaction->status == 'R')  ? "alert-danger" : 'alert-warning')); ?>" ><?php echo e($transaction->status == 'A' ? 'Aprovado' : (($transaction->status == 'R')  ? "Rejeitado" : "Pendente")); ?></a></td>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/laundryService.blade.php ENDPATH**/ ?>