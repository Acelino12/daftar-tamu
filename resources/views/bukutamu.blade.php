<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
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
            max-width: 600px; 
            margin: 2em auto; 
        }

        h1 { 
            color: #0056b3; 
            text-align: center; 
            margin-bottom: 1.5em; 
        }

        .form-group { 
            margin-bottom: 1em; 
        }

        label { 
            display: block; 
            margin-bottom: 0.5em; 
            font-weight: bold; 
        }

        input{
            width: 100%; 
            padding: 0.8em; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            box-sizing: border-box;
        }

        textarea { width: 100%; 
            resize: vertical; 
            min-height: 100px;
        }

        button {
            background-color: #28a745; 
            color: white; 
            padding: 0.8em 1.5em; 
            border: none; 
            border-radius: 4px;
            cursor: pointer; 
            font-size: 1em; 
            display: block; 
            width: 100%;
        }
        
        .error-message { 
            color: red; 
            font-size: 0.9em; 
            margin-top: 0.5em; 
        }
        .link { 
            text-align: center; 
            margin-top: 1.5em; 
        }
        .link a { 
            color: blue;
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Buku Tamu</h1>

        <form action="{{ url('tambahbukutamu') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
                @error('message')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>

        <div class="link">
            <a href="{{url('admin')}}">Halaman Admin</a>
        </div>
    </div>
</body>
