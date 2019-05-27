
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/contacts') }}">Contact Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ action('HomeController@index') }}">Dashboard</a>
    </li>
</ul>

