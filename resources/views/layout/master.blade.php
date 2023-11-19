<!DOCTYPE html>
<html lang="en">
   
<head>
    <title>@yield('title') - Suplier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3VwcGxpZXJ8ZW58MHx8MHx8fDA%3D');
            background-repeat: no-repeat;
            background-size: 100%;
        }
       
    </style>
</head>

<body>

    @include('layout.header')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                @yield('breadcrumb')
            </ol>
        </nav>

        @yield('content')
    </div>

</body>

</html>
