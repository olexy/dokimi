@extends('layouts.temp')

@section('title', 'Details for ' . $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h3 class="card-title">Details for {{ $customer->name }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-2">
            <a href="{{ route('customers.update', $customer) }}/edit" class="btn btn-secondary">Edit Customer</a>
        </div>
        @if ($customer->image)
            <div class="col-12">
                <img src="{{ asset('storage/' . $customer->image) }}" alt="" class="img-thumbnail img-fluid">
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-3">
            <p><strong>Name: </strong>{{ $customer->name }} </p>
            <p><strong>Email: </strong>{{ $customer->email }} </p>
            <p><strong>Orgnaisation: </strong>{{ $customer->company->name }} </p>
            <p><strong>Status: </strong><button class="btn btn-warning"> {{ $customer->status }}</button>  </p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form action="/customers/{{ $customer->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"> Delete Customer</button>
            </form>
        </div>
    </div>



@endsection
