@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-shopping" role="tabpanel">
                    <form action="{{route('laundryService.form')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="col-md-7 pe-0">
                                <div class="card border-secondary">
                                    <div class="card-header text-white bg-secondary">
                                        <h2>Comprar Crédito</h2>
                                    </div>
                                    <div class="card-body cardStyle ">
                                        <div class="col-md-5">
                                            <div class="input-group input-group-static my-3 ">
                                                <label>Quilo de Roupa</label>
                                                <label class="form-label " for="Quantity" ></label>
                                                <input type="number" name="amount" id="Quantity" class="form-control" oninput="convertAmount({{$prices}})" autocomplete="off" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12 bg-gradient-faded-light" >
                                            <div class="input-group input-group-dynamic my-3">
                                                <textarea type="text" rows="5" name="description" id="description" placeholder="Descrição" class="form-control" required ></textarea>
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
                                            <input class="custom-file-label" type="file" accept="image/*" id="files" name="file" style="display:none" required>
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
                                        <td><a class="btn-outline-light btn-sm {{$transaction->status == 'A' ? 'alert-success'  : (($transaction->status == 'R')  ? "alert-danger" : 'alert-warning')}}" >{{ $transaction->status == 'A' ? 'Aprovado' : (($transaction->status == 'R')  ? "Rejeitado" : "Pendente")}}</a></td>
                                    </tr>
                                @endforeach
                                @else

                                    <tr><td>Nenhum registro encontrado.</td></tr>
                                @endif
                                </tbody>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

