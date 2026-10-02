<h1>Yeni Randevu Ekle</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/appointments" method="POST">
    @csrf

    <div>
        <label>Musteri</label>

        <select name="customer_id">
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">
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
                <option value="{{ $service->id }}">
                    {{ $service->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Randevu Tarihi ve Saati</label>
        <input type="datetime-local" name="appointment_at">
    </div>

    <br>

    <div>
        <label>Durum</label>

        <select name="status">
            <option value="pending">Bekliyor</option>
            <option value="confirmed">Onaylandi</option>
            <option value="completed">Tamamlandi</option>
            <option value="cancelled">Iptal</option>
        </select>
    </div>

    <br>

    <div>
        <label>Not</label>
        <textarea name="notes"></textarea>
    </div>

    <br>

    <button type="submit">Randevuyu Kaydet</button>
</form>