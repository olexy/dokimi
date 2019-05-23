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
        <form action="customers" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value=1>Active</option>
                        <option value=0 >Inactive</option>
                    </select>
                    </div>
                <button type="submit" class="btn btn-success bt-sm">Add Customer</button>
            </div>
        </form>
    <hr>
    {{-- <h5 class="card-title">Customer List</h5> --}}




    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4>Inactive</h4>
            </div>
            <div class="col-sm">
                <h4>Active</h4>
            </div>
        </div>
            <div class="row">
              <div class="col-sm">
                    @foreach ($icustomers as $icustomer)
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $icustomer->name }}
                                <span class="badge badge-primary badge-pill"> {{ $icustomer->email }}</span>
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
                        </li>
                    </ul>
                @endforeach
                {{ $acustomers->links() }}
              </div>
            </div>
          </div>

@endsection
