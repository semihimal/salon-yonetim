@extends('layouts.app')

@section('title', 'Yeni Hizmet')

@section('content')

    <h2>Yeni Hizmet Ekle</h2>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/services" method="POST">
        @csrf

        <div>
            <label>Hizmet Adı</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <div>
            <label>Fiyat</label>
            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ old('price') }}"
            >
        </div>

        <div>
            <label>Süre (Dakika)</label>
            <input
                type="number"
                name="duration_minutes"
                value="{{ old('duration_minutes') }}"
            >
        </div>

        <div>
            <label>Açıklama</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <button class="button" type="submit">
            Hizmeti Kaydet
        </button>
    </form>

@endsection