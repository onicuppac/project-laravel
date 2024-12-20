<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Laravel 3A</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        hr {
            border: 1px solid #ddd;
            margin: 20px 0;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        a {
            margin: 0 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #E2BFD9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Website Kelas Laravel 3A</h1>
    <hr>
    <nav>
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('/tentang')}}">Tentang</a>
        <a href="{{url('/kontak')}}">Kontak</a>
        <a href="{{url('/siswa')}}">Data Siswa</a>
    </nav>
    <hr>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
