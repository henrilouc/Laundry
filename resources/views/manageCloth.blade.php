@extends('layouts.app')
@section('title')
    Gerir Roupas
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="{{route('manageCloth.form')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 pe-0">
                        <div class="card border-secondary rounded-0">
                            <div class="card-header text-white bg-secondary">
                                <h4>Registrar Tipo de Roupa</h4>
                            </div>
                            <div class="card-body cardStyle ">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group input-group-outline my-3">
                                            <label for="name" class="form-label">Tipo de Roupa</label>
                                            <input type="text" name="name" id="name" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group input-group-dynamic my-3">
                                            <textarea type="text" name="description"  placeholder="Descrição" rows="4" class="form-control" ></textarea>
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
                                @if(isset($clothes))
                                    <table id= "dataTable" class="row-border" style="width:100%">
                                        @if(count(array($clothes)) > 0)
                                            <thead>
                                            <tr>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Descrição</th>
                                                <th class="text-center"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($clothes as $cloth)
                                                <tr>
                                                    <td class="text-center">{{ $cloth->name }}</td>
                                                    <td class="text-center">{{ $cloth->description }}</td>
                                                    <td><button type="button" class="btn" onclick="window.location='{{route('manageCloth.remove', $cloth->id)}}'"><span class="material-icons">delete</span></button></td>
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

