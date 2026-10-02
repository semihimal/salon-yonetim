@extends('layouts.app')

@section('title', 'Müşteriler')

@section('content')

    <h2>Müşteriler</h2>

    <a class="button" href="/customers/create">
        Yeni Müşteri Ekle
    </a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Ad Soyad</th>
                <th>Telefon</th>
                <th>İşlemler</th>
            </tr>
        </thead>

        <tbody>

        @foreach ($customers as $customer)

            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>

                <td>
                    <a 
                        class="edit-link"
                        href="/customers/{{ $customer->id }}/edit">
                        Düzenle
                    </a>

                    <form
                        action="/customers/{{ $customer->id }}"
                        method="POST"
                        style="display:inline;"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Sil
                        </button>
                    </form>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection