<h1>Musteriler</h1>

@foreach ($customers as $customer)

    <p>
        {{ $customer->name }} -
        {{ $customer->phone }}

        <form
            action="/customers/{{ $customer->id }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button type="submit">Sil</button>
        </form>
    </p>

@endforeach