<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h1>Principale Panel</h1>
                <hr>
                <h2>Welcome {{ Auth::user()->name }}</h2>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>