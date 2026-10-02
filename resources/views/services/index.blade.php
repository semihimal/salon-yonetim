@extends('layouts.app')

@section('title', 'Hizmetler')

@section('content')

    <div class="page-header">
        <h2>Hizmetler</h2>

        <a class="button" href="/services/create">
            Yeni Hizmet Ekle
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Hizmet Adı</th>
                <th>Fiyat</th>
                <th>Süre</th>
                <th>İşlemler</th>
            </tr>
        </thead>

        <tbody>

        @foreach ($services as $service)

            <tr>
                <td>{{ $service->name }}</td>

                <td>
                    {{ number_format($service->price, 2) }} TL
                </td>

                <td>
                    {{ $service->duration_minutes ?? '-' }} dk
                </td>

                <td>
                    <div class="actions">

                        <a 
                            class="edit-link"
                            href="/services/{{ $service->id }}/edit">
                            Düzenle
                        </a>

                        <form
                            action="/services/{{ $service->id }}"
                            method="POST"
                            style="display:inline;"
                        >
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