@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

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

                <div class="card-header text-center">{{ __('Modify Student') }}</div>
                <div class="card-body">
                    <form action="{{ url('/user/'.$usuario->id) }}" method="POST">
                        @csrf @method('PATCH')

                        @include('user.form', ['Modo' => 'editar'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
