@extends('layouts.app')

@section('title', 'Randevular')

@section('content')

<div class="page-header">
    <h2>Randevular</h2>

    <a class="button" href="/appointments/create">
        Yeni Randevu Ekle
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>Müşteri</th>
            <th>Hizmet</th>
            <th>Tarih</th>
            <th>Durum</th>
            <th>İşlemler</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($appointments as $appointment)

        <tr>
            <td>{{ $appointment->customer->name }}</td>

            <td>{{ $appointment->service->name }}</td>

            <td>
                {{ $appointment->appointment_at->format('d.m.Y H:i') }}
            </td>

            <td>
                <span class="status-badge status-{{ $appointment->status }}">

                    @switch($appointment->status)

                    @case('pending')
                    Bekliyor
                    @break

                    @case('confirmed')
                    Onaylandı
                    @break

                    @case('completed')
                    Tamamlandı
                    @break

                    @case('cancelled')
                    İptal Edildi
                    @break

                    @default
                    {{ $appointment->status }}

                    @endswitch

                </span>
            </td>

            <td>
                <div class="actions">

                    <a
                        class="edit-link"
                        href="/appointments/{{ $appointment->id }}/edit">
                        Düzenle
                    </a>

                    <form
                        action="/appointments/{{ $appointment->id }}"
                        method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Sil
                        </button>
                    </form>

                </div>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection