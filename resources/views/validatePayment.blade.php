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
                                        <th class="text-center">Comprovante</th>
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
                                            @if($transaction->paymentReceipt > 0)
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal{{$transaction->id}}"><span class="material-icons fa-lg">perm_media</span></button></td>
                                            @else
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal{{$transaction->id}}" disabled><span class="material-icons fa-lg">perm_media</span></button></td>
                                            @endif
                                            <td><button type="button" class="btn btn-success" onclick="window.location='{{route('admin.payinApprove', $transaction->id)}}'">Aprovar</button></td>
                                            <td><button type="button" class="btn btn-danger" onclick="window.location='{{route('admin.payinReject', $transaction->id)}}'">Rejeitar</button></td>
                                        </tr>
                                        <div class="modal fade" id="fileModal{{$transaction->id}}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Comprovante de Pagamento</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-content">
                                                        <img class ="img-responsive" src="{{ env('APP_URL') }}/storage/{{$transaction->paymentReceipt}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Voltar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

