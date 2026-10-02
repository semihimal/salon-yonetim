@extends('layouts.app')

@section('title', 'Hizmet Düzenle')

@section('content')

    <h2>Hizmet Düzenle</h2>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/services/{{ $service->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Hizmet Adı</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $service->name) }}"
            >
        </div>

        <div>
            <label>Fiyat</label>
            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ old('price', $service->price) }}"
            >
        </div>

        <div>
            <label>Süre (Dakika)</label>
            <input
                type="number"
                name="duration_minutes"
                value="{{ old('duration_minutes', $service->duration_minutes) }}"
            >
        </div>

        <div>
            <label>Açıklama</label>
            <textarea name="description">{{ old('description', $service->description) }}</textarea>
        </div>

        <button class="button" type="submit">
            Değişiklikleri Kaydet
        </button>
    </form>

@endsection