<h1>Hizmetler</h1>

<a href="/services/create">Yeni Hizmet Ekle</a>

@foreach ($services as $service)

    <p>
        {{ $service->name }} -
        {{ $service->price }} TL

        <a href="/services/{{ $service->id }}/edit">
            Duzenle
        </a>

        <form
            action="/services/{{ $service->id }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button type="submit">Sil</button>
        </form>
    </p>

@endforeach