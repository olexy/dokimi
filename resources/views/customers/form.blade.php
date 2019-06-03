@csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" value="{{ old('name') ?? $customer->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') ?? $customer->email}}">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <select class="form-control" id="company" name="company_id">
            @foreach ($companies as $company)
                <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="" disabled>Select customer status</option>
            @foreach ($customer->statusOptions() as $statusOptionsKey => $statusOptionsValue)
                <option value={{ $statusOptionsKey }} {{ $customer->status == $statusOptionsValue ? 'selected' : '' }}>{{ $statusOptionsValue }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group d-flex flex-column">
        <label>Profile Image</label>
        <input type="file" name="image">
    </div>

    @captcha
