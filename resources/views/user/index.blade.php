<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://pbs.twimg.com/media/ExfEkIEVgA8M5Zi.jpg:large">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Memposisikan baris secara horizontal di tengah */
        gap: 10px;
        /* Spasi antara kartu */
        padding: 20px;
        /* Padding di dalam container */
    }

    .card {
        width: 18rem;
        margin-bottom: 20px;
        /* Jarak antara baris kartu */
    }
</style>

<body>
    <div class="card-container">
        @foreach ($data as $da)
            @if ($da->IsDelete == 0)
                <div class="card" style="width: 18rem;">
                    <img style="width: 200px;" src="data:image/png;base64,{{ base64_encode($da->foto_batik) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $da->nama_batik }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            ofthe card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori : {{ $da->kategori_batik }}</li>
                        <li class="list-group-item">Stock : {{ $da->stok_batik }}</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
