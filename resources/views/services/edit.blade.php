<h1>Hizmet Duzenle</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/services/{{ $service->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Hizmet Adi</label>
        <input type="text" name="name" value="{{ $service->name }}">
    </div>

    <br>

    <div>
        <label>Fiyat</label>
        <input type="number" step="0.01" name="price" value="{{ $service->price }}">
    </div>

    <br>

    <div>
        <label>Sure (Dakika)</label>
        <input
            type="number"
            name="duration_minutes"
            value="{{ $service->duration_minutes }}"
        >
    </div>

    <br>

    <div>
        <label>Aciklama</label>
        <textarea name="description">{{ $service->description }}</textarea>
    </div>

    <br>

    <button type="submit">Degisiklikleri Kaydet</button>
</form>