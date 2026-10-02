<h1>Yeni Musteri Ekle</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<form action="/customers" method="POST">
    @csrf

    <div>
        <label>Ad Soyad</label>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <label>Telefon</label>
        <input type="text" name="phone">
    </div>

    <br>

    <div>
        <label>E-posta</label>
        <input type="email" name="email">
    </div>

    <br>

    <div>
        <label>Notlar</label>
        <textarea name="notes"></textarea>
    </div>

    <br>

    <button type="submit">Musteriyi Kaydet</button>
</form>