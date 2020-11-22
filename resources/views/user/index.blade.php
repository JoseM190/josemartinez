@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header text-center">{{ __('Student Record') }}</div><br>
                <a class="btn btn-success col-md-2 offset-md-1" href="{{ url('user/create') }}">
                    <i class="fas fa-user-plus"></i> Add Student
                </a><br>

                <!--Mensaje flash-->
                @if(session('estudianteEliminado'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa fa-times"></i> <strong>{{ session('estudianteEliminado')}}</strong>
                    </div>
                @endif

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>C. I.</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Birthdate</th>
                                <th>Gender</th>
                                <th>Cellular</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->identify_card }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->birthdate }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->cellular }}</td>
                                    <td>
                                        <a href="{{ url('/user/'.$user->id.'/edit') }}" class="btn btn-primary mb-1">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ url('/user/'.$user->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure to delete the student?');" class="btn btn-danger">
                                                <i class="fas fa-user-minus"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                    <a class="btn btn-link col-md-2" href="{{ route('home') }}">
                        <i class="fas fa-reply"></i> Back to Top
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
