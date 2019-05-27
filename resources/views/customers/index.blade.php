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
    <form action="/customers" method="POST">
        @include('customers.form')


        <button type="submit" class="btn btn-success bt-sm">Add Customer</button>

    </form>
    <hr>
    {{-- <h5 class="card-title">Customer List</h5> --}}


    <div class="row">
        <div class="col-sm">
            <h4>Inactive</h4>
        </div>
        <div class="col-sm">
            <h4>Active</h4>
        </div>
        <div class="col-sm">
            <h4>Companies</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            @foreach ($icustomers as $icustomer)
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"><a href="customers/{{ $icustomer->id }}">                            {{ $icustomer->name }}</a>
                        <span class="badge badge-primary badge-pill"> {{ $icustomer->company->name }}</span>
                        <span class="badge badge-danger badge-pill"> {{ $icustomer->status }}</span>
                    </li>
                </ul>
            @endforeach
        {{ $icustomers->links() }}
        </div>
        <div class="col-sm">
            @foreach ($acustomers as $acustomer)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $acustomer->name }}
                    <span class="badge badge-primary badge-pill"> {{ $acustomer->email }}</span>
                    <span class="badge badge-success badge-pill"> {{ $acustomer->status }}</span>
                </li>
            </ul>
        @endforeach
        {{ $acustomers->links() }}
        </div>
        <div class="col-sm">
            @foreach ($companies as $company)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $company->name }}
                    @foreach ($company->customers as $customer)
                        <span class="badge badge-primary badge-pill"> {{ $customer->name  }}</span>
                    @endforeach
                </li>
            </ul>
        @endforeach
        {{-- {{ $companies->links() }} --}}
        </div>
    </div>

@endsection
