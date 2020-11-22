<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Kelompok Voyager Crud Rapat Ortu</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/pegawai/tambah" class="btn btn-primary">Input Data Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Materi Pertemuan</th>
                                <th>Tgl Pertemuan</th>
                                <th>Jumlah Hadir</th>
                                <th>Bukti</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->materi_pertemuan}}</td>
                                <td>{{ $p->tgl_pertemuan}}</td>
                                <td>{{ $p->jumlah_hadir}}</td>
                                <td>{{ $p->bukti }}</td>
                                <td>
                                    <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
