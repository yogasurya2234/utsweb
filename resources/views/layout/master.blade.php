<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - UD Darma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url('https://png.pngtree.com/background/20230519/original/pngtree-colorful-tank-full-of-corals-picture-image_2665051.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
</head>

<body>

    @include('layout.header')

    <div class="container">\
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                @yield('breadcrumb')
            </ol>
        </nav>

       
            </ol>
        </nav>

        @yield('content')
    </div>
<script>
    document.body.style.backgroundImage = "url('data:image/png;base64,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')";
</script>
</body>

</html>