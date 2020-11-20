@extends('layouts.app')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <div class="card">
                <form action="{{ route('save') }}" method="POST">
                    <div class ="card-header text-center">Agregar Estudiante</div>
                    
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Name: </label>
                            <input type="text" name="name" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Surname: </label>
                            <input type="text" name="surname" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">C. I.: </label>
                            <input type="number" name="identify_card" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Email: </label>
                            <input type="email" name="email" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Password: </label>
                            <input type="password" name="password" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Birthdate: </label>
                            <input type="date" name="birthdate" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Gender: </label>
                            <input type="text" name="gender" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Cellular: </label>
                            <input type="number" name="cellular" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
