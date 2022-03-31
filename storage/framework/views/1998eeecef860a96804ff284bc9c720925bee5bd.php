<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Comprar Crédito</h2>
    <div class="row">
        <div class="col-sm ">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-white bg-secondary" data-toggle="tab" href="#nav-payments" role="tab" aria-selected="false">Pagamento</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-shopping" role="tabpanel">
                    <form method="post" action="'Shopping/Payments'">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="card text-center border-secondary">
                                    <div class="card-header ">
                                        <output id="imageShopping">
                                            <img src="" class="responsive-img" />

                                        </output>
                                    </div>
                                    <div class="card-body">
                                        <div class="caption text-center">
                                            <label class="btn btn-outline-secondary" for="files">Comprovante</label>
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-5" style="padding-left: 0px">
                                <div class="card border-secondary">
                                    <div class="card-header text-white bg-secondary">
                                        <h4>Realizar compra</h4>
                                    </div>
                                    <div class="card-body cardStyle">
                                        <div class="form-group">
                                            <label>
                                                Quilo de Roupa
                                            </label>
                                            <span class="text-danger labelCompra_Importe">
                                                <label class="text-success "></label>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Payments" placeholder="00.00 KG" id="Payments" class="form-control" autocomplete="off" required />

                                        </div>
                                        <div class="form-group">
                                            <label id="labelCompra_Debt">
                                                Valor a Pagar
                                            </label>
                                            <br />
                                            <span class="text-danger labelCompra_Importe">

                                                <label class="text-success labelCompra_Importe" id="labelCompra_Debts">0.00
                                                </label>
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
        <div class="col-sm-6 col-md-7">
            <div class="card border-secondary ">
                <div class="card-header text-white bg-secondary">
                    <form method="post" action="'Shopping/AddShoppings' ">
                        <div class="row">
                            <div class="form-group">
                                <input type="text" name="search" placeholder="Buscar" class="form-control" autofocus autocomplete="off" />
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info btn-sm">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body cardStyle">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                Quantidade(KG)
                            </th>
                            <th>
                                Valor Pago
                            </th>
                            <th>
                                Data
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array(["results"])) {
                        foreach (["results"] as $key => $value) {

                        ?>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <a href="" class="btn btn-outline-warning btn-sm">
                                    Pendente
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        } else {
                        ?>
                        <p class="text-danger"></p>
                        <?php } ?>
                        </tbody>
                    </table>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/laundryService.blade.php ENDPATH**/ ?>
