<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceHub</title>
</head>

<body>
    <h1>hola</h1>
@section('content')
    <div class="container">
        <h2>Servicios de la categoría: {{ $category->NameCategory }}</h2>
        <div class="row">
            @forelse ($category->services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay servicios disponibles para esta categoría.</p>
            @endforelse
        </div>
    </div>
@endsection
</body>

</html>