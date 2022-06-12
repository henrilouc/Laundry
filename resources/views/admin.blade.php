@extends('layouts.app')
@section('title')
    Válidar Usuário
@endsection
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-secondary ">
                        <div class="card-header text-white bg-secondary">
                            <h4>Gerir Solicitações</h4>
                        </div>
                        <div class="card-body cardStyle">
                            <form>
                                @csrf
                                @if(isset($users))
                                    <table id="dataTable" class="table table-hover">
                                        @if(count(array($users)) > 0)
                                            <thead>
                                            <tr>
                                                <th class="text-center">CPF</th>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Telefone</th>
                                                <th class="ps-5">Tipo</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                        <td class="text-center">{{ $user->cpf  }}</td>
                                                        <td class="text-center">{{ $user->name }}</td>
                                                        <td class="text-center">{{ $user->email  }}</td>
                                                        <td class="text-center">{{ $user->phone  }}</td>
                                                        <td class="text-center">
                                                        <form action="{{route('admin.approves')}}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <select class="form-control w-40" name="tipo" required> &nbsp; &nbsp; &nbsp;
                                                                            <option class="text-center" disabled selected>::Selecione::</option>
                                                                            @foreach($userTypes as $userType)
                                                                                <option class="text-center" value="{{$userType->id}}">{{$userType->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">

                                                                    <input name="id" type="hidden" value="{{$user->id}}">&nbsp; &nbsp; &nbsp;
                                                                    <button type="submit" class="btn btn-success">Aprovar</button> &nbsp; &nbsp; &nbsp;
                                                                    <a class="btn btn-danger" href="{{route('admin.reject', $user->id)}}">Rejeitar</a> &nbsp; &nbsp; &nbsp;
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </td>
                                                </tr>
                                            @endforeach
                                            @else
                                                <tr><td>Nenhum registro encontrado.</td></tr>
                                            @endif
                                            </tbody>
                                    </table>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
