<h1>Yeni Hizmet Ekle</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/services" method="POST">
    @csrf

    <div>
        <label>Hizmet Adi</label>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <label>Fiyat</label>
        <input type="number" step="0.01" name="price">
    </div>

    <br>

    <div>
        <label>Sure (Dakika)</label>
        <input type="number" name="duration_minutes">
    </div>

    <br>

    <div>
        <label>Aciklama</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <button type="submit">Hizmeti Kaydet</button>
</form>