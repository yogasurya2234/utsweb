<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - supplier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url('https://png.pngtree.com/background/20230519/original/pngtree-colorful-tank-full-of-corals-picture-image_2665051.jpg');
            background-repeat: no-repeat;
            background-size: 135%;
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
    document.body.style.backgroundImage = "url('https://accurate.id/wp-content/uploads/2020/11/accurate.id-Arti-Supplier-Pengertian-Tugas-Jenis-dan-Cara-Kerja-Supplier.jpg')";
</script>
</body>

</html>