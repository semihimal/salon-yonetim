@extends('layouts.app')

@section('title', 'Ana Panel')

@section('content')

<div class="cards">

    <div class="card">
        <h3>Müşteri</h3>
        <strong>{{ $customerCount }}</strong>
    </div>

    <div class="card">
        <h3>Hizmet</h3>
        <strong>{{ $serviceCount }}</strong>
    </div>

    <div class="card">
        <h3>Randevu</h3>
        <strong>{{ $appointmentCount }}</strong>
    </div>

</div>

<h2>Yaklaşan Randevular</h2>

<table>
    <thead>
        <tr>
            <th>Müşteri</th>
            <th>Hizmet</th>
            <th>Tarih</th>
            <th>Durum</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($upcomingAppointments as $appointment)

        <tr>
            <td>{{ $appointment->customer->name }}</td>
            <td>{{ $appointment->service->name }}</td>
            <td>{{ $appointment->appointment_at->format('d.m.Y H:i') }}</td>
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
        </tr>

        @endforeach

    </tbody>
</table>

@endsection