<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin Buku Tamu</title>
    <style>
        body {
            margin: 2em;
            background: #f4f4f4;
        }

        .container {
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 4px black;
            max-width: 900px;
            margin: 2em auto;
        }

        h1 {
            color: blue;
            text-align: center;
            margin-bottom: 1.5em;
        }

        .filter-form {
            margin-bottom: 1.5em;
            padding: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #e9ecef;
            display: flex;
            flex-wrap: wrap;
            gap: 1em;
            align-items: flex-end;
        }

        .filter-group {
            flex: 1;
            min-width: 150px;
        }

        .filter-group label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
        }

        .filter-group input {
            padding: 0.6em;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .filter-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5em;
        }

        th,td {
            padding: 0.8em;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
        }

        .no-data {
            text-align: center;
            color: #666;
            margin-top: 2em;
        }

        .back-link {
            text-align: center;
            margin-top: 2em;
        }

        .back-link a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Halaman Admin Buku Tamu</h1>

        <form action="{{url("adminfilter")}}" method="GET" class="filter-form">
            <div class="filter-group">
                <label for="start_date">Tanggal Mulai:</label>
                <input type="date" id="start_date" name="start_date">
            </div>
            <div class="filter-group">
                <label for="end_date">Tanggal Akhir:</label>
                <input type="date" id="end_date" name="end_date">
            </div>
            <div class="filter-group" style="flex-grow: 0;">
                <input type="submit" value="Filter">
            </div>
        </form>

        @if($tamulist->isEmpty())
            <p class="no-data">Belum ada pesan buku tamu.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Tanggal Kirim</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tamulist as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email ?? '-' }}</td>
                            <td>{{ $data->message }}</td>
                            <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <div class="back-link">
            <p><a href="{{ url('/') }}">Kembali ke Form Buku Tamu</a></p>
        </div>
    </div>
</body>

</html>