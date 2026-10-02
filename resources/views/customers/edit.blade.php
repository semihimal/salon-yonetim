@extends('layouts.app')

@section('title', 'Müşteri Düzenle')

@section('content')

<h1>Müşteri Düzenle</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Ad Soyad</label>
        <input
            type="text"
            name="name"
            value="{{ $customer->name }}"
        >
    </div>

    <br>

    <div>
        <label>Telefon</label>
        <input
            type="text"
            name="phone"
            value="{{ $customer->phone }}"
        >
    </div>

    <br>

    <div>
        <label>E-posta</label>
        <input
            type="email"
            name="email"
            value="{{ $customer->email }}"
        >
    </div>

    <br>

    <div>
        <label>Notlar</label>
        <textarea name="notes">{{ $customer->notes }}</textarea>
    </div>

    <br>

    <button type="submit">Degisiklikleri Kaydet</button>
</form>

@endsection