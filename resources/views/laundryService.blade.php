@extends('layouts.app')

@section('content')
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
                    <form action="{{route('laundryService.form')}}" method="post">
                        @csrf
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
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" required>
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
                                            <span class="text-danger">
                                                <label class="text-success "></label>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="amount" placeholder="00.00 KG" id="Quantity" class="form-control" oninput="convertAmount({{$multiplier}})" autocomplete="off" required />

                                        </div>
                                        <div class="form-group">
                                            <label>
                                                Descrição
                                            </label>
                                            <span class="text-danger">
                                                <label class="text-success "></label>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="description"  class="form-control" required />

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
                    <h2>Consultar</h2>
                    <form action="{{route('laundryService.show')}}" method="GET">

                    </form>
                </div>
                <div class="card-body cardStyle">

                    @if(isset($transactions))
                        <table id= "dataTable" class="table table-hover">
                            @if(count(array($transactions)) > 0)
                                <thead>
                                    <tr>
                                        <th>Quantidade(KG)</th>
                                        <th>Descrição</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td class="text-center">{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->description  }}</td>
                                        <td>{{date('d/m/Y H:i ',strtotime($transaction->updated_at))}} </td>
                                        <td><a class="btn-outline-light btn-sm" >{{ $transaction->status == 'A' ? 'Aprovado' : (($transaction->status == 'R')  ? "Rejeitado" : "Pendente")}}</a></td>
                                    </tr>
                                @endforeach
                                @else

                                    <tr><td>Nenhum registro encontrado.</td></tr>
                                @endif
                                </tbody>
                        </table>
                    @endif
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
@endsection

