@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <h2>Consultar Extrato</h2>

                        <form action="{{route('extract')}}" method="GET">

                        </form>
                    </div>
                    <div class="card-body cardStyle">
                        @if(isset($transactions))
                            <table id= "dataTable" class="row-border" style="width:100%">
                                @if(count(array($transactions)) > 0)
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
                                    @foreach($transactions as $transaction)

                                        <tr>
                                            <td class="text-center">{{ $transaction->id }}</td>
                                            <td class="text-center">{{ $transaction->amount }}KG</td>
                                            <td class="text-center">{{ $transaction->value }}R$</td>
                                            <td class="text-center">{{$transaction->single_purchase == 1 ? 'sim'  : 'não'}}</td>
                                            <td class="text-center">{{ $transaction->name }}</td>
                                            <td class="text-center">{{ $transaction->cpf }}</td>
                                            <td class="text-center">{{ $transaction->email }}</td>
                                            <td class="text-center">{{ $transaction->phone }}</td>
                                            <td>{{date('d/m/Y H:i ',strtotime($transaction->created_at))}} </td>
                                            @if($transaction->paymentReceipt > 0)
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal{{$transaction->id}}"><span class="material-icons fa-lg">receipt_long</span></button></td>
                                            @else
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#fileModal{{$transaction->id}}" disabled><span class="material-icons fa-lg">receipt_long</span></button></td>
                                            @endif
                                            @if($transaction->paymentReceipt > 0)
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#ClothesModal{{$transaction->id}}"><span class="material-icons fa-lg">checkroom</span></button></td>
                                            @else
                                                <td class="text-center"><button type="button" class="btn"   data-bs-toggle="modal" data-bs-target="#ClothesModal{{$transaction->id}}" disabled><span class="material-icons fa-lg">checkroom</span></button></td>
                                            @endif
                                            <td class="text-center"><button type="button" class="btn" onclick="window.location='{{ route('admin.report', ['id' => $transaction->id,'download' =>'pdf']) }}'"><span class="material-icons fa-lg">file_download</span></button></td>
                                        </tr>
                                        <div class="modal fade" id="ClothesModal{{$transaction->id}}" tabindex="-1" aria-hidden="true">
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

