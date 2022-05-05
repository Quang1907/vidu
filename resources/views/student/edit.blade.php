@extends('layout')

@section('content')
    @include('layouts.inc.title', ['title' => 'edit student'])
    <div class="container">
        {{-- @if (Session('status'))
            {{ Session('status') }}
        @endif --}}
        <form action="{{ route('student.update', $student) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Input name"
                    aria-describedby="helpId" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Age</label>
                <input type="text" name="age" value="{{ $student->age }}" id="" class="form-control"
                    placeholder="Input age" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="address" name="address" value="{{ $student->address }}" id="" class="form-control"
                    placeholder="Input Address" aria-describedby="helpId">
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
