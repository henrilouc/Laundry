@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gerir Crédito</h2>
        <div class="row">
            <div class="col-sm">
                <form  action="{{route('manageLaundryService.form')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 0px">
                            <div class="card border-secondary ">
                                <div class="card-header text-white bg-secondary">
                                    <h4>Registrar Compra</h4>
                                </div>
                                <div class="card-body cardStyle">
                                    <div class="compra">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <select class="custom-select" name="user_id" onchange="listUser(this)" required>
                                                    <option disabled selected>::CPF::</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{"$user->cpf - $user->name"}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" >
                                                <select class="custom-select userData" name="name" id="name" disabled="disabled">
                                                    <option disabled selected>::Nome::</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6" readonly>
                                                <select class="custom-select userData" name="birth" id="birth" disabled="disabled">
                                                    <option disabled selected>::Email::</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->email}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" >
                                                <select class="custom-select userData" name="phone" id="phone" disabled="disabled">
                                                    <option disabled selected>::Telefone::</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->phone}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="compra-avulsa" style="display: none">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="cpf" id="cpf" placeholder="CPF"  class="form-control" autocomplete="off" />
                                            </div>
                                            <div class="form-group col-md-6" >
                                                <input type="text" name="name" id="name" placeholder="Nome"  class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6" readonly>
                                                 <input type="date" name="birth" id="birth" placeholder="Data de Nascimento"  class="form-control" autocomplete="off" />
                                            </div>
                                            <div class="form-group col-md-6" >
                                                <input type="text" name="phone" id="phone" placeholder="Telefone"  class="form-control" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input id="chkBuy" name="chkBuy" type="checkbox" data-toggle="toggle" onclick="switchBuy()">
                                        <label for="chkBuy"><h5>Compra Avulsa</h5></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Quilo de Roupa</label>
                                        <span class="text-danger">
                                            <label class="text-success"></label>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="amount" placeholder="00.00 KG" id="Quantity" class="form-control" oninput="convertAmount()" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <span class="text-danger">
                                            <label class="text-success "></label>
                                        </span>
                                        <input type="text" name="description" placeholder="Descrição"  class="form-control" required />
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3 caption text-center">
                                            <label id="labelCompra_Debt">Valor a Pagar</label>
                                            <br />
                                            <span class="text-success">
                                                <label class="text-success" id="Price" >0.00</label> R$
                                             </span>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label id="labelCompra_Debt">Forma de Pagamento</label>
                                            <select name="paymentMethod" class="custom-select text-success">
                                                <option value="1">Saldo</option>
                                                <option value="2">Cartão de Débito</option>
                                                <option value="3">Cartão de Crédito</option>
                                                <option value="4">Dinheiro</option>
                                             </select>
                                        </div>
                                        <div class="form-group col-md-3 mt-2 caption text-center">
                                        <br/>
                                            <label class="btn btn-outline-secondary" for="files">Comprovante</label>
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" required>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <span class="text-danger labelCompra_Importe">
                                            <label class="text-success labelCompra_Importe" id="labelCompra_Importe"> </label>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-outline-primary">Comprar</button>
                                        </div>
                                        <div class="form-group text-center">
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
        </div>
    </div>
@endsection

