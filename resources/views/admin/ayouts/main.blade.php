<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{background:#f4f6f9}
        .sidebar{
            width:250px;
            background:#0f766e;
            min-height:100vh;
        }
        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:10px 15px;
        }
        .sidebar a:hover,.sidebar .active{
            background:#115e59;
        }
    </style>
</head>
<body>

<div class="d-flex">
    @include('admin.partials.sidebar')

    <div class="flex-grow-1">
        @include('admin.partials.topbar')

        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
