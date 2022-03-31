<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Comprar Crédito</h2>
        <div class="row">
            <div class="col-sm ">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-white bg-secondary" data-toggle="tab" href="#nav-payments" role="tab" aria-selected="true">Pagamento</a>
                        <a class="nav-item nav-link text-white bg-secondary" data-toggle="tab" href="#nav-shopping" role="tab" aria-selected="false">Payments</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show" id="nav-shopping" role="tabpanel">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6 col-md-8" style="padding-right: 0px">
                                    <div class="card border-secondary ">
                                        <div class="card-header text-white bg-secondary">
                                            <h4>Registrar Compra Avulsa </h4>
                                        </div>
                                        <div class="card-body cardStyle">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Nome" class="form-control" autofocus autocomplete="off" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="CPF" placeholder="CPF" class="form-control" id="CPF" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Telefone" class="form-control" autocomplete="off"  id="phone" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label>Quilo de Roupa</label>
                                                <span class="text-danger">
                                                    <label class="text-success "></label>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="kilo" placeholder="00.00 KG" id="Quantity" class="form-control" oninput="convertAmount()" autocomplete="off" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <span class="text-danger">
                                                    <label class="text-success "></label>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="description" placeholder="Descrição"  class="form-control" required />
                                            </div>
                                            <div class="form-group">
                                                <label id="labelCompra_Debt">Valor a Pagar</label>
                                                <br />
                                                <span class="text-success">
                                                    <label class="text-success" id="Price" >0.00</label> R$
                                                 </span>
                                            </div>
                                            <div class="caption text-center">
                                                <label class="btn btn-outline-secondary" for="files">Comprovante</label>
                                                <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" required>
                                            </div>
                                            <div class="form-group">
                                                <span class="text-danger labelCompra_Importe">
                                                    <label class="text-success labelCompra_Importe" id="labelCompra_Importe"> </label>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-outline-primary">Comprar</button>
                                                </div>
                                                <div class="form-group">
                                                    <a class="btn btn-outline-warning">Voltar</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input name="credit"  type="hidden" id="Credit" value="" />
                                                <label class="text-danger"> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show active" id="nav-payments" role="tabpanel">
                        <form action="<?php echo e(route('laundryService.form')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xl-7 col-md-5">
                                    <div class="card border-secondary">
                                        <div class="card-header text-white bg-secondary">
                                            <h4>Realizar compra</h4>
                                        </div>
                                        <div class="card-body cardStyle">
                                            <div class="form-group">
                                                <label>Quilo de Roupa</label>
                                                <span class="text-danger">
                                                <label class="text-success "></label>
                                            </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="kilo" placeholder="00.00 KG" id="Quantity" class="form-control" oninput="convertAmount()" autocomplete="off" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <span class="text-danger">
                                                <label class="text-success "></label>
                                            </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="description"  class="form-control" required />

                                            </div>
                                            <div class="form-group">
                                                <label id="labelCompra_Debt">Valor a Pagar</label>
                                                <br />
                                                <span class="text-success">
                                                    <label class="text-success" id="Price" >0.00</label> R$
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-outline-primary" id="payment">Comprar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="Shopping/Cancel" class="btn btn-outline-warning">Voltar</a>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="value" type="hidden" value="1" />
                                                        <input name="credit"  type="hidden" id="Credit" value="" />
                                                        <input name="user_id" type="hidden" value="1" />
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
            <div class="col-md-8">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h4>Validar Pagamento</h4>
                        <form action="<?php echo e(route('laundryService.show')); ?>" method="GET">

                        </form>
                    </div>
                    <div class="card-body cardStyle">

                        <?php if(isset($laundryServices)): ?>
                            <table id= "dataTable" class="table table-hover">
                                <?php if(count(array($laundryServices)) > 0): ?>
                                    <thead>
                                    <tr>
                                        <th>Quantidade(KG)</th>
                                        <th>Valor Pago</th>
                                        <th>Descrição</th>
                                        <th>Data</th>
                                        <th>Comprovante</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $laundryServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laundryService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($laundryService->kilo); ?></td>
                                            <td><?php echo e($laundryService->credit); ?></td>
                                            <td><?php echo e($laundryService->description); ?></td>
                                            <td><?php echo e(date('d/m/Y H:i ',strtotime($laundryService->updated_at))); ?> </td>
                                            <td>Arquivo</td>
                                            <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo e(route('admin.payinApprove', $laundryService->id)); ?>'">Aprovar</button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route('admin.payinReject', $laundryService->id)); ?>'">Rejeitar</button></td>
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
                                Importe total:
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/manageCredit.blade.php ENDPATH**/ ?>