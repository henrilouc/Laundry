<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Gerir Venda</h2>
        <div class="row">
            <div class="col-sm">
                <form  action="<?php echo e(route('manageSale.form')); ?>"  method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 0px">
                            <div class="card border-secondary ">
                                <div class="card-header text-white bg-secondary">
                                    <h4>Registrar Venda</h4>
                                </div>
                                <div class="card-body cardStyle">
                                    <div class="compra">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group input-group-static mb-4">
                                                    <select class="form-control" name="user_id" onchange="listUser(this)" required>
                                                        <option disabled selected>::CPF::</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e("$user->cpf - $user->name"); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <div class="input-group input-group-static mb-4">
                                                    <select class="form-control userData" name="name" id="name" disabled="disabled">
                                                        <option disabled selected>::Nome::</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" readonly>
                                                <div class="input-group input-group-static mb-4">
                                                    <select class="form-control userData" name="birth" id="birth" disabled="disabled">
                                                        <option disabled selected>::Email::</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <div class="input-group input-group-static mb-4">
                                                    <select class="form-control userData" name="phone" id="phone" disabled="disabled">
                                                        <option disabled selected>::Telefone::</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->phone); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input id="chkBuy" name="chkBuy" type="checkbox" data-toggle="toggle">
                                        <label for="chkBuy"><h5>Compra Avulsa</h5></label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label for="Quantity" >Quilo de Roupa</label>
                                            <input type="number" name="amount" placeholder="00.00 KG" id="Quantity" class="form-control" oninput="convertAmount()"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label for="description">Descrição</label>
                                            <input type="text" name="description" id="description" placeholder="Descrição"  class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3 caption text-center">
                                            <label id="labelCompra_Debt">Valor a Pagar</label>
                                            <br />
                                            <span class="text-success">
                                                <label class="text-success" id="Price" >0.00</label> R$
                                             </span>
                                        </div>
                                        <div class="form-group text-center col-md-2">
                                            <label id="labelCompra_Debt">Forma de Pagamento</label>
                                            <div class="input-group input-group-static mb-4">
                                                <select class="form-control userData" name="paymentMethod" id="paymentMethod">
                                                    <option class="text-center" value="1">Saldo</option>
                                                    <option class="text-center" value="2">Cartão de Débito</option>
                                                    <option class="text-center" value="3">Cartão de Crédito</option>
                                                    <option class="text-center" value="4">Dinheiro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 mt-2 caption text-center">
                                            <br/>
                                            <label class="btn btn-outline-secondary" for="files">Comprovante</label>
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" >
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <span class="text-danger labelCompra_Importe">
                                            <label class="text-success labelCompra_Importe" id="labelCompra_Importe"> </label>
                                        </span>
                                    </div>
                                    <div id="row">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="input-group input-group-outline my-3 ">
                                                    <label for="name" class=" form-label text-md-end">Tipo de Roupa</label>
                                                    <input id=amount" type="text" class="form-control <?php $__errorArgs = ['cloth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('cloth')); ?>" name="cloth" autocomplete="name" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group input-group-outline my-3 ">
                                                    <label for="amount" class="form-label">Quantidade</label>
                                                    <input id="clothAmount" type="text" class="form-control text-center" value="<?php echo e(old('clothAmount')); ?>" name="clothAmount"  autocomplete="amount" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-danger my-3" id="DeleteRow" type="button">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="newinput"></div>
                                    <button id="rowAdder" type="button" class="btn btn-dark">
                                        <span class="bi bi-plus-square-dotted"> </span> ADD
                                    </button>
                                    <div class="row">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info">Debitar</button>
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
        </div>
    </div>
    <script type="text/javascript">

        $('#rowAdder').click(function () {
            let newRowAdd =
                '<div id="row"'+
                ' <div class="row mb-3">'+
                '<div class="col-md-4">'+
                '<div class="input-group input-group-outline my-3 ">'+
                '<label for="cloth" class="form-label text-md-end"></label>'+
                '<input id="cloth" type="text" class="form-control"  name="cloth" >'+
                '</div>'+
                '</div>'+
                '<div class="col-md-2">'+
                '<div class="input-group input-group-outline my-3 ">'+
                '<label for="clothAmount" class="form-label text-md-end"></label>'+
                '<input id="clothAmount" type="text" class="form-control text-center" name="clothAmount">'+
                '</div>'+
                '</div>'+
                '<div class="col-md-4">'+
                '<button class="btn btn-danger my-3" id="DeleteRow" type="button">'+
                '<i class="bi bi-trash"></i> Delete'+
                '</button>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Programming\Laundry\resources\views/manageSale.blade.php ENDPATH**/ ?>