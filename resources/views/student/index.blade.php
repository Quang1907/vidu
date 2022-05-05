@extends('layout')

@section('content')
    @include('layouts.inc.title', ['title' => 'index'])
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php($id = 1)
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            <form action="{{ route('student.destroy', $student) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('student.edit', $student) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('student.show', $student) }}" class="btn btn-primary">Show</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
