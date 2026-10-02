<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Salon Yönetim')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            flex: 1;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .button {
            display: inline-block;
            padding: 8px 14px;
            background: #222;
            color: white;
            text-decoration: none;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
        }

        form:not([style*="display:inline"]) {
            background: white;
            padding: 25px;
            border-radius: 10px;
            max-width: 650px;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        input,
        textarea,
        select {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .button,
        button {
            display: inline-block;
            padding: 9px 14px;
            background: #222;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover,
        .button:hover {
            opacity: 0.85;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .error-list {
            background: white;
            padding: 15px 30px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .menu {
            display: flex;
            gap: 8px;
            margin-bottom: 30px;
        }

        .menu a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 6px;
        }

        .menu a:hover {
            background: #e5e5e5;
        }

        .edit-link {
            display: inline-block;
            padding: 7px 12px;
            background: #eeeeee;
            color: #222;
            text-decoration: none;
            border-radius: 5px;
        }

        .edit-link:hover {
            background: #dddddd;
        }

        .status-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .status-pending {
            background: #fff3cd;
        }

        .status-confirmed {
            background: #d1e7dd;
        }

        .status-completed {
            background: #cff4fc;
        }

        .status-cancelled {
            background: #f8d7da;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Salon Yönetim Sistemi</h1>

        <div class="menu">
            <a href="/dashboard">Ana Panel</a>
            <a href="/customers">Müşteriler</a>
            <a href="/services">Hizmetler</a>
            <a href="/appointments">Randevular</a>
        </div>

        @yield('content')

    </div>

</body>

</html>