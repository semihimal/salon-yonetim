@extends('layouts.app')

@section('title', 'Yeni Randevu')

@section('content')

    <h2>Yeni Randevu Ekle</h2>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/appointments" method="POST">
        @csrf

        <div>
            <label>Müşteri</label>

            <select name="customer_id">
                @foreach ($customers as $customer)
                    <option
                        value="{{ $customer->id }}"
                        @selected(old('customer_id') == $customer->id)
                    >
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Hizmet</label>

            <select name="service_id">
                @foreach ($services as $service)
                    <option
                        value="{{ $service->id }}"
                        @selected(old('service_id') == $service->id)
                    >
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Randevu Tarihi ve Saati</label>

            <input
                type="datetime-local"
                name="appointment_at"
                value="{{ old('appointment_at') }}"
            >
        </div>

        <div>
            <label>Durum</label>

            <select name="status">
                <option value="pending" @selected(old('status') == 'pending')}>
                    Bekliyor
                </option>

                <option value="confirmed" @selected(old('status') == 'confirmed')}>
                    Onaylandı
                </option>

                <option value="completed" @selected(old('status') == 'completed')}>
                    Tamamlandı
                </option>

                <option value="cancelled" @selected(old('status') == 'cancelled')}>
                    İptal
                </option>
            </select>
        </div>

        <div>
            <label>Not</label>

            <textarea name="notes">{{ old('notes') }}</textarea>
        </div>

        <button class="button" type="submit">
            Randevuyu Kaydet
        </button>
    </form>

@endsection