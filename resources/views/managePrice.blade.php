@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gerir Preço</h2>
        <div class="row">
            <div class="col-sm">
                <form  action="{{route('managePrice.form')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 0px">
                            <div class="card border-secondary ">
                                <div class="card-header text-white bg-secondary">
                                    <h4>Registrar Preço</h4>
                                </div>
                                <div class="card-body cardStyle">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label>Valor(R$)/KG</label>
                                            <input type="number" name="multiplier" class="form-control" autocomplete="off" required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Minimo(KG)</label>
                                            <input type="number" name="min" class="form-control" autocomplete="off" required />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Máximo(KG)</label>
                                            <input type="number" name="max" class="form-control" autocomplete="off" required />
                                            </div>
                                        <div class="form-group col-md-6">
                                            <label>Descrição</label>
                                            <textarea type="text" name="description"  class="form-control" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <label>
                                                Tipo de Cliente
                                                <select class="custom-select" name="user_type_id" onchange="listUser(this)" required>
                                                    <option disabled selected>::Selecione::</option>
                                                    @foreach($userTypes as $userType)
                                                        <option value="{{$userType->id}}">{{"$userType->name"}}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-outline-primary">Registrar</button>
                                            </div>
                                            <div class="form-group text-center">
                                                <a class="btn btn-outline-warning">Voltar</a>
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
@endsection

