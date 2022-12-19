<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-4">Tambah Pengguna</a>
        <table class="table table-hover table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Sandi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $item => $i)
                    <tr>
                        <td>{{ $item + 1 }}</td>
                        <td>{{ $i->nip }}</td>
                        <td>{{ $i->nama }}</td>
                        <td>{{ $i->level }}</td>
                        <td>{{ $i->sandi }}</td>
                        <td>
                            <a href="{{ route('pengguna') }}/{{ $i->nip }}/edit" class="btn btn-warning">Edit</a>
                            <a href="{{ route('pengguna') }}/{{ $i->nip }}/hapus" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
