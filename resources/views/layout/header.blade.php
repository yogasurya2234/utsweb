<header class="navbar navbar-expand-lg bg-body-tertiary py-3 mb-4 border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">supplier</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <ul class="nav nav-pills">
        @php
            $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'Customer', 'name' => 'Customer'], ['url' => 'Barang', 'name' => 'Barang']];
        @endphp

        @foreach ($menu as $m)
            @include('layout.nav-item', ['menu' => $m])
        @endforeach
    </ul>
</header>