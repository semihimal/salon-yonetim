@extends('layouts.app')

@section('title', 'Randevu Düzenle')

@section('content')

    <h2>Randevu Düzenle</h2>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/appointments/{{ $appointment->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Müşteri</label>

            <select name="customer_id">
                @foreach ($customers as $customer)
                    <option
                        value="{{ $customer->id }}"
                        @selected(
                            old('customer_id', $appointment->customer_id)
                            == $customer->id
                        )
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
                        @selected(
                            old('service_id', $appointment->service_id)
                            == $service->id
                        )
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
                value="{{ old(
                    'appointment_at',
                    $appointment->appointment_at->format('Y-m-d\TH:i')
                ) }}"
            >
        </div>

        <div>
            <label>Durum</label>

            <select name="status">

                <option
                    value="pending"
                    @selected(
                        old('status', $appointment->status) == 'pending'
                    )
                >
                    Bekliyor
                </option>

                <option
                    value="confirmed"
                    @selected(
                        old('status', $appointment->status) == 'confirmed'
                    )
                >
                    Onaylandı
                </option>

                <option
                    value="completed"
                    @selected(
                        old('status', $appointment->status) == 'completed'
                    )
                >
                    Tamamlandı
                </option>

                <option
                    value="cancelled"
                    @selected(
                        old('status', $appointment->status) == 'cancelled'
                    )
                >
                    İptal
                </option>

            </select>
        </div>

        <div>
            <label>Not</label>

            <textarea name="notes">{{ old('notes', $appointment->notes) }}</textarea>
        </div>

        <button class="button" type="submit">
            Değişiklikleri Kaydet
        </button>
    </form>

@endsection