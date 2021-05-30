@extends('layouts.dashboard')

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Registered</th>
            <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
            <tr>
                <td>1</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach

    </tbody>
  </table>
@endsection
