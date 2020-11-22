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

                <div class="card-header text-center">{{ __('Add Student') }}</div>
                <div class="card-body">
                    <form action="{{ url('/user') }}" method="POST">
                        @csrf

                        @include('user.form', ['Modo' => 'crear'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
