@extends('layouts.app')

@section('title')
    Validar Crédito
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h4>Validar Pagamento</h4>
                        <form action="{{route('laundryService.show')}}" method="GET">

                        </form>
                    </div>
                    <div class="card-body cardStyle">

                        @if(isset($transactions))
                            <table id= "dataTable" class="row-border" style="width:100%">
                                @if(count(array($transactions)) > 0)
                                    <thead>
                                    <tr>
                                        <th>Quantidade(KG)</th>
                                        <th >Valor Pago</th>
                                        <th class="text-center">Descrição</th>
                                        <th>Data</th>
                                        <th>Comprovante</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td class="text-center">{{ $transaction->amount }}</td>
                                            <td class="text-center">{{ $transaction->value  }} R$</td>
                                            <td>{{ $transaction->description  }}</td>
                                            <td>{{date('d/m/Y H:i ',strtotime($transaction->updated_at))}} </td>
                                            <td>Arquivo</td>
                                            <td><button type="button" class="btn btn-success" onclick="window.location='{{route('admin.payinApprove', $transaction->id)}}'">Aprovar</button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="window.location='{{route('admin.payinReject', $transaction->id)}}'">Rejeitar</button></td>
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

