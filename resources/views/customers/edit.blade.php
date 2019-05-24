@extends('layouts.temp')

@section('title', 'Customer List')

@section('content')

    <h3 class="card-title">Customer List</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('PATCH')
            @include('customers.form')
            <button type="submit" class="btn btn-success bt-sm">Edit Customer</button>

        </form>
    <hr>

@endsection
