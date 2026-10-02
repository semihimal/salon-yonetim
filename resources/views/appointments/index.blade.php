<h1>Randevular</h1>

<a href="/appointments/create">Yeni Randevu Ekle</a>

@foreach ($appointments as $appointment)

    <p>
        {{ $appointment->customer->name }} -
        {{ $appointment->service->name }} -
        {{ $appointment->appointment_at->format('d.m.Y H:i') }} -
        {{ $appointment->status }}

        <a href="/appointments/{{ $appointment->id }}/edit">
            Duzenle
        </a>

        <form
            action="/appointments/{{ $appointment->id }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button type="submit">Sil</button>
        </form>
    </p>

@endforeach