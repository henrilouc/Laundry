@extends('layouts.app')

@section('content')
    <div>
        <div class="mx-auto pull-right">
            <section class="contact__block contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:40px">
                            <h4>Gerir Solicitações</h4><hr>
                            <form>
                                @csrf
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

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                        <td>{{ $user->cpf  }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email  }}</td>
                                                        <td>{{ $user->phone  }}</td>
                                                        <td>
                                                        <form action="{{route('admin.approves')}}" method="POST">
                                                            @csrf
                                                            <select name="tipo" required>
                                                                <option disabled selected>::Selecione::</option>
                                                                @foreach($userTypes as $userType)
                                                                    <option value="{{$userType->id}}">{{$userType->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <input name="id" type="hidden" value="{{$user->id}}"> &nbsp; &nbsp; &nbsp;
                                                            <button type="submit" class="btn btn-success">Aprovar</button> &nbsp; &nbsp; &nbsp;
                                                            <a class="btn btn-danger" href="{{route('admin.reject', $user->id)}}">Rejeitar</a> &nbsp; &nbsp; &nbsp;
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
