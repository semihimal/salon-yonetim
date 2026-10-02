@extends('layouts.app')

@section('title', 'Yeni Müşteri')

@section('content')

<h2>Yeni Müşteri Ekle</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
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

    <button class="button" type="submit">
        Müşteriyi Kaydet
    </button>
</form>

@endsection