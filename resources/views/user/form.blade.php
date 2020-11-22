@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!--Mensaje flash guardar-->
                @if(session('estudianteGuardado'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa fa-check"></i> <strong>{{ session('estudianteGuardado')}}</strong>
                    </div>
                @endif

                <!--Mensaje flash modificar-->
                @if(session('estudianteModificado'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa fa-check"></i> <strong>{{ session('estudianteModificado')}}</strong>
                    </div>
                @endif

                <!--Validacion de errores-->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Names:') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Ejemplo" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ isset($usuario->name)?$usuario->name:'' }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="surname" class="col-md-4 col-form-label text-md-left">{{ __('Surnames:') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" placeholder="Ejemplo2" class="form-control @error('surname') is-invalid @enderror" name="surname"
                        value="{{ isset($usuario->surname)?$usuario->surname:'' }}" required autocomplete="surname" autofocus>

                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="identify_card" class="col-md-4 col-form-label text-md-left">{{ __('C. I.:') }}</label>

                    <div class="col-md-6">
                        <input id="identify_card" type="number" placeholder="12345" class="form-control @error('identify_card') is-invalid @enderror"
                        name="identify_card" value="{{ isset($usuario->identify_card)?$usuario->identify_card:'' }}" required autocomplete="identify_card" autofocus>

                        @error('identify_card')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address:') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="colegio@ejemplo.com" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ isset($usuario->email)?$usuario->email:'' }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password:') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        value="{{ isset($usuario->password)?$usuario->password:'' }}" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthdate" class="col-md-4 col-form-label text-md-left">{{ __('Birthdate:') }}</label>

                    <div class="col-md-6">
                        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                        value="{{ isset($usuario->birthadate)?$usuario->birthdate:'' }}" required autocomplete="birthdate" autofocus>

                        @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-left">{{ __('Gender:') }}</label>

                    <div class="col-md-6">
                        <input id="gender" type="text" placeholder="M / F" class="form-control @error('gender') is-invalid @enderror" name="gender"
                        value="{{ isset($usuario->gender)?$usuario->gender:'' }}" required autocomplete="gender" autofocus>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cellular" class="col-md-4 col-form-label text-md-left">{{ __('Cellular:') }}</label>

                    <div class="col-md-6">
                        <input id="cellular" type="number" placeholder="12345" class="form-control @error('cellular') is-invalid @enderror"
                        name="cellular" value="{{ isset($usuario->cellular)?$usuario->cellular:'' }}" required autocomplete="cellular" autofocus>

                        @error('cellular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-success col-md-9">
                            {{ $Modo == 'crear' ? 'Add' : 'Modify'}}
                        </button>
                    </div>
                </div>
                <a class="btn btn-link col-md-4" href="{{ url('user') }}">
                    <i class="fas fa-reply"></i> Go Back to Student Record
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
