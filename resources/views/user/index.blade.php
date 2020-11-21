@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header text-center">{{ __('Student Record') }}</div><br>
                <a class="btn btn-success col-md-2 offset-md-1" href="/form">Add Student</a>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                    <a href="/home">Back to Top</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
