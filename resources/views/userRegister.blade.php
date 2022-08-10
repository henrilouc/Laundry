@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastre-se</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.register') }}">
                            @csrf
                            @if(session('success'))
                                <div>
                                    {{session('message')}}
                                </div>
                            @endif
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="name" class=" form-label text-md-end">Nome</label>
                                        <input id="name" type="text" class="form-control " value="{{ old('name') }}" name="name"  autocomplete="name" >
                                        @error('name')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="cpf" class=" form-label text-md-end">CPF</label>
                                        <input id="cpf" type="text" class="form-control" value="{{ old('cpf') }}" name="cpf" autocomplete="cpf" >
                                        @error('cpf')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="phone" class=" form-label text-md-end">Telefone</label>
                                        <input id="phone" type="text" class="form-control " value="{{ old('phone') }}" name="phone"  autocomplete="phone">
                                        @error('phone')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="email" class=" form-label text-md-end">Email</label>
                                        <input id="email" type="email" class="form-control " value="{{ old('email') }}" name="email"  value="" autocomplete="email">
                                        @error('email')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="birth" class="form-label ">Data de Nascimento</label>
                                        <input id="birth" type="date" class="form-control " value="{{ old('birth') }}" name="birth"   autocomplete="birth">
                                        @error('birth')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password" class=" form-label text-md-end">Senha</label>
                                        <input id="password" type="password" class="form-control " value="{{ old('password') }}" name="password" autocomplete="new-password">
                                        @error('password')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password-confirm" class=" form-label text-md-end">Confirmar Senha</label>
                                        <input id="password-confirm" name="password_confirmation" type="password" class="form-control" value="{{ old('password_confirmation') }}" autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="text-danger" ><small><strong>{{ $message }}</strong></small></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Confirmar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
