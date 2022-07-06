@extends('layouts.app')
@section('title')
    Gerir Preço
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="{{route('managePrice.form')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary rounded-0">
                            <div class="card-header text-white bg-secondary">
                                <h4>Registrar Preço</h4>
                            </div>
                            <div class="card-body cardStyle">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="multiplier" class="form-label">Valor(R$)/KG</label>
                                            <input type="number" name="multiplier" id="multiplier" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="min" class="form-label">Minimo(KG)</label>
                                            <input type="number" name="min" id="min" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="max" class="form-label">Máximo(KG)</label>
                                            <input type="number" name="max" id="max" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-static mb-4">

                                            <label for="user_type_id" class="ps-sm-5">Tipo de Cliente</label>
                                            <select class="form-control" name="user_type_id" id="user_type_id" onchange="listUser(this)" required>
                                                <option class="text-center" disabled selected>::Selecione::</option>
                                                @foreach($userTypes as $userType)
                                                    <option class="text-center" value="{{$userType->id}}">{{"$userType->name"}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-dynamic my-3">
                                            <textarea type="text" name="description"  placeholder="Descrição" rows="4" class="form-control" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info">Confirmar</button>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary rounded-0 rounded-bottom">

                            <div class="card-body cardStyle">
                                @if(isset($prices))
                                    <table id= "dataTable" class="row-border" style="width:100%">
                                        @if(count(array($prices)) > 0)
                                            <thead>
                                            <tr>
                                                <th class="text-center">Preço</th>
                                                <th class="text-center" >Minimo</th>
                                                <th class="text-center">Máximo</th>
                                                <th class="text-center">Tipo de cliente</th>
                                                <th class="text-center">Descrição</th>
                                                <th class="text-center"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($prices as $price)
                                                <tr>
                                                    <td class="text-center">{{ $price->multiplier }} R$/KG</td>
                                                    <td class="text-center">{{ $price->min  }} KG</td>
                                                    <td class="text-center">{{ $price->max  }} KG</td>
                                                    <td class="text-center">{{ $price->user_type_id  }}</td>
                                                    <td class="text-center">{{ $price->description  }}</td>

                                                    <td><button type="button" class="btn" onclick="window.location='{{route('managePrice.deletes', $price->id)}}'"><span class="material-icons">delete</span></button></td>
                                                </tr>
                                            @endforeach

                                        @endif
                                            </tbody>
                                    </table>
                                @else
                                    <table id= "dataTable" class="row-border" style="width:100%">
                                        <tr><td>Nenhum registro encontrado.</td></tr>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

