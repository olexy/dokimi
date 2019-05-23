@extends('layouts.temp')

@section('content')

    <h5 class="card-title">Our Customers</h5>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="customers" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" value="{{ old('name') }}">>

                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-success bt-sm">Add Customer</button>
            </div>

        </form>
    <hr>
    {{-- <h5 class="card-title">Customer List</h5> --}}
    @foreach ($customers as $customer)
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $customer->name }}
                <span class="badge badge-primary badge-pill"> {{ $customer->email }}</span>
            </li>
        </ul>
    @endforeach

    {{ $customers->links() }}

@endsection
