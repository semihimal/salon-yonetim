<h1>Musteriler</h1>

@foreach ($customers as $customer)

<p>
    {{ $customer['name'] }} - 
    {{ $customer['phone'] }}
</p>

@endforeach