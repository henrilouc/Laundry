@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastre-se') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="name" class=" form-label text-md-end">{{ __('Nome') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name"  required autocomplete="name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="cpf" class=" form-label text-md-end">{{ __('CPF') }}</label>
                                        <input id="cpf" type="text" class="form-control" value="{{ old('cpf') }}" name="cpf" required autocomplete="cpf" >
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="phone" class=" form-label text-md-end">{{'Telefone' }}</label>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone"  required autocomplete="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="email" class=" form-label text-md-end">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email"  value="" required autocomplete="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="birth" class="form-label ">{{'Data de Nascimento' }}</label>
                                        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" value="{{ old('birth') }}" name="birth"   required autocomplete="birth">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password" class=" form-label text-md-end">Senha</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static my-3 ">
                                        <label for="password-confirm" class=" form-label text-md-end">Confirmar Senha</label>
                                        <input id="password-confirm" type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirmar') }}
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
