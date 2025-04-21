<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color:rgb(167, 49, 40); /* Green navbar */
        }
        .navbar-custom .navbar-brand {
            color: white;
            font-weight: bold;
        }
        .navbar-custom .navbar-brand:hover {
            color: #d4d4d4;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome</a>
    </div>
</nav>

<div class="container mt-4">
    <h2>List Data</h2>
    <table class="table table-bordered">
        <h1>Hallo</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
