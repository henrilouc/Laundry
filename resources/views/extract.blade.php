@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Consultar Extrato</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-body cardStyle">

                        @if(isset($laundryServices))
                            <table id="dataTable" class="table table-hover">
                                @if(count(array($laundryServices)) > 0)
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Quantidade(KG)</th>
                                        <th>Valor Pago</th>
                                        <th>Descrição</th>
                                        <th>Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($laundryServices as $laundryService)
                                        <tr>
                                            <td>{{ $laundryService->laundryUser->name}}</td>
                                            <td>{{ $laundryService->kilo }}</td>
                                            <td>{{ $laundryService->credit  }}</td>
                                            <td>{{ $laundryService->description  }}</td>
                                            <td>{{date('d/m/Y H:i ',strtotime($laundryService->updated_at))}} </td>
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
{{--                                Importe total:--}}
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

