<h1>Randevu Duzenle</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/appointments/{{ $appointment->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Musteri</label>

        <select name="customer_id">
            @foreach ($customers as $customer)
                <option
                    value="{{ $customer->id }}"
                    @selected($appointment->customer_id == $customer->id)
                >
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Hizmet</label>

        <select name="service_id">
            @foreach ($services as $service)
                <option
                    value="{{ $service->id }}"
                    @selected($appointment->service_id == $service->id)
                >
                    {{ $service->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Randevu Tarihi ve Saati</label>

        <input
            type="datetime-local"
            name="appointment_at"
            value="{{ $appointment->appointment_at->format('Y-m-d\TH:i') }}"
        >
    </div>

    <br>

    <div>
        <label>Durum</label>

        <select name="status">
            <option value="pending" @selected($appointment->status == 'pending')}>
                Bekliyor
            </option>

            <option value="confirmed" @selected($appointment->status == 'confirmed')}>
                Onaylandi
            </option>

            <option value="completed" @selected($appointment->status == 'completed')}>
                Tamamlandi
            </option>

            <option value="cancelled" @selected($appointment->status == 'cancelled')}>
                Iptal
            </option>
        </select>
    </div>

    <br>

    <div>
        <label>Not</label>
        <textarea name="notes">{{ $appointment->notes }}</textarea>
    </div>

    <br>

    <button type="submit">Degisiklikleri Kaydet</button>
</form>