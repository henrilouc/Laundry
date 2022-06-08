@extends('layouts.app')

@section('content')
    <div>
        <div class="mx-auto pull-right">
            <section class="contact__block contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:40px">
                            <div class="card border-secondary ">
                                <div class="card-header text-white bg-secondary">
                                    <h4>Gerir Solicitações</h4><hr>
                                    <form action="{{route('admin.approve')}}" method="POST">
                                        @csrf
                                        <div class="card-body cardStyle">

                                            @if(isset($users))
                                                <table id="dataTable" class="table table-hover">
                                                    @if(count(array($users)) > 0)
                                                        <thead>
                                                        <tr>
                                                            <th>CPF</th>
                                                            <th>Nome</th>
                                                            <th>Email</th>
                                                            <th>Telefone</th>
                                                            <th>Tipo</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($users as $user)
                                                            <tr>
                                                                <td>{{ $user->cpf  }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email  }}</td>
                                                                <td><select name="tipo" >
                                                                        <option value="">::Selecione::</option>
                                                                        @foreach($userTypes as $userType)
                                                                            <option value="{{$userType->id}}">{{$userType->name}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td>{{ $user->phone  }}</td>
                                                                <td><button type="submit" class="btn btn-success">Aprovar</button></td>
                                                                <td><button type="button" class="btn btn-danger" onclick="window.location='{{route('admin.reject', $user->id)}}'">Rejeitar</button></td>
                                                            </tr>
                                                        @endforeach
                                                        @else
                                                            <tr><td>Nenhum registro encontrado.</td></tr>
                                                        @endif
                                                        </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
